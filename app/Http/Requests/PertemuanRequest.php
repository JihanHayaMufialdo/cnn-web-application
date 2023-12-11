<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PertemuanRequest extends FormRequest
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
            'pertemuan' => 'required|integer',
            // 'id_kelas'  => 'required|integer',
            'tanggal'   => 'date',
            'mulai'     => 'required|date_format:H:i',
            'selesai'   => 'required|date_format:H:i',
            'materi'    => 'required|string',
            'ruangan'   => 'string',
            'jenis'     => 'required|in:T,P',
            'status'    => 'string|in:Selesai,Belum'
        ];
    }

    public function messages()
    {
        return [
            'pertemuan.required' => 'Pertemuan harus diisi',
            // 'id_kelas.required'  => 'required|integer',
            // 'tanggal.required'   => 'date',
            'mulai.required'     => 'Waktu mulai harus diisi',
            'selesai.required'   => 'Waktu selesai harus diisi',
            'materi.required'    => 'Materi harus diisi',
            'jenis.required'    => 'Jenis pertemuan harus diisi'
        ];
    }

    // public function withValidator($validator)
    // {
    //     $validator->after(function ($validator) {
    //         if ($validator->errors()->count() > 0) {
    //             // Tampilkan seluruh pesan kesalahan
    //             dd($validator->errors()->all());
    //         }
    //     });
    // }
}
