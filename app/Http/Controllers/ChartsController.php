<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ChartsController extends Controller
{
    public function index ()
    {
        $image = array(1, 2, 3, 4);
        $dirname = 'carousel';
        foreach ( $image as $k=>$v) {
            $image[$k] = $dirname . "/" . $v . ".jpg";
        }

        return view('pages/addCharts', array('slides'=>$image));
    }
    public function addCharts () {

    }

}
