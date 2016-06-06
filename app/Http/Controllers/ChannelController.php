<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Channel;


class ChannelController extends Controller
{
    public function index ()
    {
        $image = array(1, 2, 3, 4);
        $dirname = 'carousel';
        foreach ( $image as $k=>$v) {
            $image[$k] = $dirname . "/" . $v . ".jpg";
        }

        return view('pages/addChannel', array('slides'=>$image));
    }
    public function addChannel(Request $request)
    {
        $title = $request->title;
        $text = $request->text;

        $channels = new Channel();
        $channels->title = $title;
        $channels->text = $text;
        $channels->created_at = date('Y-m-d H:i:s', time());
        $channels->updated_at = date('Y-m-d H:i:s', time());
        $channels->save();

        if($channels->save())
            return redirect('/')->with('success', 'Cool!!!');
        else
            return redirect('/')->with('success', 'Error!!!');
    }
}
