<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'gambar' => 'vege.jpg',
            'judul' => 'Vegetarian Pure',
            'body' => 'Fried chicken breast with tartar sauce, mix salad And french fries',
            'harga' => 'Rp. 15.000'
        ]);

        Menu::create([
            'gambar' => 'vege-2.jpg',
            'judul' => 'Vegetarian Vegetabels',
            'body' => 'Fried chicken breast with tartar sauce, mix salad And french fries',
            'harga' => 'Rp. 15.000'
        ]);

        Menu::create([
            'gambar' => 'vege-3.jpg',
            'judul' => 'Vegetarian Saos',
            'body' => 'Fried chicken breast with tartar sauce, mix salad And french fries',
            'harga' => 'Rp. 15.000'
        ]);

        Menu::create([
            'gambar' => 'sald.jpg',
            'judul' => 'Sald Chicken',
            'body' => 'Fried chicken breast with tartar sauce, mix salad And french fries',
            'harga' => 'Rp. 15.000'
        ]);

        Menu::create([
            'gambar' => 'sald-2.jpg',
            'judul' => 'Sald Chicken',
            'body' => 'Fried chicken breast with tartar sauce, mix salad And french fries',
            'harga' => 'Rp. 15.000'
        ]);

        Menu::create([
            'gambar' => 'sald-3.jpg',
            'judul' => 'Sald Chicken',
            'body' => 'Fried chicken breast with tartar sauce, mix salad And french fries',
            'harga' => 'Rp. 15.000'
        ]);

        Menu::create([
            'gambar' => 'soup.jpg',
            'judul' => 'Soup Hot',
            'body' => 'Fried chicken breast with tartar sauce, mix salad And french fries',
            'harga' => 'Rp. 15.000'
        ]);

        Menu::create([
            'gambar' => 'soup-2.jpg',
            'judul' => 'Soup Chicken',
            'body' => 'Fried chicken breast with tartar sauce, mix salad And french fries',
            'harga' => 'Rp. 15.000'
        ]);

        Menu::create([
            'gambar' => 'soup-3.jpg',
            'judul' => 'Soup Corn',
            'body' => 'Fried chicken breast with tartar sauce, mix salad And french fries',
            'harga' => 'Rp. 15.000'
        ]);

        Menu::create([
            'gambar' => 'juice.jpg',
            'judul' => 'Manggo Juice',
            'body' => 'Fried chicken breast with tartar sauce, mix salad And french fries',
            'harga' => 'Rp. 15.000'
        ]);

        Menu::create([
            'gambar' => 'juice-2.jpg',
            'judul' => 'Watermelon Juice',
            'body' => 'Fried chicken breast with tartar sauce, mix salad And french fries',
            'harga' => 'Rp. 15.000'
        ]);

        Menu::create([
            'gambar' => 'juice-3.jpg',
            'judul' => 'Orange Juice',
            'body' => 'Fried chicken breast with tartar sauce, mix salad And french fries',
            'harga' => 'Rp. 15.000'
        ]);

        Menu::create([
            'gambar' => 'dessert.jpg',
            'judul' => 'Ice Cream',
            'body' => 'Fried chicken breast with tartar sauce, mix salad And french fries',
            'harga' => 'Rp. 15.000'
        ]);

        Menu::create([
            'gambar' => 'dessert-2.jpg',
            'judul' => 'Ice Cream Fruit',
            'body' => 'Fried chicken breast with tartar sauce, mix salad And french fries',
            'harga' => 'Rp. 15.000'
        ]);

        Menu::create([
            'gambar' => 'dessert-3.jpg',
            'judul' => 'Ice Cream Banana',
            'body' => 'Fried chicken breast with tartar sauce, mix salad And french fries',
            'harga' => 'Rp. 15.000'
        ]);
    }
}
