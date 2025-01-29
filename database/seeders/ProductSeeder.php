<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = Category::all();
        $products = [
            ['name' => 'Smartphone', 'description' => 'Latest model with high-end features.', 'price' => 799.99, 'quantity' => 150, 'category_id' => $categories->where('name', 'Electronics')->first()->id],
            ['name' => 'Laptop', 'description' => 'Powerful laptop for work and gaming.', 'price' => 1299.99, 'quantity' => 100, 'category_id' => $categories->where('name', 'Electronics')->first()->id],
            ['name' => 'Headphones', 'description' => 'Wireless noise-cancelling headphones.', 'price' => 199.99, 'quantity' => 200, 'category_id' => $categories->where('name', 'Electronics')->first()->id],
            ['name' => 'LED TV', 'description' => 'Ultra HD 55-inch LED TV.', 'price' => 499.99, 'quantity' => 80, 'category_id' => $categories->where('name', 'Electronics')->first()->id],
            ['name' => 'Smartwatch', 'description' => 'Track your fitness and notifications.', 'price' => 199.99, 'quantity' => 120, 'category_id' => $categories->where('name', 'Electronics')->first()->id],
            ['name' => 'Jeans', 'description' => 'Comfortable denim jeans for all occasions.', 'price' => 49.99, 'quantity' => 250, 'category_id' => $categories->where('name', 'Fashion')->first()->id],
            ['name' => 'T-shirt', 'description' => 'Stylish t-shirt with modern design.', 'price' => 19.99, 'quantity' => 300, 'category_id' => $categories->where('name', 'Fashion')->first()->id],
            ['name' => 'Jacket', 'description' => 'Warm winter jacket for cold weather.', 'price' => 89.99, 'quantity' => 180, 'category_id' => $categories->where('name', 'Fashion')->first()->id],
            ['name' => 'Sneakers', 'description' => 'Comfortable running shoes.', 'price' => 69.99, 'quantity' => 220, 'category_id' => $categories->where('name', 'Fashion')->first()->id],
            ['name' => 'Watch', 'description' => 'Elegant wristwatch with leather strap.', 'price' => 120.00, 'quantity' => 100, 'category_id' => $categories->where('name', 'Fashion')->first()->id],
            ['name' => 'Blender', 'description' => 'High-power blender for smoothies and soups.', 'price' => 79.99, 'quantity' => 150, 'category_id' => $categories->where('name', 'Home & Kitchen')->first()->id],
            ['name' => 'Microwave', 'description' => 'Quick and efficient microwave oven.', 'price' => 129.99, 'quantity' => 80, 'category_id' => $categories->where('name', 'Home & Kitchen')->first()->id],
            ['name' => 'Coffee Maker', 'description' => 'Brew your favorite coffee in minutes.', 'price' => 49.99, 'quantity' => 200, 'category_id' => $categories->where('name', 'Home & Kitchen')->first()->id],
            ['name' => 'Vacuum Cleaner', 'description' => 'High-performance vacuum cleaner.', 'price' => 159.99, 'quantity' => 100, 'category_id' => $categories->where('name', 'Home & Kitchen')->first()->id],
            ['name' => 'Toaster', 'description' => '2-slice toaster with adjustable settings.', 'price' => 29.99, 'quantity' => 250, 'category_id' => $categories->where('name', 'Home & Kitchen')->first()->id],
            ['name' => 'Football', 'description' => 'High-quality football for practice or game.', 'price' => 24.99, 'quantity' => 300, 'category_id' => $categories->where('name', 'Sports')->first()->id],
            ['name' => 'Tennis Racket', 'description' => 'Lightweight racket for tennis players.', 'price' => 79.99, 'quantity' => 150, 'category_id' => $categories->where('name', 'Sports')->first()->id],
            ['name' => 'Yoga Mat', 'description' => 'Non-slip yoga mat for all levels.', 'price' => 19.99, 'quantity' => 220, 'category_id' => $categories->where('name', 'Sports')->first()->id],
            ['name' => 'Dumbbells', 'description' => 'Set of 2 adjustable dumbbells for strength training.', 'price' => 39.99, 'quantity' => 180, 'category_id' => $categories->where('name', 'Sports')->first()->id],
            ['name' => 'Bicycle', 'description' => 'Durable bicycle for outdoor activities.', 'price' => 299.99, 'quantity' => 50, 'category_id' => $categories->where('name', 'Sports')->first()->id],
            ['name' => 'Book: "The Great Gatsby"', 'description' => 'Classic novel by F. Scott Fitzgerald.', 'price' => 12.99, 'quantity' => 500, 'category_id' => $categories->where('name', 'Books')->first()->id],
            ['name' => 'Book: "To Kill a Mockingbird"', 'description' => 'Pulitzer Prize-winning novel by Harper Lee.', 'price' => 14.99, 'quantity' => 450, 'category_id' => $categories->where('name', 'Books')->first()->id],
            ['name' => 'Book: "1984"', 'description' => 'Dystopian novel by George Orwell.', 'price' => 9.99, 'quantity' => 300, 'category_id' => $categories->where('name', 'Books')->first()->id],
            ['name' => 'Book: "The Catcher in the Rye"', 'description' => 'Famous coming-of-age novel by J.D. Salinger.', 'price' => 11.99, 'quantity' => 200, 'category_id' => $categories->where('name', 'Books')->first()->id],
            ['name' => 'Lego Set', 'description' => 'Building blocks set for creative play.', 'price' => 49.99, 'quantity' => 350, 'category_id' => $categories->where('name', 'Toys')->first()->id],
            ['name' => 'Doll Set', 'description' => 'Fashion doll set with accessories.', 'price' => 29.99, 'quantity' => 400, 'category_id' => $categories->where('name', 'Toys')->first()->id],
            ['name' => 'Action Figures', 'description' => 'Collectible action figures from popular franchises.', 'price' => 19.99, 'quantity' => 250, 'category_id' => $categories->where('name', 'Toys')->first()->id],
            ['name' => 'Toy Car', 'description' => 'Die-cast toy car for kids.', 'price' => 14.99, 'quantity' => 300, 'category_id' => $categories->where('name', 'Toys')->first()->id],
            ['name' => 'Skincare Set', 'description' => 'Complete skincare set for all skin types.', 'price' => 39.99, 'quantity' => 150, 'category_id' => $categories->where('name', 'Beauty & Personal Care')->first()->id],
            ['name' => 'Shampoo', 'description' => 'Shampoo for healthy, shiny hair.', 'price' => 12.99, 'quantity' => 250, 'category_id' => $categories->where('name', 'Beauty & Personal Care')->first()->id],
            ['name' => 'Perfume', 'description' => 'Luxury perfume for women.', 'price' => 89.99, 'quantity' => 100, 'category_id' => $categories->where('name', 'Beauty & Personal Care')->first()->id],
            ['name' => 'Hair Dryer', 'description' => 'Powerful hair dryer for smooth styling.', 'price' => 49.99, 'quantity' => 180, 'category_id' => $categories->where('name', 'Beauty & Personal Care')->first()->id],
            ['name' => 'Dog Leash', 'description' => 'Durable leash for walks with your dog.', 'price' => 15.99, 'quantity' => 300, 'category_id' => $categories->where('name', 'Pet Supplies')->first()->id],
            ['name' => 'Cat Bed', 'description' => 'Comfortable bed for your cat.', 'price' => 25.99, 'quantity' => 200, 'category_id' => $categories->where('name', 'Pet Supplies')->first()->id],
            ['name' => 'Pet Carrier', 'description' => 'Travel carrier for small pets.', 'price' => 39.99, 'quantity' => 100, 'category_id' => $categories->where('name', 'Pet Supplies')->first()->id],
            ['name' => 'Bird Cage', 'description' => 'Spacious cage for pet birds.', 'price' => 59.99, 'quantity' => 70, 'category_id' => $categories->where('name', 'Pet Supplies')->first()->id],
            ['name' => 'Camping Tent', 'description' => 'Portable tent for outdoor camping.', 'price' => 129.99, 'quantity' => 150, 'category_id' => $categories->where('name', 'Outdoor & Sports')->first()->id],
            ['name' => 'Fishing Rod', 'description' => 'High-quality fishing rod for anglers.', 'price' => 59.99, 'quantity' => 200, 'category_id' => $categories->where('name', 'Outdoor & Sports')->first()->id],
            ['name' => 'Hiking Backpack', 'description' => 'Spacious and durable backpack for hiking.', 'price' => 89.99, 'quantity' => 100, 'category_id' => $categories->where('name', 'Outdoor & Sports')->first()->id],
            ['name' => 'Sleeping Bag', 'description' => 'Warm sleeping bag for outdoor trips.', 'price' => 49.99, 'quantity' => 150, 'category_id' => $categories->where('name', 'Outdoor & Sports')->first()->id],
            ['name' => 'Baby Stroller', 'description' => 'Comfortable stroller for your baby.', 'price' => 149.99, 'quantity' => 100, 'category_id' => $categories->where('name', 'Baby Products')->first()->id],
            ['name' => 'Baby Monitor', 'description' => 'Audio and video monitor for baby safety.', 'price' => 99.99, 'quantity' => 150, 'category_id' => $categories->where('name', 'Baby Products')->first()->id],
        ];


        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
