<?php

/*
 * This file is part of the BenGorFile package.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 * (c) Gorka Laucirica <gorka.lauzirika@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\BenGorFile\SimpleBusBridge\CommandBus;

use BenGorFile\SimpleBusBridge\CommandBus\SimpleBusUserCommandBus;
use BenGorFile\File\Application\Command\SignUp\SignUpUserCommand;
use BenGorFile\File\Infrastructure\CommandBus\UserCommandBus;
use PhpSpec\ObjectBehavior;
use SimpleBus\Message\Bus\MessageBus;

/**
 * Spec file of SimpleBusUserCommandBus class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class SimpleBusUserCommandBusSpec extends ObjectBehavior
{
    function let(MessageBus $messageBus)
    {
        $this->beConstructedWith($messageBus);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(SimpleBusUserCommandBus::class);
    }

    function it_implements_user_command_bus()
    {
        $this->shouldImplement(UserCommandBus::class);
    }

    function it_handles_a_command(MessageBus $messageBus, SignUpUserCommand $command)
    {
        $messageBus->handle($command)->shouldBeCalled();

        $this->handle($command);
    }
}
