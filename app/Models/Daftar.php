<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;
    protected $table='tbl_pendaftaran';
    protected $primaryKey='id_pendaftaran';
    protected $guarded=[];
}
