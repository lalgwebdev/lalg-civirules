<?php

require_once 'lalg_civirules.civix.php';
use CRM_LalgCivirules_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function lalg_civirules_civicrm_config(&$config) {
  _lalg_civirules_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function lalg_civirules_civicrm_install() {
  _lalg_civirules_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function lalg_civirules_civicrm_enable() {
  _lalg_civirules_civix_civicrm_enable();
}

// --- Functions below this ship commented out. Uncomment as required. ---


/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function lalg_civirules_civicrm_navigationMenu(&$menu) {
  _lalg_civirules_civix_insert_navigation_menu($menu, 'Mailings', array(
    'label' => E::ts('New subliminal message'),
    'name' => 'mailing_subliminal_message',
    'url' => 'civicrm/mailing/subliminal',
    'permission' => 'access CiviMail',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _lalg_civirules_civix_navigationMenu($menu);
} // */
