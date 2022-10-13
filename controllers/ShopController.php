<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use yii\data\Pagination;
use yii\web\Controller;

class ShopController extends Controller
{

	public function actionIndex()
	{
		$categories = Category::find()->all(); #получение данных из бд
		return $this->render('index', compact('categories'));
	}

	public function actionStore(){
		$query = Product::find(); #получение данных из бд
		$pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 9]);
		$products = $query->offset($pages->offset)->limit($pages->limit)->all();

		return $this->render('shop', compact('products', 'pages'));
	}

	public function actionDetail(){
		return $this->render('detail');
	}

	public function actionCart(){
		return $this->render('cart');
	}

	public function actionCheckout(){
		return $this->render('checkout');
	}

	public function actionContact(){
		return $this->render('contact');
	}
}