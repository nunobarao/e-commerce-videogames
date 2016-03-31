<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Game;


class GamesController extends Controller
{
    public function index($gameTitle)
    {
    	//Repomos os espaços brancos para podermos procurar na base de dados
    	$reporEspacosBrancos = str_replace('-',' ',$gameTitle);
    	//Vai buscar a informação do id do jogo, da base de dados da tabela games através do modelo game::all();
    	$games = game::where('title', '=', $reporEspacosBrancos)->first();

    	//echo $games;
    	//Retorna a informação em formato Json ex: [{"id":1},["id:2"}]]
    	//return $games;

    	//Aqui retorna a view gameReview com a data 'gameData' que é o nome que vai substituir a variavel $games no blade
    	return view('gameReview')->with('gameData', $games);
    }
}
