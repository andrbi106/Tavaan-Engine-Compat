<?php

declare(strict_types=1);

namespace Tavaan\Engine\Compat\Contracts;

/**
 * قرارداد ZipWriterPure.
 *
 * @see \Tavaan\Engine\Compat\ZipWriterPure
 * @api 1.0
 */
interface ZipWriterPureInterface
{
    /**
     * متد addFromString.
     *
     * @return mixed
     */
    public function addFromString(/* ... */): mixed;

    /**
     * متد addFile.
     *
     * @return mixed
     */
    public function addFile(/* ... */): mixed;

    /**
     * متد addDirectory.
     *
     * @return mixed
     */
    public function addDirectory(/* ... */): mixed;

    /**
     * متد output.
     *
     * @return mixed
     */
    public function output(/* ... */): mixed;

    /**
     * متد saveTo.
     *
     * @return mixed
     */
    public function saveTo(/* ... */): mixed;
}