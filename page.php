<?php

namespace App\Controllers;

class page extends BaseController
{
    public function about()
    {
        echo "about page";
    }

    public function contact()
    {
        echo "contact page";
    }

    public function faqs()
    {
        echo "faqs page";
    }

    public function tos()
    {
        echo "Halaman Term Of Service";
    }

    public function biodata()
    {
        echo "Nama:Bayu Ardian";
        echo "TTL:100?";
        echo "Hobi:Turu";
    }
}
