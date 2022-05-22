<?php

namespace App\Models;

use App\CategoryModule\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'category_id',
        'slug',
        'name',
        'short_description',
        'properties',
        'description',
        'price',
        'quantity',
        'discount_percent',
        'discount_amount',
        'type_id',
        'price_dollar',
        'price_euro',
        'old_price',
    ];

    protected $with = [
        'category',
        'media',
        'options',
    ];

    protected $appends = [
        'formatted_price',
        'media_collection',
        'category_name',
        'picture',
        'back_image',
    ];

    /**
     * @return array
     */
    public function getMediaCollectionAttribute(): array
    {
        $result = [];

        foreach ($this->getMediaCollection() as $item) {
            /** @var Media $item */
            $result[] = $item->getFullUrl();
        }

        return $result;
    }

    /**
     * @return MediaCollection
     */
    public function getMediaCollection(): MediaCollection
    {
        return $this->media;
    }

    /**
     * @return string
     */
    public function getCategoryNameAttribute(): string
    {
        return $this->category->title;
    }

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
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    /**
     * @return float
     */
    public function getFormattedPriceAttribute()
    {
        return (float)number_format($this->price / 100, 2, '.', '');
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
        $this->addMediaCollection('gallery');
    }

    /**
     * @return HasMany
     */
    public function options(): HasMany
    {
        return $this->hasMany(ProductOption::class);
    }
}
