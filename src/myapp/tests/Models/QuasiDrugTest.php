<?php

namespace Tests\Models;

use App\Models\QuasiDrug;
use Tests\TestCase;

class QuasiDrugTest extends TestCase
{
    /** @test */
    public function 軽減税率の対象でない()
    {
        $this->assertFalse((new QuasiDrug())->isReducedTaxRate());
    }
}
