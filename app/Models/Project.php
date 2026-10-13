<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'client_name',
        'year',
        'summary',
        'description',
        'thumbnail',
        'gallery',
        'video_url',
        'tech_stack',
        'demo_url',
        'github_url',
        'is_featured',
        'status',
        'display_order',
    ];

    protected $casts = [
        'tech_stack' => 'array',
        'gallery' => 'array',
        'is_featured' => 'boolean',
        'display_order' => 'integer',
    ];

    /**
     * Scope query to only published projects.
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    /**
     * Auto generate unique slug if not set.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });
    }

    /**
     * Helper to get full thumbnail URL.
     */
    public function getThumbnailUrlAttribute(): string
    {
        if (!$this->thumbnail) {
            return asset('images/default-project.jpg');
        }

        if (Str::startsWith($this->thumbnail, ['http://', 'https://'])) {
            return $this->thumbnail;
        }

        return asset('storage/' . $this->thumbnail);
    }

    /**
     * Dynamic unified media gallery items list.
     * Guaranteed backward-compatible with single-thumbnail projects.
     */
    public function getMediaListAttribute(): array
    {
        $items = [];

        // 1. Primary image (thumbnail)
        if ($this->thumbnail) {
            $items[] = [
                'type' => 'image',
                'url' => $this->thumbnail_url,
                'thumb_url' => $this->thumbnail_url,
                'title' => $this->title . ' — Primary Architecture Overview',
                'caption' => 'Primary Architecture View'
            ];
        }

        // 2. Extra gallery images (exclude unsplash dummy stock images)
        if (!empty($this->gallery) && is_array($this->gallery)) {
            foreach ($this->gallery as $index => $item) {
                if (is_string($item)) {
                    if (str_contains($item, 'unsplash.com')) {
                        continue;
                    }
                    $url = Str::startsWith($item, ['http://', 'https://']) 
                        ? $item 
                        : (Str::startsWith($item, '/') ? asset(ltrim($item, '/')) : asset('storage/' . $item));
                    $items[] = [
                        'type' => 'image',
                        'url' => $url,
                        'thumb_url' => $url,
                        'title' => $this->title . ' — Detail View #' . ($index + 1),
                        'caption' => 'Interface Detail ' . ($index + 1)
                    ];
                } elseif (is_array($item)) {
                    $rawUrl = $item['url'] ?? '';
                    if (str_contains($rawUrl, 'unsplash.com')) {
                        continue;
                    }
                    $type = $item['type'] ?? 'image';
                    $url = Str::startsWith($rawUrl, ['http://', 'https://']) 
                        ? $rawUrl 
                        : (Str::startsWith($rawUrl, '/') ? asset(ltrim($rawUrl, '/')) : asset('storage/' . $rawUrl));
                    $thumb = !empty($item['thumb_url'])
                        ? (Str::startsWith($item['thumb_url'], ['http://', 'https://']) ? $item['thumb_url'] : asset('storage/' . $item['thumb_url']))
                        : ($type === 'image' ? $url : $this->thumbnail_url);

                    $items[] = [
                        'type' => $type,
                        'url' => $url,
                        'thumb_url' => $thumb,
                        'title' => $item['title'] ?? ($this->title . ' — ' . ucfirst($type) . ' #' . ($index + 1)),
                        'caption' => $item['caption'] ?? (ucfirst($type) . ' ' . ($index + 1))
                    ];
                }
            }
        }

        // 3. Optional video demo
        if (!empty($this->video_url)) {
            $videoUrl = Str::startsWith($this->video_url, ['http://', 'https://']) 
                ? $this->video_url 
                : asset(ltrim($this->video_url, '/'));

            $items[] = [
                'type' => 'video',
                'url' => $videoUrl,
                'thumb_url' => $this->thumbnail_url,
                'title' => $this->title . ' — Interactive System Walkthrough',
                'caption' => 'Video Walkthrough'
            ];
        }

        return $items;
    }
}
