<?php
declare(strict_types=1);

namespace App\SliderModule\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Slider extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = [
        'slides'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


    /**
     * @return HasMany
     */
    public function slides(): HasMany
    {
        return $this->hasMany(SliderItem::class, 'slider_id', 'id');
    }
}
