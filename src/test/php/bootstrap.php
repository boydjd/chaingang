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

require_once __DIR__ . '/../../../vendor/ehough/pulsar/src/main/php/ehough/pulsar/ComposerClassLoader.php';
require_once 'SplClassLoader.php';

$loader = new ehough_pulsar_ComposerClassLoader(__DIR__ . '/../../../vendor/');
$loader->register();

$loader = new SplClassLoader('Ehough', __DIR__ . '/../../main/php');
$loader->register();
