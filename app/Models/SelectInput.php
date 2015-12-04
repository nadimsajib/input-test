<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SelectInput extends Model
{
     protected $table = 'select_input_table';
    protected $fillable = [
        'name',
        'note',
        'host',
    ];
}
