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

namespace BenGorFile\SimpleBusBridge\EventBus;

use BenGorFile\File\Domain\Model\Event\UserEvent;
use BenGorFile\File\Infrastructure\Domain\Model\UserEventBus;
use SimpleBus\Message\Bus\MessageBus;

/**
 * Simple bus implementation of file event bus.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class SimpleBusUserEventBus implements UserEventBus
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
    public function handle(UserEvent $anEvent)
    {
        $this->messageBus->handle($anEvent);
    }
}
