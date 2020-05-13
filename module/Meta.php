<?php

namespace varp\seo\module;

class Meta extends \yii\base\Module
{
    public $controllerNamespace = 'varp\seo\module\controllers';
    public $defaultRoute = 'meta';

    public function init()
    {
        parent::init();
    }
}