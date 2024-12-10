<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    use HasFactory;

    protected $table = "marine_mammals_observations";

    protected $fillable = [
        'project_name',
        'year',
        'month',
        'day',
        'survey_method',
        'longitude',
        'latitude',
        'administrative_region',
        'identification_level',
        'common_species_name',
        'original_species_name',
        'verified_species_code',
        'quantity',
        'quantity_unit',
        'kingdom',
        'kingdom_chinese_name',
        'phylum',
        'phylum_chinese_name',
        'class',
        'class_chinese_name',
        'order',
        'order_chinese_name',
        'family',
        'family_chinese_name',
        'genus',
        'genus_chinese_name',
    ];
}
