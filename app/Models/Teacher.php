<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $table = 'art_teacher';

    const STATUS_AUDITING = 0;
    const STATUS_PASS 	 = 1;

    public function scopeStatusPass($query)
    {
    	return $query->where('status', self::STATUS_PASS);
    }
}
