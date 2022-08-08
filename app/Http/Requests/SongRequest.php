<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SongRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'singer' => 'required',
            'year' => 'required|max:4',
            'minutes' => 'required',
            'img' => 'nullable|image',
        ];
    }

    public function messages() {
        return [
            'title.required'=>"Inserisci un titolo.",
            'singer.required'=>"Inserisci un cantante.",
            'year.required'=>"Inserisci un anno.",
            'year.max'=>"l'anno non esiste.",
            'minutes.required'=>"Inserisci una durata.",
            'img.image'=>"Il file dev'essere un'immagine, riprova.",
        ];
    }
}
