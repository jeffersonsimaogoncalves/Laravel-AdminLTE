<?php 

namespace App\Http\Requests\Profile; 

use App\Http\Requests\Request; 

class UpdateProfileRequest extends Request 
{ 
	public function authorize() 
	{ 
		return true; 
	} 

	public function messages() 
	{ 
		return [ 
			'email.unique'=>'E-mail já cadastrado no sistema.', 
		]; 
	} 

	public function rules() 
	{ 
		return [ 
            'name' => 'required|string|min:4|max:255',
            'email' => 'required|email|unique:users,email,'.$this->id
		]; 
	} 
}