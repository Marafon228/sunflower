<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/web/css/bootstrap.min.css',
        '/web/css/themewar-icons.css',
        '/web/css/flaticon.css',
        '/web/css/animate.css',
        '/web/css/owl.carousel.min.css',
        '/web/css/owl.theme.default.min.css',
        '/web/css/settings.css',
        '/web/css/lightcase.css',
        '/web/css/preset.css',
        '/web/css/ignore_in_wp.css',
        '/web/css/theme.css',
        '/web/css/responsive.css',
        'css/site.css',
    ];
    public $js = [
        '/web/js/jquery.js',
        '/web/js/bootstrap.min.js',
        '/web/js/jquery.js',
        '/web/js/modernizr.custom.js',
        '/web/js/jquery.appear.js',
        '/web/js/jquery-ui.js',
        '/web/js/owl.carousel.min.js',
        '/web/js/jquery.shuffle.min.js',
        '/web/js/lightcase.js',
        '/web/js/jquery.easing.1.3.js',
        '/web/js/jquery.plugin.min.js',
        '/web/js/jquery.countdown.min.js',
        '/web/js/tweenmax.min.js',
        '/web/js/jquery.themepunch.tools.min.js',
        '/web/js/jquery.themepunch.revolution.min.js',
        '/web/js/extensions/revolution.extension.actions.min.js',
        '/web/js/extensions/revolution.extension.carousel.min.js',
        '/web/js/extensions/revolution.extension.kenburn.min.js',
        '/web/js/extensions/revolution.extension.layeranimation.min.js',
        '/web/js/extensions/revolution.extension.migration.min.js',
        '/web/js/extensions/revolution.extension.navigation.min.js',
        '/web/js/extensions/revolution.extension.parallax.min.js',
        '/web/js/extensions/revolution.extension.slideanims.min.js',
        '/web/js/extensions/revolution.extension.video.min.js',
        '/web/js/theme.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap5\BootstrapAsset'
    ];
}
