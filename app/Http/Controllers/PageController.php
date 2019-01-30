<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Mailgun\Mailgun;
use DB;
use League\Csv\Reader;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->data = [
            'domaine-jardins-en-vue' => [
                'slug' => 'domaine-jardins-en-vue',
                'name' => 'Domaine jardins en vue',
                'slogan' => 'Entrez dans la confidence d’un domaine très privé',
                'location' => '06250 Mougins',
                'slides' => [
                    'prog2-slide-1.jpg',
                    'prog2-slide-2.jpg',
                    'prog2-slide-3.jpg',
                    'prog2-slide-4.jpg',
                ],
                'title' => 'une résidence avec piscine privée, idéal pour habiter en famille',
                'pros' => [
                    'Face au Vieux Village, une résidence entre calades et jardins méditerranéens.',
                    'Une piscine privée nichée dans un écrin de nature avec larges plages ensoleillées et pool house',
                    'Appartements de grand standing du studio au 4 pièces et quelques villas sur le toit avec terrasses plein ciel et vues sur le Vieux Village'
                ],
                'stock' => [
                    ['Studio', '179 000'],
                    ['2 pièces', '218 000'],
                    ['3 pièces', '290 000'],
                    ['4 pièces', '755 000']
                ],
                'brochure' => '93311_brochure-2.pdf',
                'orbital' => 'https://altarea-cogedim.iframe.evimmo.fr/services/iframev3/maquette?p=116199',
                'itinary' => ['', ''],
            
            ],
            'jardins-des-sens' =>
            [
                'slug' => 'jardins-des-sens',
                'name' => 'Jardins des sens',
                'slogan' => 'Vivre autour d’une piscine privée au calme des côteaux',
                'location' => '06250 Mougins',
                'slides' => [
                    'prog1-slide-1.jpg',
                    'prog1-slide-2.jpg',
                    'prog1-slide-3.jpg',
                ],
                'title' => 'une adresse d’exception sur les hauteurs de Cannes',
                'pros' => [
                    'Idéalement situé à 15 km de Cannes et de la Croisette',
                    'À flanc de côteaux, au cœur d’un jardin méditerranéen, du studio au 3 pièces avec beaux balcons et larges terrasses',
                    'À proximité du futur du cinéma, des commerces et des services',
                ],
                'stock' => [
                    ['Studio', '173 000'],
                    ['2 pièces', '204 000'],
                    ['3 pièces', '259 000']
                ],
                'brochure' => '93311_brochure_1_0.pdf',
                'orbital' => 'https://altarea-cogedim.iframe.evimmo.fr/services/iframev3/maquette?p=116199',
                'itinary' => '',
            
            ]
        ];
    }

    public function index($slug = null) {
        
        return view('templates.home', ['success' => false, 'data' => $this->data, 'route' => 'home']);
    }
    
    public function getProgram(Request $request, $slug = null) {
        
        //$prog = $slug == 'domaine-jardins-en-vue' ? 0 : 1;
        
        
        //dd($this->data);
        return view('templates.program', ['success' => false, 'data' => $this->data[$slug], 'route' => 'getProgram']);
    }
    
    public function confirmation() {

        return view('templates.home', ['success' => true, 'data' => $this->data, 'route' => 'home']);
    }
    
    public function contact(Request $request) {
        // SAVE TO DB
       // dd($request->all());
        DB::table('cogedim_mougins')->insert([
            'Php_id' => 106,
            'email' => $request->input('email'),
            'code_postal' => $request->input('cp'),
            'email' => $request->input('email'),
            'utm_source' => $request->session()->get('utm_source', 'accès direct'),
            'utm_medium' => $request->session()->get('utm_medium', 'accès direct'),
            'utm_campaign' => $request->session()->get('utm_campaign', ''),
            'utm_content' => $request->session()->get('utm_content', ''),
            'utm_term' => $request->session()->get('utm_term', ''),
            'date' => date('Y/m/d H:i:s'),
            'civilite' => $request->input('civilite') == '02 | Monsieur' ? 'Mr' : 'Mme',
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'telephone' => $request->input('telephone'),
            'ville' => $request->input('ville'),
            'optin' => $request->input('optin', 'NON'),
        ]);
        
        //SEND CONTACT VIA MAILGUN
        $civ = $request->input('civilite') == "MME" ? "03 | Madame" : "02 | Monsieur" ;
        $action = $request->path() == 'contact' ? 'DP | demande d’information programme' : 'D3 | demande de rappel programme';

        if($request->path() == 'contact') {
            $comment = $request->input('program') == 'home' ? ' Mougins - Demande d\'informations' : $this->data[$request->input('program')]['name'] . ' Mougins - Demande d\'informations';            
        } else {
$comment = 'Date Heure de Rappel: ' .$request->input('date_submit') .' à ' . $request->input('time') .'h
' .$request->input('program') . ' Mougins - Demande de rappel';
        }
        
$text = 'EXPEDITEUR DU FORMULAIRE : sitelogement@cogedim.com
CANAL : VI
SOCIETE : COGEDIM
OBJET : Demande d\'information venant de la Landing Mougins
EVENEMENT : FG | Formulaire landing logement
ACTION REALISEE : ' .$action .'
SUITE A DONNER : RAPDI | Rappeler rapidement
DATE DE RELANCE :
DATE DEMANDE : '.date('d/m/Y').'
HEURE DEMANDE : '.date('H:i').'
PRIMPROMO PROGRAMME : 93311
CIVILITE : ' .$civ .'
NOM : '.$request->input('nom').'
PRENOM : '.$request->input('prenom').'
TELEPHONE 1 : '.$request->input('telephone').'
ADRESSE MAIL 1 : '.$request->input('email').'
ADRESSE 1 : 
CODE POSTAL : '.$request->input('cp').'
VILLE : '.$request->input('ville').'
PUBLICITE ACCEPTEE : '.$request->input('optin', 'NON') .'
PUBLICITE PARTENAIRE ACCEPTEE : '.$request->input('optin', 'NON') .'
ORIGINE PUBLICITAIRE : 9857 | Mini site
CAMPAGNE : 19-01-jardins_vue_mougins-06-relance
BASE EMAIL : '.$request->session()->get('utm_source') .'
COMMENTAIRE :
' .$comment .'
FIN DE COMMENTAIRE';

        # Instantiate the client.
        $mgClient = new Mailgun(ENV('MAILGUN_API_KEY'));
        $domain = ENV('MAILGUN_DOMAIN');
        
        # Make the call to the client.
        $result = $mgClient->sendMessage($domain, array(
            'from'    => $request->input('prenom') .' ' .$request->input('nom') .' <' .$request->input('email') .'>',
            //'to'      => '<formulaires_crm@altareacogedim.com>',
            //'cc'      => '<sinternet@altareacogedim.com>,<a.monomakhoff@3cent60.net>',
            'to' => '<formulaire.coeurmougins@marketing-lab.com>,<m.mykita@3cent60.net>',
            'subject' => 'Demande d\'information venant de la Landing Cogedim Mougins',
            'text'    => $text
        ));
        
        /*if($result->http_response_code == 200) {
            //return view('templates.home', ['success' => true]);
        }  */  
        
        //Set fields accordingly
            $koban_fields = [
                'contact_gender' => $request->input('civilite'),
                'contact_name' => $request->input('nom'),
                'contact_firstname' =>  $request->input('prenom'),
                'contact_phone' =>  $request->input('telephone'),
                'contact_email' =>  $request->input('email'),
                'third_adrszipcode' =>  $request->input('cp'),
                'third_adrscity' =>  $request->input('ville'),
                'Spenl_587b42a20dc3610ff48d55fe' => $request->input('optin') == 'OUI' ? 'True' : 'False',
                'utm_source'    => $request->session()->get('utm_source', 'accès direct'),
                'utm_medium'    => $request->session()->get('utm_medium', 'accès direct'),
                'utm_campaign'  => $request->session()->get('utm_campaign'),
                'utm_content'   => $request->session()->get('utm_content'),
                'utm_term'      => $request->session()->get('utm_term'),
            ];
            
        //Initialize new guzzle client
        $client = new Client([
            'base_uri' => 'https://addin-koban.com/Form/', []]);
        
        // Make the request   
        $res = $client->request('POST', 'sbm', [
            'query' => [
                '_lp'           => '5af943f70dc36107cc7c9353', //landing page ID
                'id'            => '5943acb00dc36103c832adf5', //Form ID
                //'cid'           => $request->cookie('kbntrk'), // Client ID from cookie
                'zid'           => '587b42980dc3610ff48d55c4', // Koban user ID
                'cnl'           => '',
                'scl'           => '',
                'utm_source'    => $request->session()->get('utm_source', 'accès direct'),
                'utm_medium'    => $request->session()->get('utm_medium', 'accès direct'),
                'utm_campaign'  => $request->session()->get('utm_campaign'),
                'utm_content'   => $request->session()->get('utm_content'),
                'utm_term'      => $request->session()->get('utm_term'),
            ],
            'form_params' => $koban_fields
        ]);
        
        // If success
        if ($res->getStatusCode() == 200) {
            return redirect()->route('confirmation', ['success' => true]);
        }
    }
    
}
