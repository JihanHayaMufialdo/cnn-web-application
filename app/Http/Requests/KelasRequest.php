<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KelasRequest extends FormRequest
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
            'nama'      => 'required|string',
            'id_matkul' => 'required|integer',
            'id_dosen'  => 'required|string',
            'periode'   => 'required|string|in:2023 Ganjil,2023 Genap',
            'kurikulum' => 'required|string|in:2020',
            'kuota'     => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'nama.required'      => 'Nama kelas harus diisi',
            'id_matkul.required' => 'Mata kuliah harus diisi',
            'id_dosen.required'  => 'Dosen pengampu harus diisi',
            'periode.required'   => 'Periode harus diisi',
            'kurikulum.required' => 'Kurikulum harus diisi',
            'kuota.required'     => 'Kuota kelas harus diisi'
        ];
    }
}
