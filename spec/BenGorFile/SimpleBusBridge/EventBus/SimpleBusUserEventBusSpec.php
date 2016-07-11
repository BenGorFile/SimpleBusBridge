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

namespace spec\BenGorFile\SimpleBusBridge\EventBus;

use BenGorFile\SimpleBusBridge\EventBus\SimpleBusUserEventBus;
use BenGorFile\File\Domain\Model\Event\UserEvent;
use BenGorFile\File\Infrastructure\Domain\Model\UserEventBus;
use PhpSpec\ObjectBehavior;
use SimpleBus\Message\Bus\MessageBus;

/**
 * Spec file of SimpleBusUserEventBus class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class SimpleBusUserEventBusSpec extends ObjectBehavior
{
    function let(MessageBus $messageBus)
    {
        $this->beConstructedWith($messageBus);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(SimpleBusUserEventBus::class);
    }

    function it_implements_user_event_bus()
    {
        $this->shouldImplement(UserEventBus::class);
    }

    function it_handles_a_command(MessageBus $messageBus, UserEvent $event)
    {
        $messageBus->handle($event)->shouldBeCalled();

        $this->handle($event);
    }
}
