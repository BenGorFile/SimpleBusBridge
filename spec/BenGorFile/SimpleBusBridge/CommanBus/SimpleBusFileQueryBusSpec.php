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

namespace spec\BenGorFile\SimpleBusBridge\Application;

use Ajgl\SimpleBus\Message\Bus\CatchReturnMessageBus;
use BenGorFile\File\Infrastructure\Application\FileQueryBus;
use BenGorFile\SimpleBusBridge\Application\SimpleBusFileQueryBus;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of SimpleBusFileQueryBus class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class SimpleBusFileQueryBusSpec extends ObjectBehavior
{
    function let(CatchReturnMessageBus $messageBus)
    {
        $this->beConstructedWith($messageBus);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(SimpleBusFileQueryBus::class);
    }

    function it_implements_file_command_bus()
    {
        $this->shouldImplement(FileQueryBus::class);
    }
}
