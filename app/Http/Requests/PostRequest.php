<?php

namespace Blog\Http\Requests;

use Blog\Http\Requests\Request;

class PostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'codigo' => 'required|string|size:10',
            'titulo' => 'required|string|max:100|min:2',
            'contenido' => 'required|min:2',
            'categoria_id' => 'required',
        ];
    }
}