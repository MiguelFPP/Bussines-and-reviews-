<?php

namespace Tests\Feature;

use App\Models\Busine;
use App\Models\Review;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReviewTest extends TestCase
{
   /** @test */
   public function a_busine_can_have_reviews()
   {
       $busine = Busine::factory()->create();
       $review = Review::factory()->create(['busines_id' => $busine->id]);
       $this->assertEquals(1, $busine->reviews->count());
   }

    /** @test */
    public function a_busine_can_have_multiple_reviews()
    {
        $busine = Busine::factory()->create();
        $review = Review::factory()->create(['busines_id' => $busine->id]);
        $review = Review::factory()->create(['busines_id' => $busine->id]);
        $this->assertEquals(2, $busine->reviews->count());
    }

    /** @test */
    public function a_busine_can_have_reviews_with_different_ratings()
    {
        $busine = Busine::factory()->create();
        $review = Review::factory()->create(['busines_id' => $busine->id, 'rating' => 1]);
        $review = Review::factory()->create(['busines_id' => $busine->id, 'rating' => 5]);
        $this->assertEquals(2, $busine->reviews->count());
    }

    /** @test */
    public function a_busine_can_have_reviews_with_different_ratings_and_comments()
    {
        $busine = Busine::factory()->create();
        $review = Review::factory()->create(['busines_id' => $busine->id, 'rating' => 1, 'description' => 'This is a comment']);
        $review = Review::factory()->create(['busines_id' => $busine->id, 'rating' => 5, 'description' => 'This is another comment']);
        $this->assertEquals(2, $busine->reviews->count());
    }
}
