<?php

if (!function_exists('getBlogPosts')) {
    function getBlogPosts()
    {
        $filePath = storage_path('app/blog-posts.json');

        if (!file_exists($filePath)) {
            return [];
        }

        $jsonContent = file_get_contents($filePath);
        return json_decode($jsonContent, true);
    }
}

if (!function_exists('getLogBases')) {
    function getLogBases()
    {
        $filePath = storage_path('app/log-bases.json');

        if (!file_exists($filePath)) {
            return [];
        }

        $jsonContent = file_get_contents($filePath);
        return json_decode($jsonContent, true);
    }
}

if (!function_exists('getLogBaseBySlug')) {
    function getLogBaseBySlug($slug)
    {
        $bases = getLogBases();

        foreach ($bases as $base) {
            if ($base['slug'] == $slug) {
                return $base;
            }
        }

        return null;
    }
}

if (!function_exists('getBlogPostBySlug')) {
    function getBlogPostBySlug($slug)
    {
        $posts = getBlogPosts();

        foreach ($posts as $post) {
            if ($post['slug'] == $slug) {
                return $post;
            }
        }

        return null;
    }
}

if (!function_exists('getBlogPostsByCategory')) {
    function getBlogPostsByCategory($category)
    {
        $posts = getBlogPosts();
        $filtered = [];

        foreach ($posts as $post) {
            if (isset($post['category']) && strtolower($post['category']) === strtolower($category)) {
                $filtered[] = $post;
            }
        }

        return $filtered;
    }
}
