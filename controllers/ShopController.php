<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use app\models\ProductSearch;
use Yii;
use yii\data\Pagination;
use yii\data\Sort;
use yii\web\Controller;

class ShopController extends Controller
{

	public function actionIndex()
	{
		$categories = Category::find()->all(); #получение данных из бд
		return $this->render('index', compact('categories'));
	}

	public function actionStore(){
		// $query = Product::find(); #получение данных из бд
		// $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 9]);
		// $products = $query->offset($pages->offset)->limit($pages->limit)->all();

		// return $this->render('shop', compact('products', 'pages'));
		$searchModel = new ProductSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

		$sort = new Sort([
			'attributes' => [
				'added_at' => [
					'desc' => ['added_at' => SORT_DESC],
					'label' => 'Недавние'
				]
			]
		]);

		return $this->render('shop', [
			'searchModel'  => $searchModel,
			'dataProvider' => $dataProvider,
			'sort' => $sort,
		]);
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