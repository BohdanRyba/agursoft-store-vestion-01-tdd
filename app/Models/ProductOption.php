<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProductOption extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $appends = [
        'picture',
        'back_image',
    ];
    /**
     * @return mixed
     */
    public function getPictureAttribute()
    {
        if ($this->getFirstMediaUrl('picture')) {
            return $this->getFirstMediaUrl('picture');
        }
        return '';
    }

    /**
     * @return mixed
     */
    public function getBackImageAttribute()
    {
        if ($this->getFirstMediaUrl('back_picture')) {
            return $this->getFirstMediaUrl('back_picture');
        }
        return '';
    }

    /**
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * @param Media|null $media
     * @return void
     * @throws InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(130)
            ->height(130);
    }

    /**
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('picture')->singleFile();
        $this->addMediaCollection('back_picture')->singleFile();
    }
}
