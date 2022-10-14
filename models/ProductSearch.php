<?php
namespace app\models;

use app\models\Product;
use yii\data\ActiveDataProvider;

class ProductSearch extends Product
{
	public $checkbox_price1, $checkbox_price2, $checkbox_price3,
				$checkbox_price4, $checkbox_price5;

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


		// $query->andFilterWhere(['OR', ['between', 'product_price', 0, 100]]);
		return $dataProvider;
	}
}