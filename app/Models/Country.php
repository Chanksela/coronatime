<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Country extends Model
{
	use HasFactory;

	use HasTranslations;

	protected $fillable = [
		'name',
		'country_code',
		'confirmed',
		'recovered',
		'deaths',
		'total_confirmed',
		'total_recovered',
		'total_deaths',
	];

	protected $translatable = [
		'name',
	];
}