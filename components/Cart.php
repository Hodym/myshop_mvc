<?php

class Cart 
{
    
    public static function addProduct($id)
    {
        $id = intval($id);
        
        // Пустой масив для товаров в корзине
        $productsInCart = array();
        
        // Если в корзине уже есть товары (они хранятся в сессии)
        if (isset($_SESSION['products'])) {
            // То заполним наш массив товарами
            $productsInCart = $_SESSION['products'];
        }
        
        // Если товар есть в корзине, но бил добавлен еще раз, увеличить количество
        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id] ++;
        } else {
            // Добавляем новий товар в корзину
            $productsInCart[$id] = 1;
        }
        
        $_SESSION['products'] = $productsInCart;
        // для отладки  echo '<pre>';        print_r($_SESSION['products']); die();
        
        return self::countItems();
    }
    
    /**
     * Подсчет количества товаров в корзине (в сессии)
     * @return int
     */
    public static function countItems()
    {
        if (isset ($_SESSION['products'])) {
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }
    
    // Получаем список продуктов в корзине
    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }
    
    // Получаем сумму стоимости товаров в корзине
    public static function getTotalPrice($products)
    {
        $productsInCart = self::getProducts();
        
        if ($productsInCart) {
            $total = 0;
            foreach ($products as $item) {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }
        
        return $total;
    }
    /**
     * Очищаем корзину
     */
    public static function clear() 
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }

    



    /**
     * Удаляет товар с указанным id из корзины
     * @param integer $id <p>id товара</p>
     */
    public static function deleteProduct($id)
    {
        // Получаем массив с идентификаторами и количеством товаров в корзине
        $productsInCart = self::getProducts();

        // Удаляем из массива элемент с указанным id
        unset($productsInCart[$id]);

        // Записываем массив товаров с удаленным элементом в сессию
        $_SESSION['products'] = $productsInCart;
    }
    
    
}

