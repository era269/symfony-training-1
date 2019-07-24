<?php


namespace App\Services;


class SecondService implements ServiceInterface
{
    public function get(): string
    {
        return 'different_value';
    }

}