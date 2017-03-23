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

namespace BenGorFile\SimpleBusBridge\Application;

use Ajgl\SimpleBus\Message\Bus\CatchReturnMessageBus;
use BenGorFile\File\Infrastructure\Application\FileQueryBus;

/**
 * Simple bus implementation of file query bus.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class SimpleBusFileQueryBus implements FileQueryBus
{
    /**
     * The message bus.
     *
     * @var CatchReturnMessageBus
     */
    private $messageBus;

    /**
     * Constructor.
     *
     * @param CatchReturnMessageBus $aMessageBus The message bus
     */
    public function __construct(CatchReturnMessageBus $aMessageBus)
    {
        $this->messageBus = $aMessageBus;
    }

    /**
     * {@inheritdoc}
     */
    public function handle($query, &$result)
    {
        $this->messageBus->handle($query, $result);
    }
}
