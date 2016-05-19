<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // Nombre de la tabla
    protected $table = 'tags';
    // Campos que puedo llenar
    protected $fillable = ['nombre'];
    // No Timestamps
    public $timestamps = false;

    // Relationships N:N
    public function posts(){
        return $this->belongsToMany('Blog\Post');
    }
}
