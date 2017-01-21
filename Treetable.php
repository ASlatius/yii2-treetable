<?php

/**
 * @copyright Copyright &copy; Arno Slatius 2017
 * @package yii2-treetable
 * @version 1.0
 */

namespace slatiusa\treetable;

use \Yii;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

class Treetable extends \yii\grid\GridView
{
	/**
	 * Initializes the widget
	 */
	public function init() {
        Yii::$app->assetManager->loadBundle('ASlatius\treetable\TreetableAsset');

	}

	/**
	 * Runs the widget
	 *
	 * @return string|void
	 */
	public function run() {
        parent::run();
    }

	/**
	 * Register client assets
	 */
//	public function registerAssets() {
//		$view = $this->getView();
//		NestableAsset::register($view);
//		$this->registerPlugin('nestable');
//	}
}
