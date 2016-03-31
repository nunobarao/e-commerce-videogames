<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
//Path currente para passarmos para o controlador. about, news, games etc
$url = Request::path();

//Se a path não for vazia / passamos para o controlador resolver
//Fiz este route para passar as páginas do navbar
//Games News About Jobs Contact
if($url == 'games' || $url == 'news' || $url == 'about' || $url == 'jobs' || $url == 'contact')
	Route::get('/' . $url, 'PagesController@' . $url );

//Se a path for vazia / chamamos a view welcome
//Fiz este rout para prevenir erro quando o url é vazio ou contém uma barra /
Route::get('/', function()
{
	return view('welcome');
});


//echo $url;
//O url neste caso será o games/id que vem do link de cada capa de jogo
//Fiz este route para chamar a revisão do jogo em que clicámos
//ESTE IF ELSE É PARA QUANDO O URL FOR LOGIN OU REGISTER O GAME CONTROLLER NÃO CHAMAR PARA NÃO DAR ERRO
//TEMPORÁRIO
if($url == 'login' || $url == 'register' || $url == 'access' || $url == 'home')
{
	//echo 'Ok';
}
else
{
	Route::get('/{gameTitle}', 'GamesController@index');  
}

//Se a path for games chamamos o controlador Pages para ir buscar a informação á base de dados
Route::resource('games', 'PagesController@games');
*/
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

use Illuminate\Http\Request;

Route::group(['middleware' => 'web'], function () {
    Route::auth();
	
    //Path currente para passarmos para o controlador. about, news, games etc
	//$url = Request::path();

	//Se a path não for vazia / passamos para o controlador resolver
	//Fiz este route para passar as páginas do navbar
	//Games News About Jobs Contact
	/*if($url == 'games' || $url == 'news' || $url == 'about' || $url == 'jobs' || $url == 'contact')
		Route::get('/' . $url, 'PagesController@' . $url );
	*/
	Route::get('/games', 'PagesController@games');
	Route::get('/news', 'PagesController@news');
	Route::get('/about', 'PagesController@about');
	Route::get('/jobs', 'PagesController@jobs');
	Route::get('/contact', 'PagesController@contact');
	//Se a path for vazia / chamamos a view welcome
	//Fiz este rout para prevenir erro quando o url é vazio ou contém uma barra /
	Route::get('/', function()
	{
		return view('welcome');
	});


	//echo $url;
	//O url neste caso será o games/id que vem do link de cada capa de jogo
	//Fiz este route para chamar a revisão do jogo em que clicámos
	//ESTE IF ELSE É PARA QUANDO O URL FOR LOGIN OU REGISTER O GAME CONTROLLER NÃO CHAMAR PARA NÃO DAR ERRO
	//TEMPORÁRIO
	/*if($url == 'login' || $url == 'register' || $url == 'access' || $url == 'home')
	{
		//echo 'Ok';
	}
	else
	{
		Route::get('/{gameTitle}', 'GamesController@index');  
	}
	*/
	Route::get('/games/{gameTitle}', 'GamesController@index');
	//Se a path for games chamamos o controlador Pages para ir buscar a informação á base de dados
	//Route::resource('games', 'PagesController@games');
    //

	Route::get('/home', 'HomeController@index');

	Route::get('access', function()
	{
		echo 'You have access!';
	})->middleware('isAdmin');
	
	Route::get('form',function()
	{
		return view('form');
	});

	Route::post('post_to_me', function(Request $request)
	{
		echo $request->input('name');
	});
});
