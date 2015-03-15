<?php
/**
 * @link http://www.diginova.com.tr/
 * @copyright Copyright (c) 2014 DigiNova 
 * @license http://www.diginova.com.tr/yii2-metronic.license
 */

namespace diginova\metronic\widgets;

use yii\helpers\Html;

/**
 * Badge widget.
 *
 * For example,
 *
 * Badge::widget([
 *     'label' => 'NEW',
 *     'type' => Badge::TYPE_SUCCESS,
 *     'round'
 * ]);
 *
 * @package diginova\metronic\widgets
 */
class Badge extends  \yii\base\Widget
{
    // type
    const TYPE_DEFAULT = 'default';
    const TYPE_GRAY = 'default';
    const TYPE_SUCCESS = 'success';
    const TYPE_WARNING = 'warning';
    const TYPE_DANGER = 'danger';
    const TYPE_INFO = 'info';
    /**
     * @var string the badge label
     */
    public $label;
    /**
     * @var string the badge type
     * Valid values '', 'default', 'success', 'warning', 'danger', 'info'
     */
    public $type = self::TYPE_DEFAULT;
    /**
     * @var bool Indicates whether badge is rounded or not.
     */
    public $round = true;

    /**
     * Executes the widget.
     */
    public function run()
    {
        $options = [];
        Html::addCssClass($options, 'badge');
        if (!$this->round) {
            Html::addCssClass($options, 'badge-roundless');
        }
        Html::addCssClass($options, 'badge-' . $this->type);

        echo Html::tag('span', $this->label, $options);
    }
}