<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class KelasMahasiswaRequest extends FormRequest
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
        // $id_kelas = Route::input('id_kelas');
        return [
            'id_kelas'      => 'required|integer',
            'id_mahasiswa'  => ['required','integer',
            Rule::unique('kelas_mahasiswa', 'id_mahasiswa')->whereNull('id_kelas')->where('id_kelas', $this->id_kelas)]
        ];
    }

    public function messages()
    {
        return [
            'id_mahasiswa.unique' => 'Mahasiswa telah terdaftar di kelas ini'
        ];
    }

}
