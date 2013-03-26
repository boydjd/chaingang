<?php
/**
 * Copyright 2006 - 2013 Eric D. Hough (http://ehough.com)
 *
 * This file is part of chaingang (https://github.com/ehough/chaingang)
 *
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */

namespace Ehough\ChainGang\Impl;
use Ehough\ChainGang\Impl\StandardChain;
use \Mockery as m;

final class StandardChainTest extends \PHPUnit_Framework_TestCase
{
    private $_sut;

    public function setUp()
    {
        parent::setUp();

        $this->_sut = new StandardChain();
    }

    public function testCommandCanHandle()
    {
        $context = m::mock('Ehough\ChainGang\Api\Context');
        $command = m::mock('Ehough\ChainGang\Api\Command');

        $command->shouldReceive('execute')->with($context)->once()->andReturn(true);

        $this->_sut->addCommand($command);

        $result = $this->_sut->execute($context);

        $this->assertTrue($result);
    }

    public function tearDown()
    {
        m::close();
    }

}
