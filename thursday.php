<?php
/**
 * 1/ Créer une classe Product avec les champs : 
 *  - name : chaine de caractère
 *  - price : chiffre à virgule
 *  - vatRate : chiffre à virgule
 * 
 * C'est trois champs doivent etre obligatoirement rempli !
 * 
 * 2 / Reprendre le tableau du kata d'hier et créer un nouveau tableau mais
 * qui cette fois contiendra des instances de votre classe product
 * 
 * 3 / Pour tous les produits afficher le prix TTC
 * 
 * 4/ Pour tous les produits afficher le prix TTC dans 6 mois en suivant 
 * les règles d'inflation donné hier
 */

 require 'Product.php';

 $products = [
    ['name' => 'Table', 'price' => 100, 'VAT rate' => 0.20],
    ['name' => 'Chair', 'price' => 68, 'VAT rate' => 0.20],
    ['name' => 'Apple', 'price' => 5, 'VAT rate' => 0.055],
    ['name' => 'Pizza', 'price' => 9, 'VAT rate' => 0.055],
    ['name' => 'Rocket Launcher', 'price' => 7800, 'VAT rate' => 0.20],
    ['name' => 'Computer', 'price' => 850, 'VAT rate' => 0.20],
 ];

 $newProducts = [];

 foreach($products as $product) {
    $newProduct = new Product($product['name'], $product['price'], $product['VAT rate']);
    $newProducts[] = $newProduct;
 }


 foreach($newProducts as $product) {
    echo $product->getName() . ' - ' . $product->getPriceIncludingVAT() . '€ TTC' . PHP_EOL;
 }


echo PHP_EOL;
echo PHP_EOL;

 foreach($newProducts as $product) {
    echo $product->getName() . ' - ' . $product->getPriceIncludingVATWithInflation() . '€ TTC' . PHP_EOL;
 }