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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_monitoring_task']['title']       = array('Title', 'Enter the title for this task.');
$GLOBALS['TL_LANG']['tl_monitoring_task']['description'] = array('Description', 'Enter the description for this task.');
$GLOBALS['TL_LANG']['tl_monitoring_task']['createdAt']   = array('Creation date', 'The timestamp of the creation of this task (not editable).');
$GLOBALS['TL_LANG']['tl_monitoring_task']['createdBy']   = array('Created by', 'The user who created this task (not editable).');
$GLOBALS['TL_LANG']['tl_monitoring_task']['updatedAt']   = array('Update date', 'The timestamp of the last update to this task (not editable).');
$GLOBALS['TL_LANG']['tl_monitoring_task']['updatedBy']   = array('Updated by', 'The user who last updated this task (not editable).');
$GLOBALS['TL_LANG']['tl_monitoring_task']['status']      = array('Status', 'Select the status of the task.');
$GLOBALS['TL_LANG']['tl_monitoring_task']['progress']    = array('Progress', 'Specify how far the processing of the task is progressed.');
$GLOBALS['TL_LANG']['tl_monitoring_task']['comment']     = array('Comment', 'Enter a comment for this task.');

/**
 * Legends
*/
$GLOBALS['TL_LANG']['tl_monitoring_task']['task_legend']            = 'Task';
$GLOBALS['TL_LANG']['tl_monitoring_task']['creation_legend']        = 'Creation';
$GLOBALS['TL_LANG']['tl_monitoring_task']['update_legend']          = 'Update';
$GLOBALS['TL_LANG']['tl_monitoring_task']['creation_update_legend'] = $GLOBALS['TL_LANG']['tl_monitoring_task']['creation_legend'] . ' & ' . $GLOBALS['TL_LANG']['tl_monitoring_task']['update_legend'];
$GLOBALS['TL_LANG']['tl_monitoring_task']['state_legend']           = 'Processing state';
$GLOBALS['TL_LANG']['tl_monitoring_task']['comment_legend']         = 'Comment';

/**
 * References
 */
$GLOBALS['TL_LANG']['tl_monitoring_task']['status_values']['CREATED']    = 'Created';
$GLOBALS['TL_LANG']['tl_monitoring_task']['status_values']['SCHEDULED']  = 'Scheduled';
$GLOBALS['TL_LANG']['tl_monitoring_task']['status_values']['PROCESSING'] = 'Processing';
$GLOBALS['TL_LANG']['tl_monitoring_task']['status_values']['SUSPENDED']  = 'Suspended';
$GLOBALS['TL_LANG']['tl_monitoring_task']['status_values']['FINISHED']   = 'Finished';

$GLOBALS['TL_LANG']['tl_monitoring_task']['progress_values'][0]         = '0 %';
$GLOBALS['TL_LANG']['tl_monitoring_task']['progress_values'][10]        = '10 %';
$GLOBALS['TL_LANG']['tl_monitoring_task']['progress_values'][20]        = '20 %';
$GLOBALS['TL_LANG']['tl_monitoring_task']['progress_values'][30]        = '30 %';
$GLOBALS['TL_LANG']['tl_monitoring_task']['progress_values'][40]        = '40 %';
$GLOBALS['TL_LANG']['tl_monitoring_task']['progress_values'][50]        = '50 %';
$GLOBALS['TL_LANG']['tl_monitoring_task']['progress_values'][60]        = '60 %';
$GLOBALS['TL_LANG']['tl_monitoring_task']['progress_values'][70]        = '70 %';
$GLOBALS['TL_LANG']['tl_monitoring_task']['progress_values'][80]        = '80 %';
$GLOBALS['TL_LANG']['tl_monitoring_task']['progress_values'][90]        = '90 %';
$GLOBALS['TL_LANG']['tl_monitoring_task']['progress_values'][100]       = '100 %';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_monitoring_task']['new']    = array('New monitoring task', 'Create a new monitoring task.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['edit']   = array('Edit monitoring task', 'Edit the monitoring task with ID %s.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['delete'] = array('Delete monitoring task', 'Delete the monitoring task with ID %s.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['show']   = array('Show monitoring task', 'Show infos of monitoring task with ID %s.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['check']  = array('Check server', 'Tests the availability of the server.');
$GLOBALS['TL_LANG']['tl_monitoring_task']['tests']  = array('Show monitoring tests', 'Show the tests for this monitoring entrys.');;

?>