<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getServices() {
    return lireCSV("services.csv");
}

function getSites() {
    return lireCSV("sites.csv", ',');
}

function lireCSV($fic,$sep=';') {
    $retour = array();
    if (($handle = fopen($fic, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, $sep)) !== FALSE) {
            $retour[] = $data[0];
        }
    }
    return $retour;
}
