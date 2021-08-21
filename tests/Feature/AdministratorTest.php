<?php

namespace Tests\Feature;

use App\Models\Administrator;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Validation\ValidationException;
use Tests\TestCase;

class AdministratorTest extends TestCase
{
    use RefreshDatabase;

    // testing the index page of administrator page
    public function test_administrator_index_page()
    {
        $response = $this->get(route('administrator.index'));

        $response->assertStatus(200);

        $response->assertViewHas('administrators');
    }

    // testing the create administrator page
    public function test_create_administrator_page()
    {
        $response = $this->get(route('administrator.create'));

        $response->assertStatus(200);

        $response->assertSee(route('administrator.store'));
        $response->assertSee('POST');
    }

    // testing the edit administrator page
    public function test_edit_administrator_page()
    {
        $administrator = Administrator::factory()->create();

        // dd($adminsitrator);

        $response = $this->get(route('administrator.edit', ['id' => $administrator->id]));

        $response->assertStatus(200);

        $response->assertViewHas('administrator');
        $response->assertSee(route('administrator.update', ['id' => $administrator->id]));
        $response->assertSee('PUT');
        $response->assertSee($administrator->name);
    }


    // test adding data
    public function test_add_administrator_and_validation()
    {
        $cases = [
            [
                'name' => 'intended',
                'params' => [
                    'name' => 'fake name',
                    'email' => 'fake@email.com',
                    'jabatan' => 'fake',
                ],
                'expectedStatus' => 302,
                'expectedErrorMsg' => ''
            ],
            [
                'name' => 'empty name field',
                'params' => [
                    'name' => '',
                    'email' => 'fake@email.com',
                    'jabatan' => 'fake',
                ],
                'expectedStatus' => 302,
                'expectedErrorMsg' => 'field name should not be empty'
            ],
            [
                'name' => 'empty email field',
                'params' => [
                    'name' => 'fake name',
                    'email' => '',
                    'jabatan' => 'fake',
                ],
                'expectedStatus' => 302,
                'expectedErrorMsg' => 'field email should not be empty'
            ],
            [
                'name' => 'invalid email field',
                'params' => [
                    'name' => 'fake name',
                    'email' => 'fake',
                    'jabatan' => 'fake',
                ],
                'expectedStatus' => 302,
                'expectedErrorMsg' => 'invalid email format'
            ],
            [
                'name' => 'empty jabatan field',
                'params' => [
                    'name' => 'fake name',
                    'email' => 'fake@email.com',
                    'jabatan' => '',
                ],
                'expectedStatus' => 302,
                'expectedErrorMsg' => 'field jabatan should not be empty'
            ],
        ];

        foreach ($cases as $case) {
            // dd($case['params']['name']);
            $this->withoutExceptionHandling();
            try {
                $response = $this->post(route('administrator.store', [
                    'name' => $case['params']['name'],
                    'email' => $case['params']['email'],
                    'jabatan' => $case['params']['jabatan']
                ]));

                $this->assertCount(1, Administrator::all());

                $response->assertStatus(302);
                $response->assertLocation(route('administrator.index'));
            } catch (ValidationException $e) {
                if ($e->validator->errors()->has('name')) {
                    $this->assertEquals($case['expectedErrorMsg'], $e->validator->errors()->first('name'));
                }

                if ($e->validator->errors()->has('email')) {
                    $this->assertEquals($case['expectedErrorMsg'], $e->validator->errors()->first('email'));
                }

                if ($e->validator->errors()->has('jabatan')) {
                    $this->assertEquals($case['expectedErrorMsg'], $e->validator->errors()->first('jabatan'));
                }
            }
        }
    }

    // test to update administrator data
    public function test_update_administrator()
    {
        $this->withoutExceptionHandling();
        $administrator = Administrator::factory()->create();

        $this->assertCount(1, Administrator::all());

        $response = $this->put(route('administrator.update', [
            'id' => $administrator->id,
            'name' => 'New Name',
            'email' => 'new@email.com',
            'jabatan' => 'New Jabatan'
        ]));


        $this->assertEquals('New Name', Administrator::first()->name);
        $this->assertEquals('new@email.com', Administrator::first()->email);
        $this->assertEquals('New Jabatan', Administrator::first()->jabatan);

        $response->assertStatus(302);
        $response->assertLocation(route('administrator.index'));
    }

    // test to delete data from database
    public function test_delete_administrator()
    {
        $this->withoutExceptionHandling();
        $administrator = Administrator::factory()->create();

        $this->assertCount(1, Administrator::all());

        $response = $this->delete(route('administrator.delete', ['id' => $administrator->id]));

        $this->assertCount(0, Administrator::all());

        $response->assertStatus(302);
        $response->assertLocation(route('administrator.index'));
    }
}
