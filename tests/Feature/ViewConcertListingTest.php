<?php
declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Concert;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ViewConcertListingTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    public function test_user_can_view_a_published_concert_listing()
    {
        // Arrange
        // Create concert
        $concert = Concert::factory()->published()->create([
            'title' => 'The Red Chord',
            'subtitle' => 'the Animosity and Lethargy',
            'date' => Carbon::parse('December 13, 2016 8:00pm'),
            'ticket_price' => 3250,
            'venue' => 'The Mosh Pit',
            'address' => '123 Example Lane',
            'city' => 'Laraville',
            'state' => 'ON',
            'zip' => '12345',
            'additional_information' => 'For tickets, call (555) 555-5555.',
        ]);

        // Act
        // View the concert listing
        $response = $this->get('/concerts/' . $concert->id);

        // Assert
        // See the concert details
        $response->assertStatus(200);
        $response->assertSee('The Red Chord');
        $response->assertSee('the Animosity and Lethargy');
        $response->assertSee('December 13, 2016');
        $response->assertSee('Doors at 8:00pm');
        $response->assertSee('32.50');
        $response->assertSee('The Mosh Pit');
        $response->assertSee('123 Example Lane');
        $response->assertSee('Laraville, ON 12345');
        $response->assertSee('For tickets, call (555) 555-5555.');
    }

    public function test_user_cannot_view_unpublished_concert_list()
    {
        $concert = Concert::factory()->unpublished()->create();

        $response = $this->get('/concerts/' . $concert->id);

        $response->assertStatus(404);
    }

}
