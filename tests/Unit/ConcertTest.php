<?php

namespace Tests\Unit;

use App\Models\Concert;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ConcertTest extends TestCase
{
    use DatabaseMigrations;

    public function test_can_get_formatted_date()
    {
        // Create concert with no date
        $concert = Concert::factory()->make([
            'date' => Carbon::parse('December 1, 2016 8:00pm'),
        ]);

        // Retrieve formatted date
        $date = $concert->formatted_date;

        // Verify the date is formatted as expected
        $this->assertEquals("December 1, 2016", $date);
    }

    public function test_can_get_formatted_start_time()
    {

        $concert = Concert::factory()->make([
            'date' => Carbon::parse('December 1, 2016 8:00pm'),
        ]);

        $this->assertEquals("8:00pm", $concert->start_time);

    }

    public function test_can_get_ticket_price_in_dollars()
    {

        $concert = Concert::factory()->make([
            'ticket_price' => 40000,
        ]);

        $this->assertEquals("400.00", $concert->ticket_price_in_dollars);
    }

    public function test_concerts_with_a_published_at_date_are_published()
    {
        $publishedConcertA = Concert::factory()->published()->create();
        $publishedConcertB = Concert::factory()->published()->create();
        $unpublishedConcert = Concert::factory()->unpublished()->create();

        $publishedConcerts = Concert::published()->get();

        $this->assertTrue($publishedConcerts->contains($publishedConcertA));
        $this->assertTrue($publishedConcerts->contains($publishedConcertB));
        $this->assertFalse($publishedConcerts->contains($unpublishedConcert));
    }

}
