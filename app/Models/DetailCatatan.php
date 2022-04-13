<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\User;

class DetailCatatan extends Model
{
    use HasFactory;

    protected $table = 'detail_catatan';
    protected $fillable = [
        'users_id',
        'body_temperature',
        'location',
        'tanggal',
        'jam'
    ];

    public function users() {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
