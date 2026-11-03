<?php

declare(strict_types=1);

namespace Tavaan\Engine\Compat;


/**
 * MagicBytesDetector — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Compat\Contracts\MagicBytesDetectorInterface
 */
final class MagicBytesDetector implements Contracts\MagicBytesDetectorInterface
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
    public function detect(/* ... */): mixed
    {
        // TODO: پیاده‌سازی detect مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function detectFromFile(/* ... */): mixed
    {
        // TODO: پیاده‌سازی detectFromFile مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function detectFromStream(/* ... */): mixed
    {
        // TODO: پیاده‌سازی detectFromStream مطابق مستندات (سند §3 API).
        return null;
    }
}