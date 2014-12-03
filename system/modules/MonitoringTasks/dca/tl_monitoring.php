<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2014 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2014
 * @author     Cliff Parnitzky
 * @package    MonitoringTasks
 * @license    LGPL
 */

/**
 * Add ctables
 */
$GLOBALS['TL_DCA']['tl_monitoring']['config']['ctable'][] = 'tl_monitoring_task';
 
/**
 * Add operations
 */
array_insert($GLOBALS['TL_DCA']['tl_monitoring']['list']['operations'], 2, array
(
	'tasks' => array
	(
		'label' => &$GLOBALS['TL_LANG']['tl_monitoring']['tasks'],
		'href'  => 'table=tl_monitoring_task',
		'icon'  => 'system/modules/MonitoringTasks/assets/tasks.png'
	)
));

/**
 * Add to list
 */
$GLOBALS['TL_DCA']['tl_monitoring']['list']['label']['fields'][] = "unfinished_tasks";

/**
 * Add to palette
 */
$GLOBALS['TL_DCA']['tl_monitoring']['palettes']['default'] .= ";{task_legend},unfinished_tasks";

/**
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_monitoring']['fields']['unfinished_tasks'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_monitoring']['unfinished_tasks'],
    'exclude'                 => true,
    'filter'                  => true,
    'sorting'                 => true,
    'flag'                    => 12,
    'inputType'               => 'text',
    'eval'                    => array('readonly'=>true, 'rgxp'=>'digit', 'tl_class'=>'clr w50'),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);

?>