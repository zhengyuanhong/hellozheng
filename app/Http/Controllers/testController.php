<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class testController extends Controller{

	public function index(){


		$res = DB::table('user')->get();	

		dd($res);

	}
}
