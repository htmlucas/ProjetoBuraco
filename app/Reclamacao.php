<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reclamacao extends Model
{
    use SoftDeletes;
    
    protected $table = 'reclamacoes';
    protected $fillable = [
        'nome', 'email', 'cep','rua','bairro','observacao','status','agendado','created_at'
    ];
}
