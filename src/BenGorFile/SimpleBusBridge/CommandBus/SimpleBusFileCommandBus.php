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

namespace BenGorFile\SimpleBusBridge\CommandBus;

use BenGorFile\File\Infrastructure\Application\FileCommandBus;
use SimpleBus\Message\Bus\MessageBus;

/**
 * Simple bus implementation of file command bus.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class SimpleBusFileCommandBus implements FileCommandBus
{
    /**
     * The message bus.
     *
     * @var MessageBus
     */
    private $messageBus;

    /**
     * Constructor.
     *
     * @param MessageBus $aMessageBus The message bus
     */
    public function __construct(MessageBus $aMessageBus)
    {
        $this->messageBus = $aMessageBus;
    }

    /**
     * {@inheritdoc}
     */
    public function handle($aCommand)
    {
        $this->messageBus->handle($aCommand);
    }
}
