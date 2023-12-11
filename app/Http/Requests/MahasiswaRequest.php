<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRequest extends FormRequest
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
        $mahasiswaId = $this->route('mahasiswa');

        return [
            'index' => 'sometimesa|integer',
            'npm' => [
                'required',
                'numeric',
                Rule::unique('mahasiswa', 'npm')->ignore(optional($mahasiswaId)->id),
            ],
            'nama' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'npm.required' => 'NPM harus diisi',
            'npm.numeric' => 'NPM harus berupa angka',
            'nama.required' => 'Nama harus diisi'
        ];
    }
}
