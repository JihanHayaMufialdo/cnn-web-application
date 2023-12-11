<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        $user = $this->route('user');

        $rules = [
            'nama'  => 'required|string',
            'nip' => [
                'sometimes',
                'nullable',
                'string',
                Rule::unique('users', 'nip')->ignore(optional($user)->id),
            ],
        ];

        if ($this->isMethod('post')) {
            $rules += [
                'username' => 'required|string|unique:App\Models\User,username',
                'password' => 'required|string|confirmed',
                'role'     => 'required|string|in:dosen',
            ];
        }

        return $rules;
    }
    public function messages()
    {
        return [
            'nama.required'                     => 'Nama dosen harus diisi',
            'nip.unique'                        => 'NIP telah terdaftar',
            'role.required'                     => 'Role harus diisi',
            'username.required'                 => 'Akun pengguna harus diisi',
            'username.unique'                   => 'Akun pengguna sudah digunakan',
            'password.required'                 => 'Kata sandi harus diisi',
            'password.confirmed'                => 'Konfirmasi kata sandi harus sesuai'
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
