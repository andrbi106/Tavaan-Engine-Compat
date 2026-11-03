<?php

declare(strict_types=1);

namespace Tavaan\Engine\Compat\Contracts;

/**
 * قرارداد MagicBytesDetector.
 *
 * @see \Tavaan\Engine\Compat\MagicBytesDetector
 * @api 1.0
 */
interface MagicBytesDetectorInterface
{
    /**
     * متد detect.
     *
     * @return mixed
     */
    public function detect(/* ... */): mixed;

    /**
     * متد detectFromFile.
     *
     * @return mixed
     */
    public function detectFromFile(/* ... */): mixed;

    /**
     * متد detectFromStream.
     *
     * @return mixed
     */
    public function detectFromStream(/* ... */): mixed;
}