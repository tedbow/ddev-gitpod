<?php

// #ddev-generated: Automatically generated Drupal settings file.
if (file_exists($app_root . '/' . $site_path . '/settings.ddev.php') && getenv('IS_DDEV_PROJECT') == 'true') {
  include $app_root . '/' . $site_path . '/settings.ddev.php';
}
$config['automatic_updates.settings']['allow_core_minor_updates'] = TRUE;
$config['project_browser.admin_settings']['allow_ui_install'] = TRUE;
