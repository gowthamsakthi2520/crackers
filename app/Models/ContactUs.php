<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
	use SoftDeletes;

   	protected $softDelete = true;
    protected $table = 'contact_us';
	protected $primaryKey = 'id';
}
