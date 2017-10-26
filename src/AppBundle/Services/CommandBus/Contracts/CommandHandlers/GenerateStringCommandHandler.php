<?php
declare(strict_types=1);


namespace AppBundle\Services\CommandBus\Contracts\CommandHandlers;


use AppBundle\Services\CommandBus\Commands\CreateBool;
use AppBundle\Services\CommandBus\Commands\CreateInt;
use AppBundle\Services\CommandBus\Contracts\CommandHandlerInterface;
use AppBundle\Services\CommandBus\Contracts\CommandInterface;

class GenerateStringCommandHandler implements CommandHandlerInterface
{

    private const SUPPORTED_COMMANDS = [ CreateBool::class, CreateInt::class ];


    public function handle(CommandInterface $command): void
    {
        // TODO: Implement handle() method.
    }

    public function getSupportedCommands(): array
    {
        // TODO: add * for listen for all commands
        return self::SUPPORTED_COMMANDS;
    }


}