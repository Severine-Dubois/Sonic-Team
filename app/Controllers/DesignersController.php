<?php

namespace sonic\Controllers;

class DesignersController extends CoreController
{
    public function designers() 
    {

        $designers = [
            1 => [
            'name' => 'Hirokazu Yasuhara',
            'in_japanese' => "安原 広和",
            'url' => "https://fr.wikipedia.org/wiki/Hirokazu_Yasuhara",
            'picture' => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Hirokazu_yasuhara_gdc_2018.jpg/260px-Hirokazu_yasuhara_gdc_2018.jpg",
            ],

            2 => [
            'name' => 'Yuji Naka',
            'in_japanese' => "中裕司",
            'url' => "https://fr.wikipedia.org/wiki/Yuji_Naka",
            'picture' => "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Yuji_Naka%27_-_Magic_-_Monaco_-_2015-03-21-_P1030036_%28cropped%29.jpg/260px-Yuji_Naka%27_-_Magic_-_Monaco_-_2015-03-21-_P1030036_%28cropped%29.jpg",
            ],

            3 => [
            'name' => 'Naoto Ōshima',
            'in_japanese' => "大島 直人",
            'url' => "https://fr.wikipedia.org/wiki/Naoto_%C5%8Cshima",
            'picture' => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Naoto_ohshima_gdc_2018.jpg/260px-Naoto_ohshima_gdc_2018.jpg",
            ],

        ];

        $data = [
            'page_title' => 'Ceux qui ont fait Sonic',
            'designers' => $designers,
        ];

        $this->show('designers', $data);
    }
}