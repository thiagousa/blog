@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    @foreach($posts as $post)

    <div class="row">

        <div class="col-md-12">
            <h2>{{$post->title}}</h2>
            <p> {{$post->text}}</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>

        <hr>
    </div>
    @endforeach


@endsection

@section('footer')

@endsection