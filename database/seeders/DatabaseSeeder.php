<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Brand;
use App\Models\Lesson;
use App\Models\Module;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Recipe;
use App\Models\RecipeType;
use App\Models\Test;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public $products_types = ['Паштет', 'Пельмени', 'Снэки'];
    public $products = [
        [
            'name' => 'Паштет из оленины',
            'product_type_id' => 1
        ],
        [
            'name' => 'Пельмени из оленины',
            'product_type_id' => 2
        ],
        [
            'name' => 'Снэки из оленины',
            'product_type_id' => 3
        ]
    ];

    public $recipe_types = ['Оленина', 'Рыба', 'Говядина'];
    public $recipes = [
        [
            'name' => '(1) Щёкур в клюквенном соусе с картофелем от Шеф Повара Северяне',
            'recipe_type_id' => 1
        ],
        [
            'name' => '(2) Щёкур в клюквенном соусе с картофелем от Шеф Повара Северяне',
            'recipe_type_id' => 2
        ],
        [
            'name' => '(3) Щёкур в клюквенном соусе с картофелем от Шеф Повара Северяне',
            'recipe_type_id' => 3
        ]
    ];

    public function makeProductTypes()
    {
        foreach ($this->products_types as $var) {
            ProductType::create([
                'name' => $var
            ]);
        }
    }

    public function makeProducts()
    {

        $image = url('/') . "/fixed/test/pashtet.png";
        foreach ($this->products as $var) {
            for ($ci = 1; $ci <= 10; $ci++) { // Создаем несколько продуктов внутри каждого типа
                $product = Product::create([
                    'name' => "$ci. {$var['name']}",
                    'product_type_id' => $var['product_type_id'],
                    'packaging' => "$ci. packaging",
                    'weight' => "$ci. 240г.",
                    'gost' => "$ci. gost",
                    'compound' => "$ci. compound",
                    'description' => "$ci. description",
                    'worth' => "$ci. worth",
                    'date_manufactured' => "$ci. date_manufactured",
                    'expiration' => "$ci. expiration"
                ]);
                $product->addMediaFromUrl($image)->preservingOriginal()->toMediaCollection('image');
            }
        }
    }

    public function makeRecipeTypes()
    {
        foreach ($this->recipe_types as $var) {
            RecipeType::create([
                'name' => $var
            ]);
        }
    }

    public function makeRecipes()
    {

        $image = url('/') . "/fixed/test/food.png";
        foreach ($this->recipes as $var) {
            for ($ci = 1; $ci <= 10; $ci++) { // Создаем несколько продуктов внутри каждого типа
                $recipe = Recipe::create([
                    'name' => "$ci. {$var['name']}",
                    'recipe_type_id' => $var['recipe_type_id'],
                    'creator' => "$ci. creator",
                    'ingredients' => "$ci. ingredients",
                    'cooking_method' => "$ci. cooking_method"
                ]);
                $recipe->addMediaFromUrl($image)->preservingOriginal()->toMediaCollection('image');
            }
        }
    }

    public function run(): void
    {

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@mail.ru',
            'email_verified_at' => now(),
            'password' => Hash::make(ENV('ADMIN_PASSWORD')),
            'remember_token' => Str::random(10),
        ]);
        $user->assignRole('admin');

        $this->makeProductTypes();
        $this->makeProducts();

        $this->makeRecipes();
        $this->makeRecipeTypes();

    }
}
