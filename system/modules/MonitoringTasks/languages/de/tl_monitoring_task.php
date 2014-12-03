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
$GLOBALS['TL_LANG']['tl_monitoring_task']['title']       = array('Titel', 'Geben Sie einen Titel für diese Aufgabe ein.');
$GLOBALS['TL_LANG']['tl_monitoring_task']['description'] = array('Beschreibung', 'Geben Sie die Beschreibung für diese Aufgabe ein.');
$GLOBALS['TL_LANG']['tl_monitoring_task']['createdAt']   = array('Erstellungsdatum', 'Der Zeitstempel der Erstellung dieser Aufgabe (nicht bearbeitbar).');
$GLOBALS['TL_LANG']['tl_monitoring_task']['createdBy']   = array('Erstellt durch', 'Der Benutzer der diese Aufgabe erstellt hat (nicht bearbeitbar).');
$GLOBALS['TL_LANG']['tl_monitoring_task']['updatedAt']   = array('Aktualisierungsdatum', 'Der Zeitstempel der letzten Aktualisierung dieser Aufgabe (nicht bearbeitbar).');
$GLOBALS['TL_LANG']['tl_monitoring_task']['updatedBy']   = array('Aktualisiert durch', 'Der Benutzer der diese Aufgabe zuletzt aktualisiert hat (nicht bearbeitbar).');
$GLOBALS['TL_LANG']['tl_monitoring_task']['status']      = array('Status', 'Wählen Sie den Status der Aufgabe.');
$GLOBALS['TL_LANG']['tl_monitoring_task']['progress']    = array('Fortschritt', 'Geben Sie an wie weit die Bearbeitung der Aufgabe fortgeschritten ist.');
$GLOBALS['TL_LANG']['tl_monitoring_task']['comment']     = array('Kommentar', 'Geben Sie ein Kommentar zu dieser Aufgabe ein.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_monitoring_task']['task_legend']            = 'Aufgabe';
$GLOBALS['TL_LANG']['tl_monitoring_task']['creation_legend']        = 'Erstellung';
$GLOBALS['TL_LANG']['tl_monitoring_task']['update_legend']          = 'Aktualisierung';
$GLOBALS['TL_LANG']['tl_monitoring_task']['creation_update_legend'] = $GLOBALS['TL_LANG']['tl_monitoring_task']['creation_legend'] . ' & ' . $GLOBALS['TL_LANG']['tl_monitoring_task']['update_legend'];
$GLOBALS['TL_LANG']['tl_monitoring_task']['state_legend']           = 'Bearbeitungsstand';
$GLOBALS['TL_LANG']['tl_monitoring_task']['comment_legend']         = 'Kommentar';

/**
 * References
 */
$GLOBALS['TL_LANG']['tl_monitoring_task']['status_values']['CREATED']    = 'Erstellt';
$GLOBALS['TL_LANG']['tl_monitoring_task']['status_values']['SCHEDULED']  = 'Eingeplant';
$GLOBALS['TL_LANG']['tl_monitoring_task']['status_values']['PROCESSING'] = 'Bearbeitung';
$GLOBALS['TL_LANG']['tl_monitoring_task']['status_values']['SUSPENDED']  = 'Pausiert';
$GLOBALS['TL_LANG']['tl_monitoring_task']['status_values']['FINISHED']   = 'Beendet';

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
$GLOBALS['TL_LANG']['tl_monitoring_task']['new']    = array('Neue Monitoring Aufgabe', 'Eine neue Monitoring Aufgabe erstellen.');
$GLOBALS['TL_LANG']['tl_monitoring_task']['edit']   = array('Monitoring Aufgabe bearbeiten', 'Monitoring Aufgabe mit der ID %s bearbeiten.');
$GLOBALS['TL_LANG']['tl_monitoring_task']['delete'] = array('Monitoring Aufgabe löschen', 'Monitoring Aufgabe mit der ID %s löschen.');
$GLOBALS['TL_LANG']['tl_monitoring_task']['show']   = array('Monitoring Aufgabe anzeigen', 'Monitoring Aufgabe mit der ID %s anzeigen.');
$GLOBALS['TL_LANG']['tl_monitoring_task']['tests']  = array('Monitoring Tests anzeigen', 'Tests zu diesem Monitoring Eintrag anzeigen.');

?>