<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
use App\Models\Post;

class PostTest extends TestCase
{
    public function test_name()
    {
        $post = new Post;
        $post->name = 'proyecto tdd';

        $this->assertEquals('proyecto tdd' , $post->name);
    }

    public function test_slug()
    {
        $post = new Post;
        $post->name = 'proyecto tdd';

        $this->assertEquals('proyecto-tdd' , $post->slug);
    }
}
