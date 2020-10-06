<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo 'Ini Controller Coba method index';
    }

    public function about($nama = '')
    {
        echo "Halo, nama saya $nama.";
    }


    //--------------------------------------------------------------------

}
