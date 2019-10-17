<?php

namespace Tests\Api;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class LogoutApiTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function 認証済みのユーザーをログアウトさせる()
    {
        $user = factory(User::class)->create([
            'email_verified_at' => null,
            'remember_token' => null
        ]);

        $response = $this->actingAs($user)->json('POST', route('logout'));

        $this->assertGuest();
    }
}
