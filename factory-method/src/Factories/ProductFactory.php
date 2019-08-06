<?php


namespace Styde\Factories;


use Styde\Models\BaseModel;
use Styde\Models\Product;

class ProductFactory extends Factory
{
    public function makeModel(): BaseModel
    {
        return new Product();
    }


    public function createModels($amount): array
    {
        return array_map(function(){
            return $this->createModel();
        },range(1, $amount));
    }
}