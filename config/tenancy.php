<?php

return [
    'tenant_model' => \App\Models\Tenant::class,
    'identification-driver' => [
        'driver' => 'domain',
    ],
    'central_domains' => [
        'central.localhost',
    ],
];
