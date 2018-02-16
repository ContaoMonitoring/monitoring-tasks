<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2018 Leo Feyer
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
 * @copyright  Cliff Parnitzky 2014-2018
 * @author     Cliff Parnitzky
 * @package    MonitoringTasks
 * @license    LGPL
 */
/**
 * Load class tl_monitoring_test
 */
$this->loadDataContainer('tl_monitoring_test');

$GLOBALS['TL_CSS'][] = 'system/modules/MonitoringTasks/assets/styles.css';

$GLOBALS['TL_DCA']['tl_monitoring_task'] = array
(
  // Config
  'config' => array
  (
    'dataContainer'               => 'Table',
    'ptable'                      => 'tl_monitoring',
    'enableVersioning'            => true,
    'doNotCopyRecords'            => true,
      'onsubmit_callback' => array
      (
          array('tl_monitoring_task', 'updateFields'),
          array('tl_monitoring_task', 'updateMonitoringEntry')
      ),
      'ondelete_callback' => array
      (
          array('tl_monitoring_task', 'updateMonitoringEntry')
      ),
    'sql' => array
    (
      'keys' => array
      (
        'id' => 'primary'
      )
    )
  ),

  // List
  'list' => array
  (
    'sorting' => array
    (
      'mode'                    => 4,
      'fields'                  => array('updatedAt DESC'),
      'headerFields'            => $GLOBALS['TL_DCA']['tl_monitoring_test']['list']['sorting']['headerFields'],
        'header_callback'         => array('tl_monitoring_test', 'extendHeader'),
      'child_record_callback'   => array('tl_monitoring_task', 'getTaskLabel'),
      'panelLayout'             => 'filter;sort,search,limit'
    ),
    'global_operations' => array
    (
      'tests' => array
      (
        'label'               => &$GLOBALS['TL_LANG']['tl_monitoring_task']['tests'],
        'href'                => 'table=tl_monitoring_test',
        'class'               => 'header_icon tl_monitoring_tests'
      ),
      'all' => array
      (
        'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
        'href'                => 'act=select',
        'class'               => 'header_edit_all',
        'attributes'          => 'onclick="Backend.getScrollOffset();"'
      )
    ),
    'operations' => array
    (
      'edit' => array
      (
        'label'               => &$GLOBALS['TL_LANG']['tl_monitoring_task']['edit'],
        'href'                => 'act=edit',
        'icon'                => 'edit.gif'
      ),
      'delete' => array
      (
        'label'               => &$GLOBALS['TL_LANG']['tl_monitoring_task']['delete'],
        'href'                => 'act=delete',
        'icon'                => 'delete.gif',
        'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
      ),
      'show' => array
      (
        'label'               => &$GLOBALS['TL_LANG']['tl_monitoring_task']['show'],
        'href'                => 'act=show',
        'icon'                => 'show.gif'
      )
    )
  ),

  // Palettes
  'palettes' => array
  (
    'default'                   => '{task_legend},title,description;{creation_update_legend},createdAt,createdBy,updatedAt,updatedBy;{state_legend},status,progress;{comment_legend},comment'
  ),

  // Fields
  'fields' => array
  (
    'id' => array
    (
      'sql'                     => "int(10) unsigned NOT NULL auto_increment"
    ),
    'pid' => array
    (
      'eval'                    => array('doNotShow'=>true),
      'sql'                     => "int(10) unsigned NOT NULL default '0'"
    ),
    'tstamp' => array
    (
      'eval'                    => array('doNotShow'=>true),
      'sql'                     => "int(10) unsigned NOT NULL default '0'"
    ),
      'title' => array
    (
      'label'                   => &$GLOBALS['TL_LANG']['tl_monitoring_task']['title'],
      'exclude'                 => true,
      'search'                  => true,
      'inputType'               => 'text',
      'eval'                    => array('mandatory'=>true, 'maxlength'=>64, 'tl_class'=>'long'),
      'sql'                     => "varchar(64) NOT NULL default ''"
    ),
    'description' => array
    (
      'label'                   => &$GLOBALS['TL_LANG']['tl_monitoring_task']['description'],
      'exclude'                 => true,
      'search'                  => true,
      'inputType'               => 'textarea',
      'eval'                    => array('mandatory'=>true, 'tl_class'=>'clr', 'style'=>'min-height: 60px;'),
      'sql'                     => "text NULL"
    ),
    'createdAt' => array
    (
      'label'                   => &$GLOBALS['TL_LANG']['tl_monitoring_task']['createdAt'],
      'default'                 => time(),
      'filter'                  => true,
      'sorting'                 => true,
      'inputType'               => 'text',
      'flag'                    => 6,
      'eval'                    => array('readonly'=>true, 'rgxp'=>'datim', 'tl_class'=>'clr w50'),
      'sql'                     => "int(10) unsigned NOT NULL default '0'"
    ),
    'createdBy' => array
    (
      'label'                   => &$GLOBALS['TL_LANG']['tl_monitoring_task']['createdBy'],
      'default'                 => BackendUser::getInstance()->id,
      'filter'                  => true,
      'sorting'                 => true,
      'flag'                    => 11,
      'inputType'               => 'select',
      'foreignKey'              => 'tl_user.name',
      'eval'                    => array('readonly'=>true, 'tl_class'=>'w50', 'includeBlankOption'=>true),
      'sql'                     => "int(10) unsigned NOT NULL default '0'",
      'relation'                => array('type'=>'hasOne', 'load'=>'eager')
    ),
    'updatedAt' => array
    (
      'label'                   => &$GLOBALS['TL_LANG']['tl_monitoring_task']['updatedAt'],
      'default'                 => time(),
      'filter'                  => true,
      'sorting'                 => true,
      'inputType'               => 'text',
      'flag'                    => 6,
      'eval'                    => array('readonly'=>true, 'rgxp'=>'datim', 'tl_class'=>'clr w50'),
      'sql'                     => "int(10) unsigned NOT NULL default '0'"
    ),
    'updatedBy' => array
    (
      'label'                   => &$GLOBALS['TL_LANG']['tl_monitoring_task']['updatedBy'],
      'default'                 => BackendUser::getInstance()->id,
      'filter'                  => true,
      'sorting'                 => true,
      'flag'                    => 11,
      'inputType'               => 'select',
      'foreignKey'              => 'tl_user.name',
      'eval'                    => array('readonly'=>true, 'tl_class'=>'w50', 'includeBlankOption'=>true),
      'sql'                     => "int(10) unsigned NOT NULL default '0'",
      'relation'                => array('type'=>'hasOne', 'load'=>'eager')
    ),
    'status' => array
    (
      'label'                   => &$GLOBALS['TL_LANG']['tl_monitoring_task']['status'],
      'filter'                  => true,
      'sorting'                 => true,
      'inputType'               => 'select',
      'default'                 => $GLOBALS['TL_MONITORING']['TASKS']['STATUS']['START_STATE'],
      'options'                 => $GLOBALS['TL_MONITORING']['TASKS']['STATUS']['STATES'],
      'reference'               => &$GLOBALS['TL_LANG']['tl_monitoring_task']['status_values'],
      'eval'                    => array('tl_class'=>'clr w50'),
      'sql'                     => "varchar(32) NOT NULL default '" . $GLOBALS['TL_MONITORING']['TASKS']['STATUS']['START_STATE'] . "'"
    ),
    'progress' => array
    (
      'label'                   => &$GLOBALS['TL_LANG']['tl_monitoring_task']['progress'],
      'filter'                  => true,
      'sorting'                 => true,
      'flag'                    => 11,
      'inputType'               => 'select',
      'options'                 => array(0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
      'reference'               => &$GLOBALS['TL_LANG']['tl_monitoring_task']['progress_values'],
      'eval'                    => array('tl_class'=>'w50'),
      'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
    ),
    'comment' => array
    (
      'label'                   => &$GLOBALS['TL_LANG']['tl_monitoring_task']['comment'],
      'search'                  => true,
      'exclude'                 => true,
      'inputType'               => 'textarea',
      'eval'                    => array('tl_class'=>'clr', 'style'=>'min-height: 60px;'),
      'sql'                     => "text NULL"
    )
  )
);

/**
 * Class tl_monitoring_task
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Cliff Parnitzky 2014-2018
 * @author     Cliff Parnitzky
 * @package    Controller
 */
class tl_monitoring_task extends Backend
{
  /**
   * Constructor
   */
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * Return the label for an test entry
   * @param array
   * @return string
   */
  public function getTaskLabel($arrRow)
  {
    $cssClass = strtolower($arrRow['status']);

    $label = '
<div class="tl_gray tl_small" style="margin-bottom: 5px;"><span class="tl_label">' . $GLOBALS['TL_LANG']['tl_monitoring_task']['creation_legend'] . ':</span>' . date(\Config::get('datimFormat'), $arrRow['createdAt']) . ' (' . \UserModel::findByPk($arrRow['createdBy'])->name . ')&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span class="tl_label">' . $GLOBALS['TL_LANG']['tl_monitoring_task']['update_legend'] . ':</span>' . date(\Config::get('datimFormat'), $arrRow['updatedAt']) . ' (' . \UserModel::findByPk($arrRow['updatedBy'])->name . ')</div>

<h2 class="tl_green">' . $arrRow['title'] . '</h2>

<table class="tl_monitoring_task">
  <tr><td><span class="tl_label">' . $GLOBALS['TL_LANG']['tl_monitoring_task']['status'][0] . ':</span></td><td><img class="tl_monitoring_task_status" src="system/modules/MonitoringTasks/assets/status/' . $arrRow['status'] . '.png" alt="" /> ' . $GLOBALS['TL_LANG']['tl_monitoring_task']['status_values'][$arrRow['status']] . '</td></tr>
  <tr><td><span class="tl_label">' . $GLOBALS['TL_LANG']['tl_monitoring_task']['progress'][0] . ':</span></td><td><img class="tl_monitoring_task_progress" src="system/modules/MonitoringTasks/assets/progress/' . $arrRow['progress'] . '.png" alt="" /> ' . $GLOBALS['TL_LANG']['tl_monitoring_task']['progress_values'][$arrRow['progress']] . '</td></tr>
</table>';
    $label .="\n";
    return $label;
  }

  /**
   * Update some fields when saving a task.
   *
   * @param DataContainer $dc
   */
  public function updateFields(DataContainer $dc)
  {
    if (!$dc instanceof \DataContainer || !$dc->activeRecord)
    {
      return;
    }

    $arrSet = array();
    $arrSet['updatedAt'] = time();
    $arrSet['updatedBy'] = BackendUser::getInstance()->id;

    if (in_array($dc->activeRecord->status, $GLOBALS['TL_MONITORING']['TASKS']['STATUS']['END_STATES']) && $dc->activeRecord->progress < 100)
    {
        $arrSet['progress'] = 100;
    }

      $this->Database->prepare("UPDATE tl_monitoring_task %s WHERE id=?")->set($arrSet)->execute($dc->id);
  }


  /**
   * Update some fields in the parent monitoring entry.
   *
   * @param DataContainer $dc
   */
  public function updateMonitoringEntry(DataContainer $dc)
  {
      if (!$dc instanceof \DataContainer || $dc->activeRecord == null || intval($dc->activeRecord->pid) == 0)
      {
          return;
      }
      $countAdjustment = 0;

      if (\Input::get('act') == 'delete' || \Input::get('act') == 'deleteAll')
      {
          // need to decrement the count when a tasks is deleted
          $countAdjustment = 1;
      }

      $this->Database->prepare("UPDATE tl_monitoring SET unfinished_tasks= ((SELECT COUNT(*) FROM tl_monitoring_task WHERE pid=? AND status NOT IN ('" . implode("','", $GLOBALS['TL_MONITORING']['TASKS']['STATUS']['END_STATES']) . "')) - " . $countAdjustment . ") WHERE id=?")
                     ->execute($dc->activeRecord->pid, $dc->activeRecord->pid);
  }
}

?>