<?php

//include_once ROOT.'/models/Category.php';
//include_once ROOT.'/models/Product.php';

class SiteController
{
    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        // Список категорий для левого меню
        $categories = array();
        $categories = Category::getCategoriesList();
        
        // Список последних товаров
        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(3);
        
        // Список товаров для слайдера
        $sliderProducts = array();
        $sliderProducts = Product::getRecommendedProducts();

        // Подключаем вид
        require_once (ROOT.'/views/site/index.php');
        return true;
    }
}

