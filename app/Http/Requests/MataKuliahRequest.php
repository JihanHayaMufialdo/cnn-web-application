<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class MataKuliahRequest extends FormRequest
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
        $matakuliah = $this->route('matakuliah');

        return [
            'nama_mk'   => 'required|string',
            'kode_mk'   => ['required','string',Rule::unique('mata_kuliah', 'kode_mk')->ignore(optional($matakuliah)->id)],
            'semester'  => 'required|string|in:1,2,3,4,5,6,7,8',
            'sks'       => 'nullable|integer',
            'status'    => 'nullable|string|in:W,P'
        ];
    }

    public function messages()
    {
        return [
            'nama_mk.required'  => 'Mata kuliah harus diisi',
            'kode_mk.required'  => 'Kode mata kuliah harus diisi',
            'semester.required' => 'Semester harus diisi',
            'kode_mk.unique'    => 'Kode mata kuliah sudah terdaftar'
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
