<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'merk',
        'model',
        'tahun',
        'jarak',
        'judul',
        'deskripsi',
        'cc',
        'harga',
        'nego',
        'owner',
        'kontak'
    ];

    public function author(): BelongsTo{
        return $this->belongsTo(User::class, 'owner', 'id');
    }
}