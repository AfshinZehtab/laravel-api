<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $fillable = ['employee', 'supervisor'];
    protected $table = 'personnels';

    public function personnelNames()
    {
        return $this->hasMany('App\Personnel');
    }
}
