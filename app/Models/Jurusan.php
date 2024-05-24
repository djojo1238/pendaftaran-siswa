<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $table='tbl_jurusan';
    protected $primaryKey = 'id_jurusan';
    protected $guarded=[];
}
