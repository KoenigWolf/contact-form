<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'name',
        'phone',
        'email',
        'birthdate',
        'gender',
        'occupation',
        'message',
    ];
}
