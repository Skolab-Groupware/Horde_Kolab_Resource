<?php
/**
 * Setup autoloading for the tests.
 *
 * PHP version 5
 *
 * Copyright 2009-2011 The Horde Project (http://www.horde.org/)
 *
 * See the enclosed file COPYING for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @category   Kolab
 * @package    Kolab_Resource
 * @subpackage UnitTests
 * @author     Gunnar Wrobel <wrobel@pardus.de>
 * @license    http://www.fsf.org/copyleft/lgpl.html LGPL
 * @link       http://pear.horde.org/index.php?package=Kolab_Resource
 */

require_once 'Horde/Kolab/Resource.php';

/** Do not catch strict standards */
error_reporting(E_ALL | ~E_STRICT);

/** Load the basic test definition */
require_once dirname(__FILE__) . '/TestCase.php';
