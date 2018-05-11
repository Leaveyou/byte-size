<?php declare(strict_types=1);

namespace Leaveyou;

class Bytes
{
    /** @var int  */
    protected $bytes;

    /**
     * Bytes constructor.
     * @param int $bytes
     */
    public function __construct(int $bytes)
    {
        $this->bytes = $bytes;
    }
}
