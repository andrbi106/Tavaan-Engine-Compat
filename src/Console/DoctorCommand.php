<?php

declare(strict_types=1);

namespace Tavaan\Engine\Compat\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * doctor command.
 */
final class DoctorCommand implements CommandInterface
{
    public function name(): string
    {
        return 'doctor';
    }

    public function description(): string
    {
        return 'Run doctor (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
