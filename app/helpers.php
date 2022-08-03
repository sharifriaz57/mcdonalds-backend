<?php

use Illuminate\Support\Carbon;

function getApiLink(){
    return "https://mcdonalds-cart-backend.herokuapp.com/";
}

function getProductImgLink(){
    return getApiLink()."assets/images/products/";
}