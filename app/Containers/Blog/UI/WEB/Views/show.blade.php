@extends('blog::layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $blog->title }}</div>
                    <div class="panel-body">{{ $blog->body }}</div>
                </div>
                @if( $blog->user->id == Auth::user()->id )
                    <div class="row">
                        <div class="col-md-1">
                            <a href=" {{ route('web_blog_edit', ['id' => $blog->id]) }}"
                               class="btn btn-primary">Edit</a>
                        </div>
                        <div class="col-md-1">
                            <form action="{{ route('web_blog_delete', ['id' => $blog->id]) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <input name="" type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
