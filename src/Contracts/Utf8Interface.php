<?php

declare(strict_types=1);

namespace Tavaan\Engine\Compat\Contracts;

/**
 * قرارداد Utf8.
 *
 * @see \Tavaan\Engine\Compat\Utf8
 * @api 1.0
 */
interface Utf8Interface
{
    /**
     * متد length.
     *
     * @return mixed
     */
    public function length(/* ... */): mixed;

    /**
     * متد substr.
     *
     * @return mixed
     */
    public function substr(/* ... */): mixed;

    /**
     * متد split.
     *
     * @return mixed
     */
    public function split(/* ... */): mixed;

    /**
     * متد lower.
     *
     * @return mixed
     */
    public function lower(/* ... */): mixed;

    /**
     * متد upper.
     *
     * @return mixed
     */
    public function upper(/* ... */): mixed;

    /**
     * متد isValid.
     *
     * @return mixed
     */
    public function isValid(/* ... */): mixed;

    /**
     * متد normalize.
     *
     * @return mixed
     */
    public function normalize(/* ... */): mixed;

    /**
     * متد pad.
     *
     * @return mixed
     */
    public function pad(/* ... */): mixed;

    /**
     * متد ucfirst.
     *
     * @return mixed
     */
    public function ucfirst(/* ... */): mixed;
}