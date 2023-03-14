<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Test;
use App\Models\TestItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $test1 = new Test(['title' => 'Test 1']);
        $test2 = new Test(['title' => 'Test 2']);

        $test11 = new TestItem(['title' => 'Test 1 - Item 1']);
        $test12 = new TestItem(['title' => 'Test 1 - Item 2']);
        $test21 = new TestItem(['title' => 'Test 2 - Item 1']);
        $test22 = new TestItem(['title' => 'Test 2 - Item 2']);

        $test1->save();
        $test2->save();
        $test21->save();
        $test22->save();
        $test11->save();
        $test12->save();

        $test1->test_items()->attach($test11->id);
        $test1->test_items()->attach($test12->id);
        $test2->test_items()->attach($test21->id);
        $test2->test_items()->attach($test22->id);
    }
}
