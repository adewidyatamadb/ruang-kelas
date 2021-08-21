<?php

namespace Tests\Feature;

use App\Models\Administrator;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdministratorTest extends TestCase
{
    use RefreshDatabase;

    // testing the index page of administrator page
    public function test_administrator_index_page()
    {
        $response = $this->get(route('administrator.index'));

        $response->assertStatus(200);

        $response->assertSeeText('Administrator');
    }

    // testing the create administrator page
    public function test_create_administrator_page()
    {
        $response = $this->get(route('administrator.create'));

        $response->assertStatus(200);

        $response->assertSee('store');
    }

    // testing the edit administrator page
    public function test_edit_administrator_page()
    {
        $administrator = Administrator::factory()->create();

        // dd($adminsitrator);

        $response = $this->get(route('administrator.edit', ['id' => $administrator->id]));

        $response->assertSee(route('administrator.update', ['id' => $administrator->id]));
        $response->assertSee('PUT');
        $response->assertSee($administrator->name);
        $response->assertViewHas('administrator', $administrator);
    }
}
