<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public static function fruits() {
        return array('apple', 'banana', 'orange');
    }
}
