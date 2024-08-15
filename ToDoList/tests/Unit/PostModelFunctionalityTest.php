<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Post;

class PostModelFunctionalityTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_attributes_are_set_correctly()
   {
       // create a new post instance with attributes
       $post = new Post([
           'title' => 'Sample Post Title',
           'content' => 'Sample Post Description',

       ]);

       // check if you set the attributes correctly
       $this->assertEquals('Sample Post Title', $post->title);
       $this->assertEquals('Sample Post Description', $post->content);

   }

   public function test_non_fillable_attributes_are_not_set()
   {
       // Attempt to create a post with additional attributes (non-fillable)
       $post = new Post([
           'title' => 'Sample Post Title',
           'content' => 'Sample Post Description',
           'author' => 'John Doe',
       ]);

       // check that the non-fillable attribute is not set on the post instance
       $this->assertArrayNotHasKey('author', $post->getAttributes());
   }
}
