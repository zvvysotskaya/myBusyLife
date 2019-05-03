<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Grocery;

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

        $this->delete($grocery->path() . '/deletegrocery')
        ->assertRedirect('/userpages.shoppinglistgroceries');
    }

    /** @test */
    public function login_and_register_pages_can_be_accessed()
    {
        $this->get('login')->assertStatus(200);

        $this->get('register')->assertStatus(200);
    }

    /** @test */
    public function unauthorized_user_cannot_create_a_groceryList()
    {
        $grocery = factory(Grocery::class)->create();

        $this->post('/userpages.shoppinglistgroceries', $grocery->toArray())->assertRedirect('login');

        $this->get('/userpages.shoppinglistgroceries')->assertRedirect('login');

        $this->patch($grocery->path() . '/updategrocery', $grocery->toArray())->assertRedirect('login');

        $this->delete($grocery->path() . '/deletegrocery')->assertRedirect('login');
    }

}
