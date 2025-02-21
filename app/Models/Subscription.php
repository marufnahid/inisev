<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    //

    protected $fillable = ['website_id', 'email'];

    public function web()
    {
        return $this->belongsTo(Web::class);
    }
}
