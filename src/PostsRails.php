<?php

/**
 * Class PostsRails
 */
class PostsRails
{

    /**
     * @param $posts
     * @param $rails
     * @return string
     */
    public function fenceLength($posts, $rails)
    {
        $posts = floor($posts);
        $rails = floor($rails);
        if ($posts < 2) {
            return 'Error: The minimum number of posts is 2';
        }
        if ($rails < 1) {
            return 'Error: The minimum number of rails is 1';
        }
        $result = "With $posts posts and $rails rails you can make a fence ";
        // minimum fence length
        $length = 1.7;
        $posts -= 2;
        $rails -= 1;
        $length += min($posts, $rails) * 1.6;
        $result .= "$length meters long.";
        return $result;
    }

    /**
     * @param $length
     * @return string
     */
    public function postsRailsNeeded($length)
    {
        $length = round($length, 2);
        $result = "To make a fence $length meters long you need ";
        $posts = 2;
        $rails = 1;
        $length -= 1.7;
        $posts += ceil($length / 1.6);
        $rails += ceil($length / 1.6);

        $result .= "$posts posts and $rails rails.";
        return $result;
    }
}
