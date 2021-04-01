<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
        $data = [
            'judul' => 'Home'
        ];
        
		return view('pages/home',$data);
        
	}

    public function about()
    {
        $data = [
            'judul' => 'About Me'
        ];
        
        return view('pages/about',$data);
        
    }
    public function kontak()
    {
        $data = [
            'judul' => 'Kontak Saya'
        ];
        return view('pages/kontak',$data);
    }
	
}
