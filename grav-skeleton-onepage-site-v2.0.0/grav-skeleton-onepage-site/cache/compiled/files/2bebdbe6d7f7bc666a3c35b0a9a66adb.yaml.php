<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/logan/workspace/GitHub/Personal_Website/My Personal Website/grav-skeleton-onepage-site-v2.0.0/grav-skeleton-onepage-site/user/config/site.yaml',
    'modified' => 1576905860,
    'data' => [
        'title' => 'Software Engineer',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Logan Francisco',
            'email' => 'lwfrancisco@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Logan Francisco is a Software Engineering Technology Major at the Oregon Institute of Technology.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
