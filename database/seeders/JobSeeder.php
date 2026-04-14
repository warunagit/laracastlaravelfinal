<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //generate 3 tags
        $tags = Tag::factory(3)->create();
        //attach those tags to job listings
        Job::factory(20)->hasAttached($tags)->create(new Sequence([
            "featured"=>false,
            "schedule"=>"Full Time"
        ],[
            "featured"=>true,
            "schedule"=>"Part Time"
        ]));
    }
}
