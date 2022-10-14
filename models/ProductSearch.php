<?php
namespace app\models;

use app\models\Product;
use yii\data\ActiveDataProvider;

class ProductSearch extends Product
{
	public $checkbox_price1, $checkbox_price2, $checkbox_price3,
				$checkbox_price4, $checkbox_price5;

	public $price0, $price1, $price2, $price3, $price4, $price5;

	public function rules()
	{
		return [[['checkbox_price1', 'checkbox_price2', 'checkbox_price3', 'checkbox_price4',
							'checkbox_price5'], 'boolean']];
	}

	public function search($params)
	{
		$query = Product::find();

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
			'pagination' => [
				'pageSize' => 9,
			],
			'sort' => [
				'attributes' => [
					'added_at',
				]
			]
		]);

		$this->load($params);

		if (!$this->validate()) {
			return $dataProvider;
		}

		if ($this->checkbox_price1){
			$price0 = 0;
			$price1 = 100;
		}

		if ($this->checkbox_price2){
			$price1 = 100;
			$price2 = 200;
		}

		if ($this->checkbox_price3){
			$price2 = 200;
			$price3 = 300;
		}

		if ($this->checkbox_price4){
			$price3 = 300;
			$price4 = 400;
		}

		if ($this->checkbox_price5){
			$price4 = 400;
			$price5 = 500;
		}

		$query->andFilterWhere(['OR', ['between', 'product_price', $price0, $price1],
																	['between', 'product_price', $price1, $price2],
																	['between', 'product_price', $price2, $price3],
																	['between', 'product_price', $price3, $price4],
																	['between', 'product_price', $price4, $price5]]);
		
		return $dataProvider;
	}
}