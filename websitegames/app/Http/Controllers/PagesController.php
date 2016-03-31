<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Game;

class PagesController extends Controller
{

    public function index()
    {
        return view('welcome');
    }
	
    public function games()
    {
    	//Vai buscar a informação da base de dados da tabela games através do modelo game::all();
    	$games = game::all();
    	//Retorna a informação em formato Json ex: [{"id":1},["id:2"}]]
    	//return $games;

    	return view('games')->with('games', $games);
        //return view('games');
    }

    public function news()
    {
    	//echo $url
    	return view('news');
    }

    public function about()
    {
    	return view('about');
    }

    public function jobs()
    {
    	return view('jobs');
    }

    public function contact()
    {
    	return view('contact');
    }

}