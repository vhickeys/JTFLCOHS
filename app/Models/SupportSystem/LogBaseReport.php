<?php

namespace App\Models\SupportSystem;

use Illuminate\Database\Eloquent\Model;

class LogBaseReport extends Model
{
    protected $table = 'log_base_reports';

    protected $fillable = [
        'log_base',
        'ration_status',
        'pol_status',
        'ammunition_status',
        'medical_sup_status',
        'comments',
    ];
}
