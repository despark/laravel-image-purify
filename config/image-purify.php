<?php

return [
    'chains' => [
        Despark\ImagePurify\Chains\JpegChain::class => [
            'commands' => [
                'mozJpeg' => [
                    'bin' => 'cjpeg',
                    'arguments' => ['-optimize', '-progressive'],
                    'customClass' => Despark\ImagePurify\Commands\MozJpeg::class,
                ],
            ],
            'first_only' => false,
        ],
        Despark\ImagePurify\Chains\PngChain::class => [
            'commands' => [
                'pngQuant' => [
                    'bin' => 'pngquant',
                    'arguments' => ['-f', '--skip-if-larger', '--strip'],
                    'customClass' => Despark\ImagePurify\Commands\PngQuant::class,
                ],
                'optiPng' => [
                    'bin' => 'optipng',
                    'arguments' => ['-i0', '-o2', '-quiet'],

                ],
            ],
            'first_only' => false,
        ],
        Despark\ImagePurify\Chains\GifChain::class => [
            'commands' => [
                'giflossy' => [
                    'bin' => 'gifsicle',
                    'arguments' => ['-b', '-O3', '--lossy=100', '--no-extensions'],
                ],
            ],
        ],
    ],
    'suppress_errors' => false,
];