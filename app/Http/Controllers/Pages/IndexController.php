<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response; //use for download CV response

class IndexController extends Controller
{
    //Landing Page - Begin
	public function index(Request $request){   

    	return view('pages.index');
    }
    //Landing Page - End

    //Download CV - Begin
    public function download(){   
    	//PDF file is stored under project/public/download/info.pdf
	    $file= public_path(). "/download/CV.pdf";

	    $headers = array(
	              'Content-Type: application/pdf',
	            );

	    return Response::download($file, 'CV - Jayvee Paul Saludario.pdf', $headers);
    }
    //Download CV - End
    
}
