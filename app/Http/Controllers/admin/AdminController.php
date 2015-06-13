<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller { //AdminBaseController

	public function index(){
        $bodyid = "admin";
        $title = "Admin";
        return view('admin.index', compact('bodyid', 'title'));
    }

}