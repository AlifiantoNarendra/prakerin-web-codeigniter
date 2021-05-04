<?php

namespace App\Controllers;

class Company extends BaseController
{
	public function index()
	{
        $data = [
            'title' => 'Company Profile',
            'buku'  => $this->bukuModel->getBuku()
        ];

		return view('company/index', $data);
	}
}
