@extends('blog::layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">My Blogs</div>

                    <div class="panel-body">
                        @if(session()->has('deleted'))
                            @if(session('deleted') == true)
                                <div class="alert alert-warning alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    The blog was deleted!
                                </div>
                            @endif
                        @endif
                        @foreach($blogs as $blog)
                            <article>
                                <h4>
                                    <a href="{{ $blog->path() }}">
                                        {{ $blog->title }}
                                    </a>
                                </h4>
                                <div class="body">{{ $blog->body }}</div>
                                <hr>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection