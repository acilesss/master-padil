<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbRealtime extends Model
{
    use HasFactory;

    protected $table = 'db_realtime';
    protected $guarded = [];
}
