<?php
return array(
    // Товар
    'product/([0-9]+)'=>'product/view/$1', //actionView for ProductController
    // Каталог
    'catalog'=>'catalog/index', //actionIndex for CatalogController
    // Категория товаров
    'category/([0-9]+)/page-([0-9]+)'=>'catalog/category/$1/$2', //actionCategory for CatalogController
    'category/([0-9]+)'=>'catalog/category/$1', //actionCategory for CatalogController
    // Корзина
    'cart/checkout' => 'cart/checkout', // actionAdd в CartController    
    'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete в CartController 
    'cart/add/([0-9]+)' => 'cart/add/$1', //actionAdd for CartController
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', //actionAddAjax for CartController
    'cart' => 'cart/index', // actionIndex for CartController
    // Пользователь
    'user/register' => 'user/register', //actionRegister for UserControler
    'user/login' => 'user/login', //actionLogin for UserControler
    'user/logout' => 'user/logout', ////actionLogout for UserControler
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    // Управление товарами:    
    'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product' => 'adminProduct/index',
    // Управление категориями:    
    'admin/category/create' => 'adminCategory/create',
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    'admin/category' => 'adminCategory/index',
    // Управление заказами:    
    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
    'admin/order' => 'adminOrder/index',
    // Админпанель:
    'admin' => 'admin/index',
    // О магазине
    'contacts' => 'site/contact',
    'about' => 'site/about',
    // Главная страница
    'index.php' => 'site/index', // actionIndex в SiteController
    '' => 'site/index', //actionIndex v SiteController
);