<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObserverUpdateRequest extends FormRequest
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
            'user_id' => 'required',
            'course_id' => 'required',
            //'rol_id' => 'required',
            'creator_id' => 'required',
            'observer_type_id' => 'required',
            'observer_scene_id' => 'required',
            'observer_category_id' => 'required',
            'observer_note_id' => 'required',
            'observer_code_id' => 'required',
            'observation' => 'required',
            //'state' => 'required',
        ];
    }
}
