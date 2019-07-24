<?php


namespace App\Services;


class MyService implements ServiceInterface
{

    /**
     * @var string
     */
    private $someParam;

    public function __construct($someParam)
    {
        $this->someParam = $someParam;
    }

    /**
     * @return string
     */
    public function get(): string
    {
        return $this->someParam;
    }


}