<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostFV extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'              => 'required|max:150',
            'slug'              => 'required|max:191|unique:media,slug,' . $request->get('id'),
            'description'       => 'nullable',
            'category_id'       => 'nullable',
            'post_type'         => 'nullable',
            'link'              => 'nullable',
            'potraitimage'      => 'nullable',
            'landscapeimage'    => 'nullable',
            'post-details'      => 'nullable',
            'ratings'           => 'nullable',
            'release_date'      => 'nullable',
        ];
    }
}
