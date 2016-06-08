@extends('main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="form-horizontal">
                @if(session('status'))
                    <div class="alert alert-danger">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ URL::asset('addChannel')}}" method="post">
                    <div class="form-group">
                        <label class="col-md-2">Name channel</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2">Text</label>
                        <div class="col-md-10">
                            <textarea class="form-control" id="post-text" name="text"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2">Upload photo</label>
                        <div class="col-md-10">
                            <div id="dragndrop">
                                <span>Drag your image there!</span>
                            </div>
                            <img width="250" height="250" style="display: none;">
                        </div>
                    </div>
                    <input type="hidden" name="photo">
                    <button class="btn btn-primary pull-right">Submit</button>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
@endsection