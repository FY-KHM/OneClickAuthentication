<?php

use App\User;

return [
    'model' => User::class,
    'table' => 'oauth_identities',
    'providers' => [
        'facebook' => [
            'client_id' => '1017668918346341',
            'client_secret' => 'c8858e1af490ad0fd1360b2928803d18',
            'redirect_uri' => 'http://localhost:8000/facebook/callback',
            'scope' => [],
        ],
        'google' => [
            'client_id' => '389098523958-htqc49jvklejcgdtr8eubo7suu8m0ubd.apps.googleusercontent.com',
            'client_secret' => 'iceKS0RPDI8cV24irM4ktHcN',
            'redirect_uri' => 'http://localhost:8000/google/callback',
            'scope' => [],
        ],
        'github' => [
            'client_id' => 'dd591a4d59cc0eba6e2b',
            'client_secret' => 'ad21a20d2130bc2642fb264c0a0c789e53de69e3',
            'redirect_uri' => 'http://localhost:8000/github/callback',
            'scope' => [],
        ],
        'linkedin' => [
            'client_id' => '810qhrfpub3unx',
            'client_secret' => '0Pi217HcI0xvkpkg',
            'redirect_uri' => 'http://localhost:8000/link/callback',
            'scope' => [],
        ],
        'instagram' => [
            'client_id' => 'f2c25a3cb365423684bad17fb2759931',
            'client_secret' => '358c590fb6b846c6b1733f764c771c75',
            'redirect_uri' => 'http://localhost:8000/insta/callback',
            'scope' => [],
        ],
        'soundcloud' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/soundcloud/redirect',
            'scope' => [],
        ],
    ],
];
