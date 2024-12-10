<?php declare(strict_types=1);

namespace App\Health\Infrastructure\Api;

use App\Health\Application\TestHandler\TestHandlerCommand;
use App\Shared\Infrastructure\Api\ApiController;
use Symfony\Component\HttpFoundation\JsonResponse;

final class TestHandlerController extends ApiController
{
    public function __invoke(): JsonResponse
    {
        $this->dispatch(new TestHandlerCommand());

        return new JsonResponse([
            'message' => 'Tested correctly',
        ]);
    }
}
