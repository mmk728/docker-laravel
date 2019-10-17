<?php

namespace Tests\Api;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class RegisterApiTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function 新しいユーザーを作成し情報を返すことができる()
    {
        $data = [
            'name' => 'テスト太郎',
            'email' => 'dummy@email.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ];

        $response = $this->json('POST', route('register'), $data);

        $response->assertStatus(201)->assertJson(['name' => 'テスト太郎']);
    }
}
