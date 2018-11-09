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
        
        return view('templates.home', ['success' => false, 'lots' => $rows]);
    }
    
    public function confirmation() {
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
        
        return view('templates.home', ['success' => true, 'lots' => $rows]);
    }
    
    public function contact(Request $request) {
        // SAVE TO DB
        DB::table('pitch_asnieres')->insert([
            'Php_id' => 122,
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
            'projet' => $request->input('type-demande'),
        ]);
        
        
        $msg = 'Bonjour, <br><br>

        Cette personne a souhaité avoir des informations : <br><br>
        
        <b>Ses coordonnées</b><br>
        Civilité : '.$request->input('civilite') .'<br>
        Nom : '.$request->input('nom').'<br>
        Prénom : '.$request->input('prenom').'<br>
        Téléphone : '.$request->input('telephone').'<br>
        Email : '.$request->input('email').'<br>
        Code postal : '.$request->input('cp').'<br>
        Ville : '.$request->input('ville').'<br><br>
        
        <b>Programme concerné</b><br>
        Ville programme : (92) Asnières-sur-Seine<br>
        Nom du programme : Artchipel<br><br>
        
        <b>Origine publicitaire</b><br>
        Source : '.$request->session()->get('utm_source', 'accès direct').'<br>
        Media : ' .$request->session()->get('utm_medium', 'accès direct').'<br><br>
        
        <b>Complément info :</b><br>
        Destination du bien : '.$request->input('type-demande').'<br>
        Publicité acceptée : '.$request->input('optin', 'NON').'<br>
        Date demande : '.date('Y/m/d H:i:s').'';
        
        # Instantiate the client.
        $mgClient = new Mailgun(ENV('MAILGUN_API_KEY'));
        $domain = ENV('MAILGUN_DOMAIN');
        
        # Make the call to the client.
        $result = $mgClient->sendMessage($domain, array(
            'from'    => $request->input('prenom') .' ' .$request->input('nom') .' <' .$request->input('email') .'>',
            //'to'      => 'nico@stay-up.fr',
            'to' => '<artchipel@serenis.com>,<achung@pitchpromotion.fr>,<claval@pitchpromotion.fr>,<v.reynaud@3cent60.net>',
            'subject' => '(92) Asnières – Artchipel – Landing Page',
            'html'    => $msg
        ));
        
        /*if($result->http_response_code == 200) {
            //return view('templates.home', ['success' => true]);
        }  */  
        
        //Set fields accordingly
            $koban_fields = [
                'contact_gender' => $request->input('civilite') == '02 | Monsieur' ? 'MR' : 'MME',
                'contact_name' => $request->input('nom'),
                'contact_firstname' =>  $request->input('prenom'),
                'contact_phone' =>  $request->input('telephone'),
                'contact_email' =>  $request->input('email'),
                'third_adrszipcode' =>  $request->input('cp'),
                'third_adrscity' =>  $request->input('ville'),
                'Spe59ae501e0dc36108dc0ae124' => $request->input('type-demande') == 'Habiter' ? '[LST]59ad02f90dc36113941d101d;59ad030e0dc36113941d101f' : '[LST]59ad02f90dc36113941d101d;59ad03180dc36113941d1020',
                'Spenl_59b6655c0dc3610e7843eb04' => $request->input('optin') == 'OUI' ? 'True' : 'False',
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
                '_lp'           => '5b98c2740dc36416b8e60504', //landing page ID
                'id'            => '5b05892d0dc3730ab40241e9', //Form ID
                'cid'           => $request->cookie('kbntrk'), // Client ID from cookie
                'zid'           => '59a409360dc3610e785da809', // Koban user ID
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
