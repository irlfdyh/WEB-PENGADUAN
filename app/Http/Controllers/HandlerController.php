<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Masyarakat;
use App\Petugas;


class HandlerController extends Controller
{
	public function dashboard()
	{
		return view('pages.dashboard');
	}

	public function init()
	{
		// cek jika belum login
		if (Auth::guest()) {
			// jika tidak login
			return redirect()->route('getLogin');
		}else{
			// cek level di table user |petugas|masyarakat
			// jika level = petugas
			if (Auth::user()->level == 'petugas') {
				// cek level di table petugas |petugas|admin

				// jika level di tble petugas == admin
				if (Auth::user()->petugas[0]->level == 'admin') {

					return redirect()->route('dashboard');

				// jika level di tble petugas == petugas
				}else if (Auth::user()->petugas[0]->level == 'petugas'){

					return redirect()->route('dashboard');

				// jika tidak ada level
				}else {
					Auth::logout();
					return redirect()->route('getLogin')->with('msgWarning', 'Terjadi kesalahan dengan Hak Akese');

				}
			// jika level == masyarakat
			}else {
				// ==============================================
				return redirect()->route('landing');
				// ==============================================
			}
		}
	}

	public function landing()
	{
		return view('pages.landing');
	}
}
