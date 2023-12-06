<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'name',
        'tid',
        'position',
        'birthdate',
        'onboarddate',
        'height',
        'weight',
        'year',
        'nationality'
    ];        

    public function team()
    {
        return $this->belongsTo('App\Models\Team', 'tid', 'id');
    }
}
