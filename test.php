<?php

    // De un arreglo de n numeros saber cual es el mejor profit dependiendo de que la posicion es el dia en el que se puede comprar y vender la accion

    function searchProfit($prices){
        $minBoughtPrice = min($prices);

        $pricesWhenBought = array_slice($prices, intval(array_keys($prices, $minBoughtPrice)),count($prices));

        if(count($pricesWhenBought) == 1) return 0;

        $maxSellPrice = max($pricesWhenBought);
        
        return $maxSellPrice - $minBoughtPrice;
    }


    $prices = [4,1,3,7,9,4,2,3,4,5,25];
    $prices2 = [3,1,2,65,8,6,9,100];
    $prices3 = [20,2,100,3,1000];
    $prices4 = [4,1,4,3,2,1,10,100,1];


    print(searchProfit($prices4)."\n");
?>