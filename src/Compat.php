<?php

declare(strict_types=1);

namespace Tavaan\Engine\Compat;


/**
 * Compat — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Compat\Contracts\CompatInterface
 */
final class Compat implements Contracts\CompatInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function has(/* ... */): mixed
    {
        // TODO: پیاده‌سازی has مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function hasAny(/* ... */): mixed
    {
        // TODO: پیاده‌سازی hasAny مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function require(/* ... */): mixed
    {
        // TODO: پیاده‌سازی require مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function report(/* ... */): mixed
    {
        // TODO: پیاده‌سازی report مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function driver(/* ... */): mixed
    {
        // TODO: پیاده‌سازی driver مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function version(/* ... */): mixed
    {
        // TODO: پیاده‌سازی version مطابق مستندات (سند §3 API).
        return null;
    }
}