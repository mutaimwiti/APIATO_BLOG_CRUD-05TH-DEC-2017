@extends('blog::layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create blog</div>
                    <div class="panel-body">
                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                The blog was created successfully
                            </div>
                        @endif
                        <form class="form" method="post" action="{{ route('web_blog_store') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label">Title</label>
                                <input name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Body</label>
                                <textarea name="body" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Create" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection