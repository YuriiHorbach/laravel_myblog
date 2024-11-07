<?php

namespace Tests\Unit;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function test_post_can_be_created()
    {
        $post = Post::factory()->create([
            'title' => 'Sample Post',
            'content' => 'This is a sample content for the post.',
        ]);

        $this->assertDatabaseHas('posts', [
            'title' => 'Sample Post',
            'content' => 'This is a sample content for the post.',
        ]);
    }

    public function test_post_requires_title_and_content()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);
        Post::create(['content' => 'Missing title']);

        $this->expectException(\Illuminate\Database\QueryException::class);
        Post::create(['title' => 'Missing content']);
    }

    public function test_post_factory_creates_valid_post()
    {
        $post = Post::factory()->create();

        $this->assertNotEmpty($post->title);
        $this->assertNotEmpty($post->content);
    }
}
