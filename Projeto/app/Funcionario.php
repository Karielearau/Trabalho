<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Caminhao;

class Funcionario extends Model
{
   protected $fillable=[
    'nome',
    'cpf',
    'datadeNacimento',
    'telefone',
    'salario',
    'caminhao_id'
   ];
   protected $table = 'funcionarios';

   
   public function caminhao(){
    return $this->BelongsTo(Caminhao::class , 'caminhao_id');   
   }
   

   
}
