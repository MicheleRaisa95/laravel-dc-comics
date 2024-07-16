<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

     public function rules()
    {
        $comicId = $this->route('comic');

        return [
            'title' => 'required|unique:comics,title,' . $comicId . '|max:255',
            'description' => 'required|min:10',
            'author' => 'required|max:255',
            'thumb' => 'required|url',
            'price' => 'required|numeric',
            'series' => 'required|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|max:255',
            'artists' => 'required',
            'writers' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.unique' => 'Il titolo deve essere unico.',
            'title.max' => 'Il titolo non può superare i 255 caratteri.',
            'description.required' => 'La descrizione è obbligatoria.',
            'description.min' => 'La descrizione deve contenere almeno 10 caratteri.',
            'author.required' => 'L\'autore è obbligatorio.',
            'author.max' => 'L\'autore non può superare i 255 caratteri.',
            'thumb.required' => 'L\'URL della miniatura è obbligatorio.',
            'thumb.url' => 'L\'URL della miniatura deve essere valido.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
            'series.required' => 'La serie è obbligatoria.',
            'series.max' => 'La serie non può superare i 255 caratteri.',
            'sale_date.required' => 'La data di vendita è obbligatoria.',
            'sale_date.date' => 'La data di vendita deve essere una data valida.',
            'type.required' => 'Il tipo è obbligatorio.',
            'type.max' => 'Il tipo non può superare i 255 caratteri.',
            'artists.required' => 'Gli artisti sono obbligatori.',
            'writers.required' => 'Gli scrittori sono obbligatori.',
        ];
    }
}
