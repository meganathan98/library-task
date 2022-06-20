<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::insert([
            [
               "book_id" => Str::random(6), 
               "name" => "Sparring Partners by John Grisham", 
               "user_name" => null, 
            ], 
            [
                "book_id" => Str::random(6), 
                "name" => "Meant to Be by Emily Giffin.", 
                "user_name" => null, 
             ], 
             [
                "book_id" => Str::random(6), 
                "name" => "Nightwork by Nora Roberts", 
                "user_name" => null, 
             ], 
             [
                "book_id" => Str::random(6), 
                "name" => "22 Seconds by James Patterson; Maxine Paetro.", 
                "user_name" => null, 
             ], 
             [
                "book_id" => Str::random(6), 
                "name" => "The Summer Place by Jennifer Weiner", 
                "user_name" => null, 
             ], 
             [
                "book_id" => Str::random(6), 
                "name" => "The Midnight Library by Matt Haig", 
                "user_name" => null, 
             ], 
             [
                "book_id" => Str::random(6), 
                "name" => "Run, Rose, Run by James Patterson; Dolly Parton", 
                "user_name" => null, 
             ], 

        ]);
    }
}
