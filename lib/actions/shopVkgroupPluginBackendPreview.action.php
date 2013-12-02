<?php

/**
 * @author Коробов Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
class shopVkgroupPluginBackendPreviewAction extends waViewAction {

    public function execute() {
        $plugin = wa()->getPlugin('vkgroup');
        $this->view->assign('settings', $plugin->getSettings());
        $this->setTemplate('plugins/vkgroup/templates/Vkgroup.html');
    }

}
