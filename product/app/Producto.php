<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ["nombre","valor","cantidad","estado","categoriaId"];
    
}
