<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Article extends Model
{
    use HasFactory, HasUuids;

    /**
     * Nama tabel (jika berbeda dari plural nama model).
     */
    protected $table = 'articles';

    /**
     * Kolom yang bisa diisi secara massal.
     */
    protected $fillable = [
        'user_id',
        'title',
        'author',
        'views',
        'thumbnail_path',
        'video_url',
        'content',
        'status',
        'published_at',
    ];

    /**
     * Casting tipe data.
     */
    protected $casts = [
        'published_at' => 'datetime',
    ];

    /**
     * Relasi: artikel dimiliki oleh satu user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope opsional: hanya artikel yang sudah publish.
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }
}
