<?php namespace App\Controllers;

class Page extends BaseController
{
	public function about()
	{
		return view('about',[
			'title' => 'Halaman About',
			'content' => 'Ini adalah halaman about yang menjelaskan tentang halaman ini.'
			]);
	}
	public function artikel()
	{
		return view('artikel',[
			'title' => 'Halaman Artikel',
			'content' => 'Halaman ini akan berisi artikel.'
			]);

	}
	public function contact()
	{
		return view('contact',[
			'title' => 'Halaman Kontak',
			'content' => 'Ini adalah halaman Kontak yang berisi kontak pembuat.'
			]);
	}

	//--------------------------------------------------------------------

}
