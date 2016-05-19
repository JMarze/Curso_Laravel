<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // Nombre de la tabla
    protected $table = 'categorias';
    // Campos que puedo llenar
    protected $fillable = ['nombre'];
    // No Timestamps
    public $timestamps = false;

    // Relationships 1:N
    public function posts(){
        return $this->hasMany('Blog\Post');
    }
}
