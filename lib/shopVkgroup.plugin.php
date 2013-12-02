<?php

/**
 * @author Коробов Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
class shopVkgroupPlugin extends shopPlugin {

    protected static $plugin;

    public function __construct($info) {
        parent::__construct($info);
        if (!self::$plugin) {
            self::$plugin = &$this;
        }
    }

    protected static function getThisPlugin() {
        if (self::$plugin) {
            return self::$plugin;
        } else {
            return wa()->getPlugin('vkgroup');
        }
    }

    public function frontendNav() {
        if ($this->getSettings('default_out')) {
            return self::display();
        }
    }

    public static function display() {
        $up = self::getThisPlugin();
        if ($up->getSettings('status')) {
            $view = wa()->getView();
            $view->assign('settings', $up->getSettings());
            $template_path = wa()->getAppPath('plugins/vkgroup/templates/Vkgroup.html', 'shop');
            $html = $view->fetch($template_path);
            return $html;
        }
    }

}
