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
    public function an_authorized_user_can_manage_hisown_grocerylist()
    {
    //  $this->withoutExceptionHandling();
      $this->actingAs(factory('App\User')->create());
      $grocery = factory('App\Grocery')->create();
      $attributes = factory('App\Grocery')->raw();
      $this->get('/userpages.shoppinglistgroceries', $attributes)
      ->assertStatus(200);//view groceies list
      $this->post('/userpages.shoppinglistgroceries', $attributes)
      ->assertRedirect('/userpages.shoppinglistgroceries');//create grocery
      $this->get($grocery->path() . '/updategrocery', $attributes)
      ->assertStatus(200); //view grocery
      $this->patch($grocery->path() . '/updategrocery', $attributes)
      ->assertRedirect($grocery->path() . '/updategrocery');//update grocery
    }
}
