@extends('main')
@section('content')
    @include('includes.carousel')
<div class="container">
    <div class="container marketing">
        <div class="row">
            <h1>{{ Session::get('success') }} </h1>
            @foreach($circles as $title=>$circle)
                <div class="col-lg-4">
                    <img class="img-circle" src="{{ URL::asset('/image/' . $circle['img']) }}" alt="Generic placeholder image" width="140" height="140"/>
                    <h2>{{ $title }}</h2>
                    <p>{{  $circle['text']}}</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            @endforeach
        </div><!-- /.col-lg-4 -->
        @foreach($posts as $key => $post)
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 {{ $key % 2 === 0 ? 'col-md-push-5' : '' }}">
                    <img class="img" src="{{ URL::asset( $post->photo ) }}">
                    <h2 class="featurette-heading">{{  $post->title }}</h2>
                    <p class="lead">{{ $post->text }}</p>
                </div>
                <div class="col-md-5 {{ $key % 2 === 0 ? 'col-md-pull-7' : '' }}">
                    <a href="{{URL::asset('post/' . $post->id)}}">
                        <!--<img class="featurette-image img-responsive center-block" src="{{ URL::asset($post->photo ? $post->photo : 'image/not_found.png') }}" alt="Generic placeholder image">-->
                    </a>
                </div>
            </div>
    @endforeach
</div>
@endsection