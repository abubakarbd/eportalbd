<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ["Groceries", "Mobiles & Tablets", "Computers & Laptops", "Bags & Travel", "Watches & Accessories", "Sports & Outdoors", "Men's Fashion", "Women's Fashion", "Home & Lifestyle", "Health & Beauty"];

        foreach ($categories as $category) {
            Category::create([
                'name'   => $category,
                'slug'   => slugify($category),
                'status' => 'active'
            ]);
        }
    }

    /**
     * @return mixed
     */
    public function getRandomStatus()
    {
        # Generate random status
        $statuses = array('active', 'inactive');
        return $statuses[array_rand($statuses)];
    }
}
