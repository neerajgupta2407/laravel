<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
public function about()
{
$data = array('name' => '<a>neeraj1</a>');
return view('pages.about',$data);
}

}
