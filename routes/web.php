<?php
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', [
    'as' => 'index', 'uses' => 'PageController@index']
);
$app->get('/confirmation', [
    'as' => 'confirmation', 'uses' => 'PageController@confirmation']
);
$app->get('/{slug}', [
    'as' => 'getProgram', 'uses' => 'PageController@getProgram']
);
$app->post('/contact', ['as' => 'contact', 'uses' => 'PageController@contact']);
$app->post('/etre-appele', ['as' => 'beCalled', 'uses' => 'PageController@contact']);

$app->get('/test', function() {
    return response()->json(Session::all());
});