<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{   
    protected $guarded = [];

    public function profileImage()
    {
        return '/storage/' . (($this->image) ?   $this->image : '/profile/4yEChA3nWUvWLCuEXRiqybzRIU9Nlug7G98xGK83.jpg');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}