<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Slider extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    protected $with = [
        'slides'
    ];

    /**
     * @return HasMany
     */
    public function slides(): HasMany
    {
        return $this->hasMany(SliderItem::class,'slider_id','id');
    }
}
