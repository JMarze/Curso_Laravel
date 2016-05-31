<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;
// Eliminación de bajo nivel
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class Post extends Model
{
    use SoftDeletes;

    protected $table = 'posts';
    // Cambiamos el key
    protected $primaryKey = 'codigo';
    // Cambiamos el Auto Increment
    public $incrementing = false;

    protected $fillable = ['codigo', 'titulo', 'contenido', 'publicado', 'imagen', 'categoria_id'];

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

    // Mutator
    public function setImagenAttribute ($archivo){
        $nuevoNombre = Carbon::now()->year . Carbon::now()->month . Carbon::now()->day . "_" . Carbon::now()->hour . Carbon::now()->minute . Carbon::now()->second . "." . $archivo->getClientOriginalExtension();

        $this->attributes['imagen'] = $nuevoNombre;

        \Storage::disk('local')->put($nuevoNombre, \File::get($archivo));
    }
}
