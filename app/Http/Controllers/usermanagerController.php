<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Session;
class usermanagerController extends Controller
{
    public function getList()
    {
    	$data = DB::table('usermanager')->orderBy('id','DESC')->get();
    	return $data;
    }
}
