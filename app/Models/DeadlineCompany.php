<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeadlineCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'start_date',
        'finish_date',
        'status',
    ];
}
