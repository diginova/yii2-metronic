<?php

/**
 * @link http://www.diginova.com.tr/
 * @copyright Copyright (c) 2014 DigiNova 
 * @license http://www.diginova.com.tr/yii2-metronic.license
 */

namespace diginova\metronic\helpers;

use diginova\metronic\Metronic;
use yii\helpers\Html;

/**
 * Layout helper
 */
class Layout {

    /**
     * Retrieves Html options
     * @param string $tag given tag
     * @param boolean $asString if return as string
     * @return type
     */
    public static function getHtmlOptions($tag, $asString = false)
    {
        $callback = sprintf('static::_%sOptions', strtolower($tag));

        $options = call_user_func($callback, []);

        return $asString ? Html::renderTagAttributes($options) : $options;
    }

    /**
     * Adds body tag options
     * @param array $options given options
     */
    private static function _bodyOptions($options)
    {
        Html::addCssClass($options, 'page-sidebar-closed-hide-logo');

        if (Metronic::LAYOUT_BOXED === Metronic::getComponent()->layoutOption)
        {
            Html::addCssClass($options, 'page-boxed');
        }

        if (Metronic::HEADER_FIXED === Metronic::getComponent()->headerOption)
        {
            Html::addCssClass($options, 'page-header-fixed');
        }

        if (Metronic::SIDEBAR_POSITION_RIGHT === Metronic::getComponent()->sidebarPosition)
        {
            Html::addCssClass($options, 'page-sidebar-reversed');
        }

        if (Metronic::SIDEBAR_FIXED === Metronic::getComponent()->sidebarOption)
        {
            Html::addCssClass($options, 'page-sidebar-fixed');
        }

        return $options;
    }

    /**
     * Adds header tag options
     * @param array $options given options
     */
    private static function _headerOptions($options)
    {
        Html::addCssClass($options, 'page-header navbar');

        if (Metronic::HEADER_FIXED === Metronic::getComponent()->headerOption)
        {
            Html::addCssClass($options, 'navbar-fixed-top');
        }
        else
        {
            Html::addCssClass($options, 'navbar-static-top');
        }

        return $options;
    }

    /**
     * Adds actions tag options
     * @param array $options given options
     */
    private static function _actionsOptions($options)
    {
        Html::addCssClass($options, 'page-actions');

        return $options;
    }

    /**
     * Adds top tag options
     * @param array $options given options
     */
    private static function _topOptions($options)
    {
        Html::addCssClass($options, 'page-top');

        return $options;
    }

    /**
     * Adds topmenu tag options
     * @param array $options given options
     */
    private static function _topmenuOptions($options)
    {
        Html::addCssClass($options, 'top-menu');

        return $options;
    }

    /**
     * Adds container tag options
     * @param array $options given options
     */
    private static function _containerOptions($options)
    {
        Html::addCssClass($options, 'container');

        return $options;
    }

    /**
     * Adds clearfix tag options
     * @param array $options given options
     */
    private static function _clearfixOptions($options)
    {
        Html::addCssClass($options, 'clearfix');

        return $options;
    }

}
