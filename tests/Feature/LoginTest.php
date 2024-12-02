<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Companies;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
   
    public function test_user_login()
    {
        $user = User::factory()->create();

        $this->post('login',[
            'email'=>$user->email,
            'password'=>$user->password
        ]);
        
        $this->actingAs($user);
        $this->assertAuthenticated();


       
       
    }


}
