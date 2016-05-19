<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;
// Eliminación de bajo nivel
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $table = 'posts';
    // Cambiamos el key
    protected $primaryKey = 'codigo';
    // Cambiamos el Auto Increment
    public $incrementing = false;

    protected $fillable = ['codigo', 'titulo', 'contenido', 'publicado'];

    // Campos de fechas (Timestamps)
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    // Relationships N:1
    public function categoria(){
        return $this->belongsTo('Blog\Categoria');
    }

    // Relationships N:N
    public function tags(){
        return $this->belongsToMany('Blog\Tag');
    }
}
