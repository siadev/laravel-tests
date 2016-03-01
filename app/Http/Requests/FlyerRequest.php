<?php

namespace LaravelExamples\Http\Requests;

use LaravelExamples\Flyer;
use LaravelExamples\Http\Requests\Request;

class FlyerRequest extends Request
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
        $place_validation = Flyer::getPlacesStr();
//      todo: remove this comment.
//        dd($place_validation);
        return [
            'street'      => 'required',
            'city'        => 'required',
            'postcode'    => 'required',
            'state'       => 'required',
            'price'       => 'required|integer',
            'description' => 'required',
            'place'       => ['regex:(uk|fr|au)']
        ];
    }


}
