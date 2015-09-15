<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $table = 'art_teacher';

    public static $rules = [
    	'name' => 'required',
    	'idcard_front' => 'required',
    	'idcard_back' => 'required',
    	'school' => 'required',
    	'phone' => 'required',
    	'cid' => 'required',
    	'method' => 'required',
    	'address' => 'required',
    	'teach_age' => 'required',
    	'style' => 'required',
    	'intro' => 'required',
    ];

    // 审核状态
    const STATUS_AUDITING = 0;
    const STATUS_PASS 	 = 1;

    public function scopeStatusPass($query)
    {
    	return $query->where('status', self::STATUS_PASS);
    }
}
