<?php

namespace App\Models\SupportSystem;

use Illuminate\Database\Eloquent\Model;

class UnitNomenclature extends Model
{
    protected $table = 'unit_nomenclature';

    protected $fillable = [
        'unit',
        'status',
    ];
}
