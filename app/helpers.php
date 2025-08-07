<?php

if (!function_exists('getBlogPosts')) {
    function getBlogPosts()
    {
        $filePath = storage_path('app/blog_posts.json');

        if (!file_exists($filePath)) {
            return [];
        }

        $jsonContent = file_get_contents($filePath);
        return json_decode($jsonContent, true);
    }
}

if (!function_exists('getBlogPostById')) {
    function getBlogPostById($id)
    {
        $posts = getBlogPosts();

        foreach ($posts as $post) {
            if ($post['id'] == $id) {
                return $post;
            }
        }

        return null;
    }
}
