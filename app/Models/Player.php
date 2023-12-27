<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    public function scopeSenior($query)
    {
        return $query->where('year', '>', 10)->orderBy('year', 'asc');
    }

    public function scopeAllPositions($query)
    { 
        return $query->select('position')->groupBy('position');
    }

    public function scopePosition($query, $pos)
    {
        return $query->where('position', '=', $pos);
    }    

    public function scopeAllNationalities($query)
    { 
        return $query->select('nationality')->groupBy('nationality');
    }

    public function scopeNationality($query, $nationality)
    {
        return $query->where('nationality', '=', $nationality);
    }    

    public function scopeBirthdayMonth($query, $month_start, $month_end)
    {
        return $query->whereMonth('birthdate', '>=', $month_start)
                     ->whereMonth('birthdate', '<=', $month_end);
    }
    public function scopeBirthday($query)
    {
        return $query->whereMonth('birthdate', '=', Carbon::today()->month);
    }

}
