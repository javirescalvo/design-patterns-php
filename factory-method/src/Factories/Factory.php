<?php


namespace Styde\Factories;


use Styde\Models\BaseModel;
use Faker\Factory as FakerFactory;
use Faker\Generator as Faker;

abstract class Factory
{
    public $faker;

    public function __construct()
    {
        $this->faker = FakerFactory::create(); // FakerGenerator
    }

    public function createModel(array $attributes = [])
    {
        $model = $this->makeModel()
            ->unguard()
            ->fill($this->mergeAttributes($attributes))
            ->reguard()
            ->save();
        return $model;
    }

    abstract protected function makeModel(): BaseModel;

    protected function getAttributes(Faker $faker): array
    {
        return [];
    }

    /**
     * @param array $attributes
     * @return array
     */
    public function mergeAttributes(array $attributes): array
    {
        return array_merge($this->getAttributes($this->faker), $attributes);
    }
}