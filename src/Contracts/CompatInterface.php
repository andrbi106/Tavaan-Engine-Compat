<?php

declare(strict_types=1);

namespace Tavaan\Engine\Compat\Contracts;

/**
 * قرارداد Compat.
 *
 * @see \Tavaan\Engine\Compat\Compat
 * @api 1.0
 */
interface CompatInterface
{
    /**
     * متد has.
     *
     * @return mixed
     */
    public function has(/* ... */): mixed;

    /**
     * متد hasAny.
     *
     * @return mixed
     */
    public function hasAny(/* ... */): mixed;

    /**
     * متد require.
     *
     * @return mixed
     */
    public function require(/* ... */): mixed;

    /**
     * متد report.
     *
     * @return mixed
     */
    public function report(/* ... */): mixed;

    /**
     * متد driver.
     *
     * @return mixed
     */
    public function driver(/* ... */): mixed;

    /**
     * متد version.
     *
     * @return mixed
     */
    public function version(/* ... */): mixed;
}