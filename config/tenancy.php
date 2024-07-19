<?php

return [
    'tenant_model' => \App\Models\Tenant::class,
    'database' => [
        'based_on' => null,
        'template_tenant_connection' => null,
        'prefix' => 'tenant_',
        'suffix' => '',
        'managers' => [
            Stancl\Tenancy\TenantDatabaseManagers\SQLiteDatabaseManager::class,
            Stancl\Tenancy\TenantDatabaseManagers\MySQLDatabaseManager::class,
            Stancl\Tenancy\TenantDatabaseManagers\PostgreSQLDatabaseManager::class,
        ],
    ],
    'identification-driver' => [
        'driver' => 'domain',
    ],
    'central_domains' => [
        'central.localhost',
    ],
];
