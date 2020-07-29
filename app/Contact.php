<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'number'
    ];

    public function users()
    {
        return $this->belongsToMany(Contact::class)->withTimestamps();
    }

    public function addUser($user_id)
    {
        return $this->belongsToMany(Contact::class)->syncWithoutDetaching([$user_id])->withTimestamps();
    }
}
