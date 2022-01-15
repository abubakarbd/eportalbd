<?php

use Illuminate\Database\Seeder;
use App\Models\SubCategory;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ["Cigars & Cigarettes", "Lighters", "Mobile Accessories", "Phone Cases", "Laptops", "Desktops Computers", "Computer Accessories", "Gadgets", "Keyboards", "Basic", "Gaming", "Keyboard Accessories", "Hand Tools", "cigarettes", "Motorcyle", "Riding Gear", "Jackets & Vests", "Moto Parts & Spares", "Body & Frame", "Grips", "Travel", "Travel Bags", "Waist Packs", "Mens Bags", "Backpacks", "Fashion backpacks", "Eyewear", "Eyeglasses", "Unisex", "Fashion glasses", "Face Masks", "Outdoor Recreation", "Cycling", "Bike Accessories", "Other", "Mudguards", "Air Pumps", "Helmets & Pads", "Body Armour & Pads", "Jerseys", "Mount Holders", "Helmets Accessories", "Moto Parts & Spares", "Bulbs, LEDs & HIDs", "Automotive", "Interior Accessories", "Key Chains", "Moto Electronics", "Accessories", "Decals & Emblems", "Accessories", "Skin Care", "Face Mask & Packs", "Footwear", "Lights & Reflectors", "Exterior Accessories", "Horns & Accessories", "Indicator Assemblies", "Locks", "Watches", "Men", "Business", "Men's Care", "Shaving & Grooming", "Kitchen Utensils", "erum & Essence", "Makeup", "Makeup Accessories", "Shavers", "Beauty Tools", "Bath & Body", "Hair Removal", "Hair Care", "Hair Treatments", "Cookware", "Pots & Pans", "Women", "Business", "Fashion", "Smartwatches", "Men", "Audio", "In-Ear Headphones", "Women", "Kid", "Women", "Fashion Jewellery", "Necklaces", "Portable Speakers", "Lighting", "Ceiling Lights", "Screen Protectors", "Cables & Converters", "Power Banks", "Dust Coat", "Farniture", "Exercise & Fitness", "Wearable Technology", "Camping & Hiking", "Survival Kits", "Engine Oil", "Security & Lock", "Jewellery", "Formal Wear", "T-Shirt", "Medical Equipment"];

        foreach ($categories as $category) {
            SubCategory::create([
                'category_id' => rand(1, 10),
                'name'        => $category,
                'slug'        => slugify($category),
                'status'      => 'active'
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
