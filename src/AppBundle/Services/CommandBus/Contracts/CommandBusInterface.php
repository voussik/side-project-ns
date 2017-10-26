<?php
declare(strict_types=1);


namespace AppBundle\Services\CommandBus\Contracts;


/**
 * Interface CommandBusInterface
 * @package AppBundle\Services\CommandBus\Contracts
 */
interface CommandBusInterface
{

    /**
     * @param CommandHandlerInterface $commandHandler
     */
    public function registerHandler(CommandHandlerInterface $commandHandler): void;

    /**
     * @param CommandInterface $command
     */
    public function handle(CommandInterface $command): void;
}