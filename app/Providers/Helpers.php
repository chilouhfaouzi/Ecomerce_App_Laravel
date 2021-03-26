<?php

use App\Models\Order;
use App\Models\Product;

function getPrice($priceDecimal)
{
    $price = floatval($priceDecimal) / 100;
    return '$' . number_format($price, 2, ',', ' ');
}

function getProduct($id_product)
{
    $product = Product::where('id', $id_product)->first();
    return $product;
}

function getOrdersCount($id_user)
{
    $count = Order::where('user_id', $id_user)->get()->count();
    return $count;
}


function compareDate($date_order)
{
    $today = date('y-m-d');
    $dateShipping = date('y-m-d', strtotime('+1 day', strtotime($date_order)));
    $dateDelevring = date('y-m-d', strtotime('+7 day', strtotime($date_order)));

    if ($today < $dateShipping) {
        $html_to_return = '&lt;span class=&quot;manage-o__badge badge--processing&quot;&gt;Processing&lt;/span&gt;';
    } else if ($today > $dateShipping && $today < $dateDelevring) {
        $html_to_return = '&lt;span class=&quot;manage-o__badge badge--shipped&quot;&gt;Shipped&lt;/span&gt;';
    } else {
        $html_to_return =  '&lt;span class=&quot;manage-o__badge badge--delivered&quot;&gt;Delivered&lt;/span&gt;';
    }
    echo html_entity_decode($html_to_return);
}