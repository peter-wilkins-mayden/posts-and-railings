<?php


class PostsRailsTest extends PHPUnit_Framework_TestCase
{

    // ... todo sucess , fail and error tests for each test case, docblocks, number_format() the result


    function test_it_calculates_the_length_of_a_fence_when_provided_the_amount_of_posts_and_the_amount_of_railings()
    {
        $a = new PostsRails();
        $this->assertEquals('With 5 posts and 1 rails you can make a fence 1.7 meters long.', $a->fenceLength(5, 1));
        $this->assertEquals('With 2 posts and 1 rails you can make a fence 1.7 meters long.', $a->fenceLength(2, 1));
        $this->assertEquals('With 3 posts and 2 rails you can make a fence 3.3 meters long.', $a->fenceLength(3, 2));
        $this->assertEquals('With 2 posts and 100 rails you can make a fence 1.7 meters long.', $a->fenceLength(2, 100));
    }

    function  test_it_calculates_the_amount_of_posts_and_railings_needed_when_provided_the_length_of_fence()
    {
        $a = new PostsRails();
        $this->assertEquals('To make a fence 1.7 meters long you need 2 posts and 1 rails.', $a->postsRailsNeeded(1.7));
        $this->assertEquals('To make a fence 2 meters long you need 3 posts and 2 rails.', $a->postsRailsNeeded(2));
        $this->assertEquals('To make a fence 3.3 meters long you need 3 posts and 2 rails.', $a->postsRailsNeeded(3.3));
    }

    function test_fences_must_contain_at_least_2_posts_and_1_railing()
    {
        $a = new PostsRails();
        $this->assertEquals('Error: The minimum number of posts is 2', $a->fenceLength(1, 1));
        $this->assertEquals('Error: The minimum number of rails is 1', $a->fenceLength(2, 0));
    }

    function test_posts_and_rails_span_the_length_required()
    {
        $a = new PostsRails();
        $this->assertEquals('To make a fence 6.5 meters long you need 5 posts and 4 rails.', $a->postsRailsNeeded(6.5));
    }
}