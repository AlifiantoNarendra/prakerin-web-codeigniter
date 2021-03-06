<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{

    protected $bukuModel;
    public function __construct()
    {
        $this->bukuModel  = new BukuModel();
    }

	public function index()
	{

        // $buku       = $this->bukuModel->findAll();

        $data = [
            'title' => 'Daftar Buku',
            'buku'  => $this->bukuModel->getBuku()
        ];

        // koneksi databse tanpa model
        // $db     = \Config\Database::connect();
        // $buku   = $db->query("SELECT * FROM buku");
        // foreach ($buku->getResultArray() as $row ) {
        //     d($row);
        // }

        // $BukuModel  = new \App\Models\BukuModel();
        // $BukuModel  = new BukuModel();

		return view('buku/index', $data);
	}

    public function detail($slug)
    {
        $data = [
            'title' => 'Daftar Buku',
            'buku'  => $this->bukuModel->getBuku($slug)
        ];
        return view('buku/detail', $data);
    }
}
