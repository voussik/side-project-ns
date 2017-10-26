<?php
declare(strict_types=1);


namespace AppBundle\Services\CommandBus\Contracts;


interface CommandHandlerInterface
{
    public function handle(CommandInterface $command): void;

    public function getSupportedCommands(): array;
}