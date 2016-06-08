@extends('main')
@section('content')
    <div class="container">
        <div class="well">
            <h1>
                {{$post->title}}
            </h1>
            <img src="{{URL::asset($post->photo ? $post->photo : 'image/not_found.png') }}"/>
            <div class="content">
                <p>
                    {!! $post->text !!}
                </p>
            </div>
        </div>
    </div>
@endsection
