<?php

declare(strict_types=1);

/**
 * Copyright (c) 2021 Kai Sassnowski
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/ksassnowski/venture
 */

namespace Sassnowski\Venture\Workflow;

use Sassnowski\Venture\Collection\Identifiable;

/**
 * @psalm-immutable
 */
final class JobDefinition implements Identifiable
{
    public function __construct(
        public string $id,
        public string $name,
        public WorkflowStepInterface $job,
    ) {
    }

    public function getId(): string
    {
        return $this->id;
    }
}
