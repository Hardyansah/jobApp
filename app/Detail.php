<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        'user_id', 'file', 'alamat', 'kota', 'agama', 'jk', 'sekolah', 'jurusan', 'alamat_sekolah', 'poto',
    ];

    public static function valid()
    {
        return array('file' => 'required|mimes:pdf|max:2048',
            'poto' => 'image|mimes:jpg,jpeg,png|min:1|max:10000',
        );
    }

    public function user()
    {
        return $this->belongsToMany('App\User', 'user_id');
    }
}
