<?php

use Illuminate\Database\Seeder;
use App\Note;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Note::class, 5)->create();
    }
}
