<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Post extends Model
{
    use Rateable;
    protected $fillable = [
        'rating', 'rateable_type', 'user_id',
    ];



}
