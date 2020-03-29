<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    // Table
    protected $table = 'posts';
    // Primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
