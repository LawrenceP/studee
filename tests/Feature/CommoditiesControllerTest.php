<?php

namespace Tests\Feature;

use App\Commodity;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommoditiesControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the CommoditiesController Index method
     */
    public function test_index()
    {
        $commodities = factory(Commodity::class, 2)->create();

        $response = $this->json('GET', route('commodity.index'));

        $response
            ->assertStatus(200)
            ->assertJson(['data' => $commodities->toArray()]);
    }

    public function test_store()
    {
        $commodity = factory(Commodity::class)->make();

        $this->assertDatabaseMissing('commodities', $commodity->toArray());

        $response = $this->json('POST', route('commodity.store', $commodity->toArray()));

        $this->assertDatabaseHas('commodities', $commodity->toArray());

        $response
            ->assertStatus(201)
            ->assertJson(['data' => $commodity->toArray()]);
    }

    public function test_show()
    {
        $commodity = factory(Commodity::class)->create();

        $response = $this->json('GET', route('commodity.show', $commodity->id));

        $response
            ->assertStatus(200)
            ->assertJson(['data' => $commodity->toArray()]);
    }

    public function test_update()
    {
        $commodityBeforeUpdate = factory(Commodity::class)->create();
        $commodityAfterUpdate = factory(Commodity::class)->make();

        $this->assertDatabaseMissing('commodities', ['segment_name' => $commodityAfterUpdate->segment_name]);
        $this->assertDatabaseHas('commodities', ['segment_name' => $commodityBeforeUpdate->segment_name]);

        $response = $this->json('PATCH', route('commodity.update', $commodityBeforeUpdate->id), $commodityAfterUpdate->toArray());

        $this->assertDatabaseMissing('commodities', ['segment_name' => $commodityBeforeUpdate->segment_name]);
        $this->assertDatabaseHas('commodities', ['segment_name' => $commodityAfterUpdate->segment_name]);

        $response
            ->assertStatus(200)
            ->assertJson(['data' => $commodityAfterUpdate->toArray()]);
    }

    public function test_destroy()
    {
        $commodity = factory(Commodity::class)->create();

        $this->assertDatabaseHas('commodities', $commodity->toArray());

        $response = $this->json('DELETE', route('commodity.destroy', $commodity->toArray()));

        $this->assertDatabaseMissing('commodities', $commodity->toArray());

        $response
            ->assertStatus(200)
            ->assertJson(['message' => 'Commodity with id (' . $commodity->id . ') has been successfully deleted',]);
    }
}
