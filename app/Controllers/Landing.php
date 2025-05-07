<?php

namespace App\Controllers;

class Landing extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        $query = $db->query('SELECT * FROM book ORDER BY created_at DESC');
        $data['books'] = $query->getResultArray();

        return view('landing/index', $data);
    }
}