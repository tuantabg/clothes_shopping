<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'CodeLean',
                'email' => 'CodeLean@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'name' => 'Shane Lynch',
                'email' => 'ShaneLynch@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-0.png',
                'level' => 1,
                'description' => 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo'
            ],
            [
                'name' => 'Brandon Kelley',
                'email' => 'BrandonKelley@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-1.png',
                'level' => 1,
                'description' => null,
            ],
            [
                'name' => 'Roy Banks',
                'email' => 'RoyBanks@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.png',
                'level' => 1,
                'description' => null,
            ],
        ]);

        DB::table('blogs')->insert([
            [
                'user_id' => 3,
                'title' => 'The Personality Trait That Makes People Happier',
                'image' => 'blog-1.jpg',
                'category' => 'TRAVEL',
                'subtitle' => '',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'This was one of our first days in Hawaii last week.',
                'image' => 'blog-2.jpg',
                'category' => 'CodeLeanON',
                'subtitle' => '',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Last week I had my first work trip of the year to Sonoma Valley',
                'image' => 'blog-3.jpg',
                'category' => 'TRAVEL',
                'subtitle' => '',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Happppppy New Year! I know I am a little late on this post',
                'image' => 'blog-4.jpg',
                'category' => 'CodeLeanON',
                'subtitle' => '',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Absolue collection. The Lancome team has been one…',
                'image' => 'blog-5.jpg',
                'category' => 'MODEL',
                'subtitle' => '',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Writing has always been kind of therapeutic for me',
                'image' => 'blog-6.jpg',
                'category' => 'CodeLeanON',
                'subtitle' => '',
                'content' => '',
            ],
        ]);

        DB::table('brands')->insert([
            [
                'name' => 'Calvin Klein',
            ],
            [
                'name' => 'Diesel',
            ],
            [
                'name' => 'Polo',
            ],
            [
                'name' => 'Tommy Hilfiger',
            ],
        ]);

        DB::table('product_categories')->insert([
            [
                'name' => 'Men',
            ],
            [
                'name' => 'Women',
            ],
            [
                'name' => 'Kids',
            ],
        ]);

        DB::table('products')->insert([
            [
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'Pure Pineapple',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
                'content' => '',
                'price' => 629.99,
                'qty' => 20,
                'discount' => 495,
                'weight' => 1.3,
                'sku' => '00012',
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'brand_id' => 2,
                'product_category_id' => 2,
                'name' => 'Guangzhou sweater',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 13,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'brand_id' => 3,
                'product_category_id' => 2,
                'name' => 'Guangzhou sweater',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'brand_id' => 4,
                'product_category_id' => 1,
                'name' => 'Microfiber Wool Scarf',
                'description' => null,
                'content' => null,
                'price' => 64,
                'qty' => 20,
                'discount' => 35,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Accessories',
            ],
            [
                'brand_id' => 1,
                'product_category_id' => 3,
                'name' => "Men's Painted Hat",
                'description' => null,
                'content' => null,
                'price' => 44,
                'qty' => 20,
                'discount' => 35,
                'weight' => null,
                'sku' => null,
                'featured' => false,
                'tag' => 'Accessories',
            ],
            [
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'Converse Shoes',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Pure Pineapple',
                'description' => null,
                'content' => null,
                'price' => 64,
                'qty' => 20,
                'discount' => 35,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'HandBag',
            ],
            [
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => '2 Layer Windbreaker',
                'description' => null,
                'content' => null,
                'price' => 44,
                'qty' => 20,
                'discount' => 35,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Converse Shoes',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Shoes',
            ],
        ]);

        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => 'product-1-1.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-2.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2-1.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2-2.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3-1.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3-2.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-1.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-2.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5-1.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5-2.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-1.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-2.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7-1.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7-2.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-1.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-2.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9-1.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9-2.jpg',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10-1.jpg',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10-2.jpg',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11-1.jpg',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11-2.jpg',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12-1.jpg',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12-2.jpg',
            ],
            [
                'product_id' => 13,
                'path' => 'product-13-1.jpg',
            ],
            [
                'product_id' => 13,
                'path' => 'product-13-2.jpg',
            ],
            [
                'product_id' => 14,
                'path' => 'product-14-1.jpg',
            ],
            [
                'product_id' => 14,
                'path' => 'product-14-2.jpg',
            ],
            [
                'product_id' => 15,
                'path' => 'product-15-1.jpg',
            ],
            [
                'product_id' => 15,
                'path' => 'product-15-2.jpg',
            ],
            [
                'product_id' => 16,
                'path' => 'product-16-1.jpg',
            ],
            [
                'product_id' => 16,
                'path' => 'product-16-2.jpg',
            ],
            [
                'product_id' => 16,
                'path' => 'product-16-3.jpg',
            ],
            [
                'product_id' => 16,
                'path' => 'product-16-4.jpg',
            ],
            [
                'product_id' => 16,
                'path' => 'product-16-5.jpg',
            ],
            [
                'product_id' => 16,
                'path' => 'product-16-6.jpg',
            ],
            [
                'product_id' => 16,
                'path' => 'product-16-7.jpg',
            ],
        ]);

        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'XS',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'yellow',
                'size' => 'S',
                'qty' => 0,
            ],
            [
                'product_id' => 1,
                'color' => 'violet',
                'size' => 'S',
                'qty' => 0,
            ],
        ]);

        DB::table('product_comments')->insert([
            [
                'product_id' => 1,
                'user_id' => 4,
                'email' => 'BrandonKelley@gmail.com',
                'name' => 'Brandon Kelley',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 1,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
        ]);
    }
}
