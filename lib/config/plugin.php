<?php

/**
 * @author Коробов Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
return array(
    'name' => 'Группа Вконтакте',
    'description' => 'Создание виджета группы Вконтакте',
    'vendor' => '985310',
    'version' => '1.0.0',
    'img' => 'img/vkgroup.png',
    'frontend' => true,
    'shop_settings' => true,
    'handlers' => array(
        'frontend_nav' => 'frontendNav',
    ),
);
//EOF
