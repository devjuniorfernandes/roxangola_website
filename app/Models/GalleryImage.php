<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\HasTranslations;

class GalleryImage extends Model
{
    use HasTranslations;

    protected $fillable = ['image', 'label', 'label_en', 'sort', 'is_published'];

    protected $casts = ['is_published' => 'boolean'];

    public function scopePublished($query)
    {
        return $query->where('is_published', true)->orderBy('sort')->orderBy('id');
    }
}
