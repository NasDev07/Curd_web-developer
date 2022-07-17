<?php

namespace App\Models;

use App\Models\Nilai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = ['grade_id','nama', 'nim', 'jurusan', 'no_hp'];

    public function nilai() {
        return $this->hasMany('App\Models\Nilai');
    }
}
