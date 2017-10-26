<?php
declare(strict_types=1);


namespace AppBundle\Services\CommandBus\Commands;


use AppBundle\Services\CommandBus\Contracts\CommandInterface;

/**
 * Class CreateInt
 * @package AppBundle\Services\CommandBus\Commands
 */
class CreateInt implements CommandInterface
{
    /**
     * CreateInt constructor.
     */
    public function __construct(string $value)
    {
    }

    /**
     * @return string
     */
    public static function getName(): string
    {
        return __CLASS__;
    }



}