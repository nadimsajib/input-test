<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
     protected $table = 'input_table';
    protected $fillable = [
        'select_input_id',
        'name',
        'address',
        'parent',
    ];
    public function relSelectInput()
    {
        return $this->belongsTo('App\SelectInput', 'select_input_id', 'id');
    }
}
