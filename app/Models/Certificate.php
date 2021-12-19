<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $table = 'data_certificate';
    protected $fillable = [
        'title',
        'picture'
    ];
}
