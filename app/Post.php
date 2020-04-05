<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps (Unnecessary, by default already set to true)
    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\User');
    }
}