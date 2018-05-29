<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $timestamps = false; // desativa as colunas padroes do Model updated_at, created_at
    
    /*
        Para configurar o nome da tabela que essa classe deve usar, utilizamos
        o comando abaixo. Obs. caso a table seja do mesmo nome da classe no 
        plural não ha necessidade de informar, o proprio laravel saberá disso.
     */
    protected $table = 'produtos';
    protected $fillable = [
        'nome',
        'descricao',
        'quantidade',
        'id'
    ];

    /*
        Uma outra opção para o $fillable é utilizar um $guarded
        que faz justamente o contrario do $fillable, pois nele 
        você deve informar quais campos são proibidos. No caso
        do $fillable você deve indicar quais são os campo 
        permitidos

        ex:
        protected $guarded = ['id'];
     */
    
}
