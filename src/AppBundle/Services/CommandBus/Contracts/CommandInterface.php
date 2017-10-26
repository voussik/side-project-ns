<?php
declare(strict_types=1);


namespace AppBundle\Services\CommandBus\Contracts;


interface CommandInterface
{
    /**
     * @return string
     */
    public static function getName(): string;
}