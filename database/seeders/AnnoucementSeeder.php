<?php

namespace Database\Seeders;

use App\Models\Annoucement;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Seeder;

class AnnoucementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Annoucement::factory()
            ->count(10)
            ->has(Comment::factory()->count(2))
            ->for(User::all()->random())
            ->create();
    }
}
