<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        'user_id', 'file', 'alamat', 'kota', 'agama',
    ];

    public static function valid()
    {
        return array('name' => 'required',
            'file' => 'required|mimes:pdf|max:2048',
        );
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'user_id');
    }
}
