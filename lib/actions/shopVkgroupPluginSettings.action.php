<?php

/**
 * @author Коробов Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
class shopVkgroupPluginSettingsAction extends waViewAction {

    protected $plugin_id = array('shop', 'vkgroup');

    public function execute() {
        $app_settings_model = new waAppSettingsModel();
        $settings = $app_settings_model->get($this->plugin_id);
        $this->view->assign('settings', $settings);
    }

}
