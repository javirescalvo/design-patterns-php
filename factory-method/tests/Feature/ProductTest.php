<?php

namespace Styde\Tests\Feature;


use Faker\Factory;
use Styde\Factories\ProductFactory;
use Styde\Models\Product;
use Styde\Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * @test
     */
    function a_user_can_see_the_products_details()
    {
        $product = $this->createProduct([
            'title' => 'Curso de patrones de diseño'
        ]);

        $product->save();

        $this->assertSame('Curso de patrones de diseño', $product->title);
    }

    /**
     * @test
     */
    function a_user_can_see_the_products_is_in_stock()
    {
        $product = $this->createProduct(['stock' => true]);

        $this->assertTrue($product->stock);
    }

    /**
     * @test
     */
    function a_user_can_see_the_paginates_list_of_products()
    {
        $factory = new ProductFactory();
        $product1 = $factory->createModel([
            'title' => 'Producto Uno'
        ]);

        $products = $factory->createModels(18);
        $product20 = $factory->createModel([
            'title' => 'Producto Veinte'
        ]);
        $product21 = $factory->createModel([
            'title' => 'Producto Veintiuno'
        ]);

        $this->assertCount(18, $products);
        $this->assertSame('Producto Uno', $product1->title);
        $this->assertSame('Producto Veinte', $product20->title);
        $this->assertSame('Producto Veintiuno', $product21->title);
    }
}
