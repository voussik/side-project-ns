<?php
declare(strict_types=1);


namespace AppBundle\Services\CommandBus\Commands;


use AppBundle\Services\CommandBus\Contracts\CommandInterface;

/**
 * Class CreateString
 * @package AppBundle\Services\CommandBus\Commands
 */
class CreateString implements CommandInterface
{
    /**
     * @return string
     */
    public static function getName(): string
    {
        return __CLASS__;
    }

}