<?php

namespace App\Models;

use Database\Factories\WidgetFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    /** @use HasFactory<WidgetFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'quantity',
        'description',
    ];
}
