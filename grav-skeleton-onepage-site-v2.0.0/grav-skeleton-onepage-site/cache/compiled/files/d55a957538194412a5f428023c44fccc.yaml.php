<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/logan/workspace/GitHub/Personal_Website/My_Personal_Website/grav-skeleton-onepage-site-v2.0.0/grav-skeleton-onepage-site/user/themes/quark/blueprints/modular/hero.yaml',
    'modified' => 1575502496,
    'data' => [
        'title' => 'Hero',
        '@extends' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'buttons' => [
                            'type' => 'tab',
                            'title' => 'Hero',
                            'fields' => [
                                'header.hero_classes' => [
                                    'type' => 'text',
                                    'label' => 'Hero Classes',
                                    'markdown' => true,
                                    'description' => 'There are several Hero class options that can be listed here (space separated):<br />`text-light`, `text-dark`, `title-h1h2`, `parallax`, `overlay-dark-gradient`, `overlay-light-gradient`, `overlay-dark`, `overlay-light`, `hero-fullscreen`, `hero-large`, `hero-medium`, `hero-small`, `hero-tiny`<br />Please consult the [Quark documentation](https://github.com/getgrav/grav-theme-quark#hero-options) for more details.'
                                ],
                                'header.hero_image' => [
                                    'type' => 'filepicker',
                                    'label' => 'Hero Image',
                                    'preview_images' => true,
                                    'description' => 'If not specified, this defaults to the first image found in the page\'s folder'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
