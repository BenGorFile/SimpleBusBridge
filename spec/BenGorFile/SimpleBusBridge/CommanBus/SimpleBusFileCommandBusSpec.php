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

use BenGorFile\File\Application\Command\Upload\UploadFileCommand;
use BenGorFile\File\Infrastructure\Application\FileCommandBus;
use BenGorFile\SimpleBusBridge\CommandBus\SimpleBusFileCommandBus;
use PhpSpec\ObjectBehavior;
use SimpleBus\Message\Bus\MessageBus;

/**
 * Spec file of SimpleBusFileCommandBus class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class SimpleBusFileCommandBusSpec extends ObjectBehavior
{
    function let(MessageBus $messageBus)
    {
        $this->beConstructedWith($messageBus);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(SimpleBusFileCommandBus::class);
    }

    function it_implements_file_command_bus()
    {
        $this->shouldImplement(FileCommandBus::class);
    }

    function it_handles_a_command(MessageBus $messageBus, UploadFileCommand $command)
    {
        $messageBus->handle($command)->shouldBeCalled();

        $this->handle($command);
    }
}
