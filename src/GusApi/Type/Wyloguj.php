<?php

namespace GusApi\Type;

/**
 * Class Wyloguj
 * @package GusApi\Type
 */
class Wyloguj
{
    /**
     * @var string $pIdentyfikatorSesji
     */
    protected $pIdentyfikatorSesji;

    /**
     * @param string $pIdentyfikatorSesji
     */
    public function __construct(string $pIdentyfikatorSesji)
    {
        $this->pIdentyfikatorSesji = $pIdentyfikatorSesji;
    }

    /**
     * @return string
     */
    public function getPIdentyfikatorSesji(): string
    {
        return $this->pIdentyfikatorSesji;
    }

    /**
     * @param string $pIdentyfikatorSesji
     * @return Wyloguj
     */
    public function setPIdentyfikatorSesji(string $pIdentyfikatorSesji)
    {
        $this->pIdentyfikatorSesji = $pIdentyfikatorSesji;
        return $this;
    }
}