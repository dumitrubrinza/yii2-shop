<?php
namespace albertgeeca\shop\frontend\widgets;

use albertgeeca\shop\common\entities\Product;
use albertgeeca\shop\common\entities\RelatedProduct;
use yii\base\Widget;

/**
 * @author Albert Gainutdinov <xalbert.einsteinx@gmail.com>
 *
 * Example:
 * <?= \albertgeeca\shop\frontend\widgets\RelatedProducts::widget(['productId' => [$product->id]]); ?>
 */
class RelatedProducts extends Widget
{

    /**
     * @var integer|array
     */
    public $productId;

    public function init()
    {

    }

    public function run()
    {
        parent::run();

        $relatedProducts = (is_array($this->productId)) ?
            Product::find()->joinWith('relatedProductsWhereItRelated')
                ->where(['in', 'shop_related_product.product_id', $this->productId])->andWhere(['show' => true])->all() :
            Product::find()->joinWith('relatedProductsWhereItRelated')
                ->where(['shop_related_product.product_id' => $this->productId])->andWhere(['show' => true])->all();


        return $this->render('_products',
            [
                'products' => $relatedProducts
            ]);

    }
}