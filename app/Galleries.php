<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galleries extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description'
    ];

    public function user() {
        $this->belongsTo(User::class);
    }

}
