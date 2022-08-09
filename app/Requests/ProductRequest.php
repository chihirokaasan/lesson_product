<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{

    public function rules()
    {
        return [
            'per_page_record' => 'numeric',
            'page'            => 'numeric',
            'name'            => 'nullable|string',
            'category_id'     => 'nullable|numeric',
        ];
    }
}

