<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
	//Esta linha define qual a tabela da base de dados que el vai buscar a informação
	//Se não tiver definida, o modelo vai buscar a informação á tabela com o mesmo nome
	//do modelo mas no plural. por exemplo: nome do modelo Game, nome da tabela games.
	
    //protected $table = 'games';
}
