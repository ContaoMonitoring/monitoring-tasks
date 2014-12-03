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
 * Run in a custom namespace, so the class can be replaced
 */
namespace Monitoring;

/**
 * Class MonitoringTasksHookImpl
 *
 * Implementation of hooks.
 * @copyright  Cliff Parnitzky 2014
 * @author     Cliff Parnitzky
 * @package    Controller
 */
class MonitoringTasksHookImpl extends \Backend
{
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Modify the header ... add the timeline
	 * @param  $arrHeaderFields  the headerfields given from list->sorting
	 * @param  DataContainer $dc a DataContainer Object
	 * @return Array The manipulated headerfields
	 */
	public function formatUnfinishedTasksField($arrRow, \DataContainer $dc, $arrFormatedColumns)
	{
	    $intUnfinishedTasksIndex = array_search("unfinished_tasks", $GLOBALS['TL_DCA']['tl_monitoring']['list']['label']['fields']);
	    if ($intUnfinishedTasksIndex !== FALSE)
	    {
	        $image = "none";
	        $title = sprintf($GLOBALS['TL_LANG']['tl_monitoring']['unfinished_tasks_image_title'], $arrRow['unfinished_tasks']);
	        if ($arrRow['unfinished_tasks'] > 0 && $arrRow['unfinished_tasks'] <= $GLOBALS['TL_MONITORING']['TASKS']['WARNING_THRESHOLD'])
	        {
	            $image = "some";
	        }
	        else if ($arrRow['unfinished_tasks'] > $GLOBALS['TL_MONITORING']['TASKS']['WARNING_THRESHOLD'])
	        {
	            $image = "many";
	        }

	        $arrFormatedColumns[$intUnfinishedTasksIndex] = '<img src="system/modules/MonitoringTasks/assets/tasks_UNFINISHED_' . $image . '.png" alt="' . $arrRow['unfinished_tasks'] . '" title="' . $title . '" />';
	    }

		return $arrFormatedColumns;
	}
}

?>