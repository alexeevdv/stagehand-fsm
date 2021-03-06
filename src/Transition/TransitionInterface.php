<?php
/*
 * Copyright (c) KUBO Atsuhiro <kubo@iteman.jp>,
* All rights reserved.
*
* This file is part of Stagehand_FSM.
*
* This program and the accompanying materials are made available under
* the terms of the BSD 2-Clause License which accompanies this
* distribution, and is available at http://opensource.org/licenses/BSD-2-Clause
*/

namespace Stagehand\FSM\Transition;

use Stagehand\FSM\Event\EventInterface;
use Stagehand\FSM\State\StateInterface;
use Stagehand\FSM\State\TransitionalStateInterface;

/**
 * @since Class available since Release 3.0.0
 */
interface TransitionInterface
{
    /**
     * @return StateInterface
     */
    public function getToState(): StateInterface;

    /**
     * @return TransitionalStateInterface
     */
    public function getFromState(): TransitionalStateInterface;

    /**
     * @return EventInterface
     */
    public function getEvent(): EventInterface;
}
