<?php

namespace App\Controllers;

use \App\Models\WargaModel;

class Warga extends BaseController
{

    protected $wargaModel;
    public function __construct()
    {
        $this->wargaModel = new WargaModel();
    }

	public function index()
	{
        $data = [
            'judul' => 'Data Warga',
            'warga' => $this->wargaModel->getWarga()
        ];

		return view('warga/index',$data);
	}

    public function detail($id)
    {

        $data = [
            'judul' => 'Detail Warga',
            'warga' => $this->wargaModel->getWarga($id)
        ];

        if (empty($data['warga'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Maaf Data Yang Anda Cari Tidak Ditemukan. Mohon Periksa Kembali!');
        }

        return view('warga/detail',$data);
    }

    public function tambahWarga()
    {
        
        $data = [
            'judul' => 'Tambah Data Warga',
            'validasi' => \Config\Services::validation()
        ];
        return view('warga/tambahWarga',$data);
    }

    public function simpanWarga()
    {
        //Validasi dulu yekan....

        if(!$this->validate([
            'nik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib di isi'  
                ]
                ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib di isi'
                ]
                ],
            'jenisKelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Kelamin wajib di isi'
                ]
                ],
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib di isi'
                ]
            ]                    
        ]))
        {
            $validasi = \Config\Services::validation();
            
            return redirect()->to('/warga/tambahWarga')->withInput()->with('validasi', $validasi);
        }

       $this->wargaModel->save([
           'nik' => $this->request->getVar('nik'),
           'namaWarga' => $this->request->getVar('nama'),
           'foto' => '/image/'.$this->request->getVar('foto'),
           'jenisKelamin' => $this->request->getVar('jenisKelamin'),
           'status' => $this->request->getVar('status')
       ]);

        session()->setFlashdata('alert','Data Berhasil Ditambahkan');

       return redirect()->to('/warga');
    }

    public function hapusWarga($id)
    {
        $this->wargaModel->delete($id);

        session()->setFlashdata('alert','Data Berhasil Dihapus');
        return redirect()->to('/warga');
    }
	
}