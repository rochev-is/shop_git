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
        'css/site.css',
				'https://fonts.gstatic.com',
				'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap',
				'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css',
				'lib/animate/animate.min.css',
				'lib/owlcarousel/assets/owl.carousel.min.css',
				'css/style.css'
    ];
    public $js = [
			'https://code.jquery.com/jquery-3.4.1.min.js',
			'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js',
			'lib/easing/easing.min.js',
			'lib/owlcarousel/owl.carousel.min.js',
			'mail/jqBootstrapValidation.min.js',
			'mail/contact.js',
			'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}
