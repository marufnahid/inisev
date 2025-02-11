<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = ['web_id', 'title', 'description'];

    public function web()
    {
        return $this->belongsTo(Web::class);
    }
}
