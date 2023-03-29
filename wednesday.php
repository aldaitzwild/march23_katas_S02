<?php
/**
 *  1 / Utilisez le tableau suivant pour afficher la liste des produits (1 par ligne),
 *  en affichant le prix TTC pour chaque produit. 
 * Exemple :
 * 
 * Table - 120€ TTC
 * Chair - 81.60€ TTC
 * ...
 * 
 * 2 / L'inflation galopante tends à faire grimper les prix !
 *    Les experts estiment que dans 6 mois les articles de moins 200€
 *    auront augmenter de 15%, et ceux de plus de 200€ de 25%.
 *   Affichez la liste des produits avec les prix TTC prévus dans 6 mois.
 */

 $products = [
    ['name' => 'Table', 'price' => 100, 'VAT rate' => 0.20],
    ['name' => 'Chair', 'price' => 68, 'VAT rate' => 0.20],
    ['name' => 'Apple', 'price' => 5, 'VAT rate' => 0.055],
    ['name' => 'Pizza', 'price' => 9, 'VAT rate' => 0.055],
    ['name' => 'Rocket Launcher', 'price' => 7800, 'VAT rate' => 0.20],
    ['name' => 'Computer', 'price' => 850, 'VAT rate' => 0.20],
 ];