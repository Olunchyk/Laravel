<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class EasyController extends Controller
{
    public function index()
    {
        $images= array(1,2,3,4);
        $dirname = 'carousel';
        foreach($images as $k => $v) {
            $images[$k] = $dirname . "/" . $v . ".jpg" ;
        }

        $circles = array(
            'MP4' => array(
                'img' => 'circle/1.png',
                'title' => 'Заголовок',
                'text' => 'MPEG-4 Part 14 or MP4, formally known as ISO / IEC 14496-14: 2003 - media container format, which is part of the MPEG-4 standard. It is used for packing of digital video and audio streams, subtitles, posters and metadata as defined by the MPEG group of experts. Like most modern media container, MPEG-4 Part 14 provides the ability to display video on the Internet, in addition to the file metadata transmitted, containing the necessary information for the broadcast.'

            ),
            'AVI' => array(
                'img' => 'circle/avi.jpg',
                'title' => 'Заголовок2',
                'text' => 'Audio Video Interleave - RIFF-media container, first used by Microsoft in 1992 as a package of Video for Windows.
Format files with the extension AVI can contain video and audio data compressed using different codecs combinations that allows synchronized playback video with sound. AVI file can contain different types of compressed data, depending on which codec is used for encoding / decoding.'
            ),
            'FLV'=> array(
                'img' => 'circle/3.jpg',
                'title' => 'Заголовок3',
                'text' => 'Flash Video (FLV) - a file format, media container used for transfer video through the Internet. Use services such as the video hosting YouTube, Google Video, VKontakte, RuTube and others.
Though the container format description has been opened, codecs are protected by patents and proprietary.'
            )
        );

        $posts = DB::table('posts')
            ->get();

        return view('pages/index', array('slides' =>$images, 'circles' => $circles, 'posts' => $posts));
    }
}