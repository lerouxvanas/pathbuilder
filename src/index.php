<?php

declare(strict_types=1);
namespace MyApp;
require 'vendor/autoload.php';

use DateTimeImmutable;
use Lcobucci\JWT\Builder;
use Lcobucci\JWT\JwtFacade;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key\InMemory;

use function var_dump;

$key = InMemory::base64Encoded(
    'hiG8DlOKvtih6AxlZn5XKImZ06yu8I3mkOzaJrEuW8yAv8Jnkw330uMt8AEqQ5LB'
);

$token = (new JwtFacade())->issue(
    new Sha256(),
    $key,
    static fn (
        Builder $builder,
        DateTimeImmutable $issuedAt
    ): Builder => $builder
        ->issuedBy('https://api.my-awesome-app.io')
        ->permittedFor('https://client-app.io')
        ->expiresAt($issuedAt->modify('+10 minutes'))
);

echo "<pre>";
var_dump($token->claims()->all());
echo "</pre>";
echo "<hr />";
echo $token->toString();

$request = $_SERVER['REQUEST_URI'];
$viewDir = '/views/';

switch ($request) {
    case '':
    case '/':
        require __DIR__ . $viewDir . 'home.php';
        break;
    case '/home':
        require __DIR__ . $viewDir . 'home.php';
        break;

    case '/api':
        require __DIR__ . '/api.php';
        break;
    
    case '/contact':
        require __DIR__ . $viewDir . 'contact.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}
