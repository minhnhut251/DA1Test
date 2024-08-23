<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sinhvien extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'mssv',
        'hoten',
        'sdt',
        'ngaysinh',
        'gioitinh'
    ];
}
