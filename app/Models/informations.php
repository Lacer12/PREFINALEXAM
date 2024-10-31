<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class informations extends Model
{
    protected $table = 'informations';
    protected   $fillable = [
        
             'name',
            'contact',
            'Education1',
            'Education2',
            'Experience1',
           'Experience2',
            'Skill',
    ];
}


