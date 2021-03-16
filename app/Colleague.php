<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Colleague extends Model
{
    protected $guarded = ['id'];

    public static function rules($update = false, $id = null){
        $rules = [
            'first_name'    => 'required',
            'email'         => ['required', Rule::unique('colleagues')->ignore($id, 'id'), 'email'],
            'gender'        => ['required', Rule::in(['male', 'female'])],
            'addres'        => 'required',
            'phone_number'  => ''
        ];

        if($update == true) {
            return $rules;
        }

        return array_merge($rules, [
            'email' => 'required|unique:colleagues,email'
        ]);
    }
}






