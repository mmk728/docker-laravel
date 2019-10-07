<?php

namespace Tests\Models;

use App\Models\Liquor;
use Tests\TestCase;

class LiquorTest extends TestCase
{
    /** @test */
    public function 軽減税率の対象でない()
    {
        $this->assertFalse((new Liquor())->isReducedTaxRate());
    }
}
