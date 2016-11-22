<?php

namespace rabadan731\chart\c3;

use yii\bootstrap\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Yii2 wrapper for D3-based reusable chart library `c3`. You can generate chart as following:
 *
 * ```php
 * echo \rabadan731\chart\c3\Chart::widget([
 *      'clientOptions' => [
 *          'data' => [
 *              'columns' => [
 *                  ['data2', 130, 300, 200, 300, 250, 450]
 *              ]
 *           ]
 *       ]
 * ]);
 * ```
 */
class Chart extends Widget
{
    /**
     * @inheritdoc
     */
    public function run()
    {
        echo Html::tag('div', '', ['id' => $this->options['id'], 'class'=>$this->options['class']]);
        $this->registerAssets();
        parent::run();
    }

    /**
     * Register assets
     *
     * @return void
     */
    protected function registerAssets()
    {
        $id = $this->options['id'];
        $view = $this->getView();
        ChartAsset::register($view);
        $view->registerJs("var {$id} = c3.generate({$this->getClientOptions()});", $view::POS_END);
    }


    /**
     * Get client options in the json format
     *
     * @return string
     */
    protected function getClientOptions()
    {
        $this->clientOptions['bindto'] = '#' . $this->options['id'];

        return Json::encode($this->clientOptions);
    }
}