<?php

namespace Tests\Api;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class LoginApiTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function 登録済みのユーザーを認証ができる()
    {
        // ちゃんと追ってないけど下記2つに値が入っているとログインができない
        $user = factory(User::class)->create([
            'email_verified_at' => null,
            'remember_token' => null
        ]);

        $response = $this->json('POST', route('login'), [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $this->assertAuthenticatedAs($user);
    }
}
