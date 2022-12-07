<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    use HasFactory;
    protected $table = "aspirasi";
    protected $fillable = [
        "judul", 
        "isi",
        "user_id",
    ];
    public function user_aspirasi()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
