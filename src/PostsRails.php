<?php

class PostsRails
{
    public function fenceLength($posts, $rails)
    {
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
        // stop when run out posts or rails
        while ($posts > 0 && $rails > 0) {
            $length += 1.6;
            $posts -= 1;
            $rails -= 1;
        }
        $result .= "$length meters long.";
        return $result;
    }

    public function postsRailsNeeded($length)
    {
        $result = "To make a fence $length meters long you need ";
        $posts = 2;
        $rails = 1;
        $length -= 1.7;
        while ($length > 0) {
            $posts ++;
            $rails ++;
            $length -= 1.6;
        }

        $result .= "$posts posts and $rails rails.";
        return $result;
    }
}
