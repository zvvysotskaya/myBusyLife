<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GroceriesTest extends TestCase
{
  use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
     /** @test */
    public function a_authorized_user_can_see_a_hisown_grocerylist()
    {
      $this->withoutExceptionHandling();
      $this->actingAs(factory('App\User')->create());
      $attributes=factory('App\Grocery')->raw();
      $this->get('/userpages.shoppinglistgroceries', $attributes)
      ->assertStatus(200);

    }
}
