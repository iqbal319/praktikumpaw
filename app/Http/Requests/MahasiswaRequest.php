<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
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
     * @return array
     */
    public function rules()
    {
        return [
            "nrp" => ["required", "min:12", "max:12", "string"],
            "nama" => ["required", "string"],
            "email" => ["required","email", "unique:tbl_mahasiswa,email"],
            "alamat" => ["required"],
            "ipk" => ["required", "numeric"],
            "status" => ["required"]
        ];
    }
}
