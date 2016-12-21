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

namespace Stagehand\FSM\State;

use Stagehand\FSM\Event\TransitionEvent;

/**
 * @since Class available since Release 2.1.0
 */
class InitialStateTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     *
     * @since Method available since Release 2.2.0
     */
    public function raisesAnExceptionIfTheEventIdIsInvalidWhenSettingTheTransitionEvent()
    {
        $state = new InitialState();

        try {
            $state->addTransitionEvent(new TransitionEvent('foo'));
        } catch (InvalidEventException $e) {
            return;
        }

        $this->fail('An expected exception has not been raised.');
    }
}
