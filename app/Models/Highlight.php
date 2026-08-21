<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\HasTranslations;

class Highlight extends Model
{
    use HasTranslations;

    protected $fillable = [
        // ── Card (miniatura)
        'image',
        'title', 'title_en',
        'excerpt', 'excerpt_en',
        // ── Pop-up / Artigo
        'modal_image',
        'body', 'body_en',
        // ── Meta
        'link',
        'published_at',
        'sort',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'date',
    ];

    public function scopePublished($query)
    {
        return $query->where('is_published', true)->orderBy('sort')->orderBy('id');
    }
}
