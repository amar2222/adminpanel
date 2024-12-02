<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Companies;


class CompanyTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_create_company()
    {
        $user = User::factory()->create();

        $this->post('login',[
            'email'=>$user->email,
            'password'=>$user->password
        ]);
        
        $this->actingAs($user);
        // $this->assertAuthenticated();


        $this->post('storecompany',[
 
            'name' => 'test company',
            'email'=> 'test1@test.com',
            'website' => 'test.com'
            
       ]);
    
       $this->assertEquals(1, Companies:: count());
    }
}
