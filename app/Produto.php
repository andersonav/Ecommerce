<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected  $table = "produto";
    protected $primaryKey = "produto_id";
    const CREATED_AT = "data_criacao";
    const UPDATED_AT = "data_atualizacao";
}
