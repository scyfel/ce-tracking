<?php

/**
 * ce-tracking
 * 
 * Copyright (C) 2014 Scyfel (Christian Barkowsky & Jan Theofel)
 * Copyright (C) 2010-2013 Jan Theofel <jan@theofel.com>
 * Copyright (C) ETES GmbH 2009
 * 
 * @package ce-tracking
 * @author  Christian Barkowsky <http://christianbarkowsky.de>
 * @author  Jan Theofel <contao@theofel.com>
 * @link    http://scyfel.de
 * @license LGPL
 */


\Contao\ClassLoader::addNamespace('Scyfel');


ClassLoader::addClasses(array
(
	'Scyfel\ContentCookie' => 'system/modules/ce-tracking/elements/ContentCookie.php',
));
