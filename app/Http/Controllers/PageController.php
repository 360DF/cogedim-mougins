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
        
    }

    public function index($locale = 'fr') {
        
        return view('templates.home', ['success' => false]);
    }
    
    public function confirmation() {

        return view('templates.home', ['success' => true]);
    }
    
    public function contact(Request $request) {
        // SAVE TO DB
        DB::table('groupe_cardinal_saint_just')->insert([
            'Php_id' => 129,
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
            'projet' => $request->input('projet'),
        ]);
        //SEND CONTACT VIA MAILGUN
        $msg = 'Bonjour, <br><br>

        Cette personne a souhaité avoir des informations : <br><br>
        
        <b>Programme concerné</b><br>
        Promoteur: Groupe Cardinal<br>
        Ville programme : (38) SAINT-JUST-CHALEYSSIN<br>
        Nom du programme : RUE GASTON PERRIER<br><br>
        
        <b>Coordonnées du contact</b><br>
        Civilité : '.$request->input('civilite') .'<br>
        Nom : '.$request->input('nom').'<br>
        Prénom : '.$request->input('prenom').'<br>
        Téléphone : '.$request->input('telephone').'<br>
        Email : '.$request->input('email').'<br>
        Code postal : '.$request->input('cp').'<br>
        Ville : '.$request->input('ville').'<br><br>
        Projet: '.$request->input('projet').'<br>
        Optin : '.$request->input('optin', 'NON').'<br><br>
        
        
        <b>Origine publicitaire</b><br>
        Source : '.$request->session()->get('utm_source', 'accès direct').'<br>
        Campagne : '.$request->session()->get('utm_campaign', 'accès direct').'<br>
        Media : ' .$request->session()->get('utm_medium', 'accès direct').'<br><br>';
        
        /*<b>Complément info :</b><br>
        Date demande : '.date('Y/m/d H:i:s').'';*/
        
        # Instantiate the client.
        $mgClient = new Mailgun(ENV('MAILGUN_API_KEY'));
        $domain = ENV('MAILGUN_DOMAIN');
        
        # Make the call to the client.
        $result = $mgClient->sendMessage($domain, array(
            'from'    => $request->input('prenom') .' ' .$request->input('nom') .' <' .$request->input('email') .'>',
            //'to'      => '<nico@stay-up.fr>, <v.reynaud@3cent60.net>',
            'to' => '<immostjust@wanadoo.fr>,<philippe.drunet@wanadoo.fr >,<v.reynaud@3cent60.net>',
            'subject' => '(38) SAINT-JUST-CHALEYSSIN – Landing Page',
            'html'    => $msg
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
                'Tag5b45cda70dc36103a06d869c' => $request->input('projet') == 'habiter' ? '5b45cdb10dc36103a06d869e' : '5b45cdb70dc36103a06d86a4',
                'Spenl_5b45c0cb0dc3610a10bc9013' => $request->input('optin') == 'OUI' ? 'True' : 'False',
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
                '_lp'           => '5bebf99c0dc3610ac87da14a', //landing page ID
                'id'            => '5b45ce560dc36103a06d86ec', //Form ID
                'cid'           => $request->cookie('kbntrk'), // Client ID from cookie
                'zid'           => '5b45c0c50dc3610a10bc8fad', // Koban user ID
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
            return redirect()->route('confirmation');
        }
    }
    public function test() {
        $reader = Reader::createFromPath(__DIR__.'/../../../public/stock.csv', 'r');
        $reader->setEncodingFrom('iso-8859-15');
        $reader->setDelimiter(';');
        
        $rows = [];
        
        foreach($reader as $row) {
            array_push($rows, $row);
        }
        
        $rows = collect($rows)->groupBy(function($item, $key) {
            return $item[3];
        })->toArray();
        
        return view('templates.test', ['success' => false, 'lots' => $rows]);
    }
}
