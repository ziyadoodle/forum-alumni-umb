<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Forum Alumni UMB',
            'alumni' => [
                [
                    'angkatan' => '2016',
                    'jumlah' => '123'
                ],
                [
                    'angkatan' => '2017',
                    'jumlah' => '123'
                ],
                [
                    'angkatan' => '2018',
                    'jumlah' => '123'
                ],
                [
                    'angkatan' => '2019',
                    'jumlah' => '123'
                ]
            ],
        ];

        echo view('pages/home', $data);
    }
}
