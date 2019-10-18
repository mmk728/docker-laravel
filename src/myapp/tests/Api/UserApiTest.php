<?php

namespace Tests\Api;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UserApiTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function ログイン中のユーザーを返却する()
    {
        $user = factory(User::class)->create([
            'email_verified_at' => null,
            'remember_token' => null
        ]);
        $response = $this->actingAs($user)->json('GET', route('user'));

        $response->assertJson([
            'name' => $user->name
        ]);
    }

    /** @test */
    public function ログインされていない場合は空文字を返却する()
    {
        $response = $this->json('GET', route('user'));

        $this->assertEquals("", $response->content());
    }
}
