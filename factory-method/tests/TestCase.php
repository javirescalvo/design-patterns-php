<?php

namespace Styde\Tests;

use Styde\Factories\ProductFactory;
use Styde\Factories\UserFactory;
use Styde\Models\Product;
use Styde\Models\User;

class TestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @param  array $attributes
     * @return User
     */
    public function createUser(array $attributes): User
    {
        $factory = new UserFactory;

        return $factory->createModel($attributes);
    }

    public function createProduct(array $attributes): Product
    {
        $factory = new ProductFactory();
        return $factory->createModel($attributes);
    }
}
