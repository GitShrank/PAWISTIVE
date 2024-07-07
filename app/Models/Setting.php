<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    // Define the table if it is different from the default name
    protected $table = 'settings';

    // Define any additional fields if necessary
    protected $fillable = [
        'key', 'value'
    ];
}
