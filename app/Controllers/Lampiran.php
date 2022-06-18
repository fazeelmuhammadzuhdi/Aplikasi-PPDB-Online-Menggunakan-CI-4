<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLampiran;

class Lampiran extends BaseController
{
	public function __construct()
	{
		$this->ModelLampiran = new ModelLampiran();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'PPDB Online',
			'subtitle' => 'Lampiran',
			'lampiran' => $this->ModelLampiran->getAllData(),
		];
		return view('admin/v_lampiran', $data);
	}
	public function insertData()
	{
		$data = [
			'lampiran' => $this->request->getPost('lampiran'),
		];

		$this->ModelLampiran->insertData($data);
		session()->setFlashdata('tambah', 'Data Berhasil Ditambahkan !!!');
		return redirect()->to('/lampiran');
	}

	public function editData($id_lampiran)
	{
		$data = [
			'id_lampiran' => $id_lampiran,
			'lampiran' => $this->request->getPost('lampiran'),
		];

		$this->ModelLampiran->editData($data);
		session()->setFlashdata('edit', 'Data Berhasil Diedit !!!');
		return redirect()->to('/lampiran');
	}

	public function deleteData($id_lampiran)
	{
		$data = [
			'id_lampiran' => $id_lampiran,
		];

		$this->ModelLampiran->deleteData($data);
		session()->setFlashdata('delete', 'Data Berhasil DiHapus !!!');
		return redirect()->to('/lampiran');
	}
}