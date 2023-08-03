<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SetDateToAllPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'corregir-fecha';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Se corrige la fecha de todos los posts';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $posts = \App\Models\Post::all();
        foreach ($posts as $post) {
            $post->date = $post->created_at;
            $post->save();
        }
    }
}
