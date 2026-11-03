<?php

declare(strict_types=1);

namespace Tavaan\Engine\Compat;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Compat\Contracts\CompatInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * CompatServiceProvider — ثبت سرویس‌های موتور Compat.
 */
final class CompatServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(CompatInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new Compat($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Compat\Console\DoctorCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            CompatInterface::class,
        ];
    }
}