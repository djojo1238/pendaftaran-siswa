<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    use HasFactory;

    protected $table = 'tbl_eskul';
    protected $primaryKey = 'id_eskul';
    protected $guarded=[];
}
