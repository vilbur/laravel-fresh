<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

	protected $fillable = ['logo',  'name', 'claim','about', 'street',  'house_number', 'city', 'zip', 'tel_1', 'tel_2', 'email','email_1', 'email_2', 'fax'];

	protected $table = 'company';

	protected $hidden = [];

	/**
	*
	*
	*
	**/
	public function getStreetNumberAttribute (){
		return $this->attributes['street'] . " " . $this->attributes['house_number'] ;

	}





}
