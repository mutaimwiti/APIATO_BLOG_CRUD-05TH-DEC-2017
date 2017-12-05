@extends('blog::layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Blogs</div>

                    <div class="panel-body">
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
