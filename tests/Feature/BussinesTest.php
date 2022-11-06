<?php

namespace Tests\Feature;

use App\Models\Busine;
use App\Models\Review;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BussinesTest extends TestCase
{
    /** @test */
    public function a_busine_can_have_reviews()
    {
        $busine = Busine::factory()->create();
        $review = Review::factory()->create(['busines_id' => $busine->id]);
        $this->assertEquals(1, $busine->reviews->count());
    }

    /** @test */
    public function can_create_busine()
    {
        Busine::create([
            'name' => 'test',
            'description' => 'test',
            'phone' => 'test',
            'rating' => 5,
            'image_url' => 'test',
        ]);
        $this->assertDatabaseHas('busines', [
            'name' => 'test',
            'description' => 'test',
            'phone' => 'test',
            'rating' => 5,
            'image_url' => 'test',
        ]);
    }

    /** @test */
    public function can_update_busine()
    {
        $busine = Busine::factory()->create();
        $busine->update([
            'name' => 'test',
            'description' => 'test',
            'phone' => 'test',
            'rating' => 5,
            'image_url' => 'test',
        ]);
        $this->assertDatabaseHas('busines', [
            'name' => 'test',
            'description' => 'test',
            'phone' => 'test',
            'rating' => 5,
            'image_url' => 'test',
        ]);
    }

    /** @test */
    public function can_delete_busine()
    {
        $busine = Busine::factory()->create();
        $busine->delete();
        $this->assertDatabaseMissing('busines', [
            'name' => $busine->name,
            'description' => $busine->description,
            'phone' => $busine->phone,
            'rating' => $busine->rating,
            'image_url' => $busine->image_url,
        ]);
    }
}
