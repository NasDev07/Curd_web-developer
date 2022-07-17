<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $datas = ['updated_at'];
    protected $table = 'grade';
    protected $fillable = ['mahasiswa_id', 'mk', 'nilai'];

    public function mahasiswa()
    {
        return $this->belongsTo('App\Models\Mahasiswa');
    }
}
