<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'data_portfolio';
    protected $fillable = [
        'title',
        'website'
    ];
}
