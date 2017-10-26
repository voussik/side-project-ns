<?php

namespace AppBundle\Controller;

use AppBundle\Services\CommandBus\CommandBus;
use AppBundle\Services\CommandBus\Commands\CreateBool;
use AppBundle\Services\CommandBus\Commands\CreateInt;
use AppBundle\Services\CommandBus\Contracts\CommandHandlers\GenerateStringCommandHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $commandBus = new CommandBus();
        $generateStringCommandHandler = new GenerateStringCommandHandler();
        $generateStringCommandHandler->addSupportedCommand(CreateBool::getName());
        $generateStringCommandHandler->addSupportedCommand(CreateInt::getName());

        $commandBus->registerHandler($generateStringCommandHandler);

        $commandBus->handle(new CreateInt());

        return new Response('OK');
    }
}
