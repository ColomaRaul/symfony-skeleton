<?php declare(strict_types=1);

namespace App\Health\Application\GetHealth;

use App\Shared\Application\Query\QueryResponseInterface;

final readonly class GetHealthQueryResponse implements QueryResponseInterface
{
    public function __construct(private string $status)
    {
    }

    public function status(): string
    {
        return $this->status;
    }
}
