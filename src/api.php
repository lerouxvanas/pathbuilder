<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use GraphQL\Server\StandardServer;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Schema;

$queryType = new ObjectType([
    'name' => 'Query',
    'fields' => [
        'echo' => [
            'type' => Type::string(),
            'resolve' => fn ($rootValue, array $args): string => 'Hello world!',
        ],
    ],
]);

$schema = new Schema(
    [
        'query' => $queryType,
    ]
);

$server = new StandardServer([
    'schema' => $schema,
]);

$server->handleRequest();
