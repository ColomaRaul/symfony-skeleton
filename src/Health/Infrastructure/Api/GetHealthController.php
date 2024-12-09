<?php declare(strict_types=1);

namespace App\Health\Infrastructure\Api;

use App\Shared\Infrastructure\Api\ApiController;
use Symfony\Component\HttpFoundation\JsonResponse;

final class GetHealthController extends ApiController
{
    public function __invoke(): JsonResponse
    {
        return new JsonResponse([
            'status' => 'UP',
        ]);
    }
}
