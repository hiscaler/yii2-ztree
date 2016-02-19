<?php

namespace yadjet\ztree;

use yii\helpers\Json;

/**
 * zTree Widget For Yii2 class file.
 *
 * @author Tony Krutins <diselop@gmail.com>
 *
 * @version 0.1.0
 *
 * @link https://github.com/diselop/yii2-ztree
 * @link http://www.ztree.me/v3/main.php
 */
class ZTree extends \yii\base\Widget
{

    /**
     * @var array the settings for the zTree.
     * Please refer to the corresponding [zTree Web page](http://www.ztree.me/v3/api.php)  for possible setting.
     */
    public $settings = [];

    /**
     * @var string id of element.
     */
    public $id = null;

    /*
     * @var boolean json data or array must be passed in plugin
     */
    public $json = false;

    /*
     * @var array nodes element of trees
     */
    public $nodes;

    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        parent::init();
        if (!isset($this->id)) {
            $this->id = $this->getId();
        }
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        echo '<ul id=' . $this->id . ' class="ztree"></ul>';
        ZTreeAsset::register($this->getView());
        $this->registerClientScript();
    }

    /**
     * Registers zTree JS
     */
    protected function registerClientScript()
    {
        $view = $this->getView();
        $zNodes = $this->json == false ? Json::encode($this->nodes) : $this->nodes;
        $settings = Json::encode($this->settings);
        $js = "$.fn.zTree.init($('#$this->id'), $settings, $zNodes)";
        $view->registerJs($js);
    }

    /**
     * @param string $name the name of the zTree plugin
     */
    protected function registerPlugin($name)
    {
        $name::register($this->getView());
    }

}
