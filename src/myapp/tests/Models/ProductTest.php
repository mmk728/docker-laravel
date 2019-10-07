<?php

namespace Tests\Models;

use App\Models\Beverage;
use App\Models\Drug;
use App\Models\Food;
use App\Models\Liquor;
use App\Models\Product;
use App\Models\QuasiDrug;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use DatabaseTransactions;
    
    /** @test */
    public function foodを取得できる()
    {
        $food = new Food(['name' => 'おにぎり', 'no_taxed_price' => 136]);
        $food->save();
        $product = $food->products()->create();

        $this->assertEquals(136, $product->product->no_taxed_price);
    }

    /** @test */
    public function beverageを取得できる()
    {
        $beverage = new Beverage(['name' => 'オレンジジュース', 'no_taxed_price' => 129]);
        $beverage->save();
        $product = $beverage->products()->create();

        $this->assertEquals(129, $product->product->no_taxed_price);
    }

    /** @test */
    public function liquprを取得できる()
    {
        $liquor = new Liquor(['name' => '生絞りグレープフルーツサワー', 'no_taxed_price' => 280]);
        $liquor->save();
        $product = $liquor->products()->create();

        $this->assertEquals(280, $product->product->no_taxed_price);
    }

    /** @test */
    public function drugが取得できる()
    {
        $drug = new Drug(['name' => '薬', 'no_taxed_price' => 810]);
        $drug->save();
        $product = $drug->products()->create();

        $this->assertEquals(810, $product->product->no_taxed_price);
    }

    /** @test */
    public function quasi_drugが取得できる()
    {
        $quasi_drug = new QuasiDrug(['name' => '医薬部外品', 'no_taxed_price' => 130]);
        $quasi_drug->save();
        $product = $quasi_drug->products()->create();

        $this->assertEquals(130, $product->product->no_taxed_price);
    }
}
