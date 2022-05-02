<?php
declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * class Concert
 *
 * @property string $title
 * @property string $subtitle
 * @var Carbon $date
 * @property int $ticket_price
 * @property string $venue
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $additional_information
 */
class Concert extends Model
{
    use HasFactory;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'title',
        'subtitle',
        'date',
        'ticket_price',
        'venue',
        'address',
        'city',
        'state',
        'zip',
        'additional_information',
        'published_at',
    ];

    protected $dates = [
        'date'
    ];

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at');
    }

    /**
     * @return string
     */
    public function getFormattedDateAttribute(): string
    {
        return $this->date->format('F j, Y');
    }

    /**
     * @return string
     */
    public function getStartTimeAttribute(): string
    {
        return $this->date->format('g:ia');
    }

    /**
     * @return string
     */
    public function getTicketPriceInDollarsAttribute(): string
    {
        return number_format($this->ticket_price / 100, 2);
    }

    /**
     * @param string $email
     * @param int $quantity
     * @return Model
     */
    public function orderTickets(string $email, int $quantity): Model
    {
        $order = $this->orders()->create([
            'email' => $email,
        ]);

        foreach (range(1, $quantity) as $i) {
            $order->tickets()->create([]);
        }

        return $order;
    }

    /**
     * @return HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
