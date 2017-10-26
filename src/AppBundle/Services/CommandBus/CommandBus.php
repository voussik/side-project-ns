<?php
declare(strict_types=1);


namespace AppBundle\Services\CommandBus;


use AppBundle\Services\CommandBus\Contracts\CommandBusInterface;
use AppBundle\Services\CommandBus\Contracts\CommandHandlerInterface;
use AppBundle\Services\CommandBus\Contracts\CommandInterface;

/**
 * Class CommandBus
 * @package AppBundle\Services\CommandBus
 */
class CommandBus implements CommandBusInterface
{

    /**
     * @var CommandHandlerInterface[]
     */
    private $handlers = [];

    /**
     * @inheritdoc
     */
    public function registerHandler(CommandHandlerInterface $commandHandler): void
    {
        $this->handlers[] = $commandHandler;
    }

    /**
     * @inheritdoc
     */
    public function handle(CommandInterface $command): void
    {
        array_map(function (CommandHandlerInterface $handler) use ($command) {
            if (in_array($command::getName(), $handler->getSupportedCommands())) {
                $handler->handle($command);
            }
        }, $this->handlers);
    }


}