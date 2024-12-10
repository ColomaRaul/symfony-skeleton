<?php declare(strict_types=1);

namespace App\Health\Application\TestHandler;

use App\Shared\Application\Command\CommandHandlerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final class TestHandlerCommandHandler implements CommandHandlerInterface
{
    public function __invoke(TestHandlerCommand $command): void
    {
        return;
    }
}
