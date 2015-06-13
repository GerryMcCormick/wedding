<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUtilityRequest extends Request {

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
            'name'        => 'required',
            'telno'       => 'required|numeric',
            'cost'        => 'required|numeric:regex:/[\d]{2},[\d]{2}/',
            'paid'        => 'required|numeric',
            'date_due'    => 'required|date'
		];
	}

}
