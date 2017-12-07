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
                            @if( count($blogs) )
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blogs as $blog)
                                        <tr>
                                            <td>
                                                <a href="{{ $blog->path() }}">{{ $blog->title }}</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $blogs->links() }}
                            @else
                                <div class="alert alert-danger">
                                    There are no relevant results currently!
                                </div>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection