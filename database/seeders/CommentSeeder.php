<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Annoucement;
use App\Models\Comment;
use App\Models\User;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::factory()
            ->count(2)
            ->for(Annoucement::all()->random())
            ->for(User::all()->random())
            ->create();
    }
}
