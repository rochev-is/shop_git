<?php

namespace app\controllers;
use yii\web\Controller;

class ShopController extends Controller
{
	public function actionIndex()
	{
		return $this->render('index');
	}

	public function actionStore(){
		return $this->render('shop');
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