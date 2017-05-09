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
 * Add to allowed tables of backend module
 */
$GLOBALS['BE_MOD']['ContaoMonitoring']['monitoring']['tables'][] = 'tl_monitoring_task';

/**
 * Defining allowed states for tasks
 */
$GLOBALS['TL_MONITORING']['TASKS']['STATUS'] = array
(
    'STATES'      => array('CREATED', 'SCHEDULED', 'PROCESSING', 'SUSPENDED', 'FINISHED'),
    'START_STATE' => 'CREATED',
    'END_STATES'  => array('FINISHED')
);

/**
 *
 */
$GLOBALS['TL_MONITORING']['TASKS']['WARNING_THRESHOLD'] = 3;

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['monitoringFormatList'][] = array('MonitoringTasksHookImpl', 'formatUnfinishedTasksField');

?>