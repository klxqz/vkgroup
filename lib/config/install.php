<?php

/**
 * @author Коробов Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
$plugin_id = array('shop', 'vkgroup');
$app_settings_model = new waAppSettingsModel();
$app_settings_model->set($plugin_id, 'status', '1');
$app_settings_model->set($plugin_id, 'default_out', '1');
$app_settings_model->set($plugin_id, 'group_id', '20003922');
$app_settings_model->set($plugin_id, 'mode', '0');
$app_settings_model->set($plugin_id, 'wide_mode', '0');
$app_settings_model->set($plugin_id, 'width', '220');
$app_settings_model->set($plugin_id, 'height', '400');
$app_settings_model->set($plugin_id, 'background_color', '#FFFFFF');
$app_settings_model->set($plugin_id, 'text_color', '#2B587A');
$app_settings_model->set($plugin_id, 'but_color', '#5B7FA6');