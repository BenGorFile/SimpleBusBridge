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

use BenGorFile\File\Domain\Model\FileEvent;
use BenGorFile\File\Infrastructure\Domain\Model\FileEventBus;
use BenGorFile\SimpleBusBridge\EventBus\SimpleBusFileEventBus;
use PhpSpec\ObjectBehavior;
use SimpleBus\Message\Bus\MessageBus;

/**
 * Spec file of SimpleBusFileEventBus class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class SimpleBusFileEventBusSpec extends ObjectBehavior
{
    function let(MessageBus $messageBus)
    {
        $this->beConstructedWith($messageBus);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(SimpleBusFileEventBus::class);
    }

    function it_implements_user_event_bus()
    {
        $this->shouldImplement(FileEventBus::class);
    }

    function it_handles_a_command(MessageBus $messageBus, FileEvent $event)
    {
        $messageBus->handle($event)->shouldBeCalled();

        $this->handle($event);
    }
}
