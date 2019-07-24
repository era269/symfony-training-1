<?php


namespace App\Services;


class ThirdService implements ServiceInterface
{
    public function get(): string
    {
        return 'third_value';
    }

}