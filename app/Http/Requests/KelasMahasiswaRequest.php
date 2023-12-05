<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        return [
            'id_kelas'      => 'required|integer',
            'id_mahasiswa'  => 'required|integer|unique:kelas_mahasiswa,id_mahasiswa'
        ];
    }

    public function messages()
    {
        return [
            'id_mahasiswa.unique' => 'Mahasiswa telah terdaftar di kelas ini'
        ];
    }
}
