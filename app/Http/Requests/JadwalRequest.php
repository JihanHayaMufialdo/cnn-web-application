<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JadwalRequest extends FormRequest
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
            'id_kelas'  => 'required|integer',
            'hari'      => 'required|in:Senin,Selasa,Rabu,Kamis,Jumat',
            'mulai'     => 'required|date_format:H:i',
            'selesai'   => 'required|date_format:H:i',
            'ruangan'   => 'required|string',
            'jenis'     => 'required|in:T,P'
        ];
    }

    public function messages(){
        return [
            'id_kelas.required' => 'Mata kuliah dan kelas harus diisi',
            'hari.required'     => 'Hari harus diisi',
            'mulai.required'    => 'Jam mulai harus diisi',
            'selesai.required'  => 'Jam selesai harus diisi',
            'ruangan.required'  => 'Ruangan kelas harus diisi',
            'jenis.required'    => 'Jenis kelas harus diisi'
        ];
    }
}
