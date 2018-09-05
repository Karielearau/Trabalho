<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Funcionario;
class Caminhao extends Model
{
   protected $fillable =[
    'placa',
    'modelo',
    'marca',
    'cor',
    'ano',
    'renavan',       
   ];
   
   protected $table = 'caminhoes'; 

  
 
      public function funcionario()
       {
           return $this->hasOne(Funcionario::class, 'caminhao_id');
       }
   
  
  
  
}
