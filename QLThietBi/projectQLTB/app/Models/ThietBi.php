<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\LoaiThietBi;

class ThietBi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'thietbis';
    protected $primaryKey = 'ma_of_thietbi';

    public function loai_thietbi()
    {
        return $this->belongsTo(LoaiThietBi::class, 'ma_loai', 'ma_thietbi');
    }

    protected $fillable = [
        'ten_thiet_bi',
        'mota_thiet_bi',
        'nam_san_xuat',
        'ma_loai'
    ];
}
