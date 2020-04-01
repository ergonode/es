<?php

/**
 * Copyright © Bold Brand Commerce Sp. z o.o. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types = 1);

namespace Ergonode\EventSourcing\Infrastructure\Bus;

use Ergonode\EventSourcing\Infrastructure\DomainCommandInterface;

/**
 */
interface CommandBusInterface
{
    /**
     * @param DomainCommandInterface $command
     * @param bool                   $asyncMode
     */
    public function dispatch(DomainCommandInterface $command, bool $asyncMode = false): void;
}
