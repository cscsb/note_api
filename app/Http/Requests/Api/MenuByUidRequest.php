<?php


namespace App\Http\Requests\Api;


use App\Http\Requests\Request;

class MenuByUidRequest extends Request
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
            'uid' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'uid.required' => trans('menu.uid_required'),
        ];
    }
}