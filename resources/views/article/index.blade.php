@extends('layouts.app1')

@section('content')



<div class="container">

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="clearfix">
                <span class="panel-title">Article</span>
                <a href="{{route('article.create')}}" class="btn btn-success pull-right">Create</a>
            </div>
        </div>

        <div class="panel-body">
            @if($articles->count())
            <table class="table tabe-striped">
                <thead>
                    <th>Article No.</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th colspan="2">Created At</th>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                    <tr>
                       
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->content}}</td>
                        <td>{{$article->created_at->diffForHumans()}}</td>
                        <td>

                            <a href="{{route('article.show',$article)}}" class="btn btn-default btn-sm">show</a>
                            @can('update',$article)
                            <a href="{{route('article.edit',$article)}}" class="btn btn-success btn-sm">edit</a>
                            @endcan
                            @can('delete',$article)
                            <a href="{{route('article.destroy',$article)}}" class="btn btn-danger btn-sm">delete</a>
                            @endcan
                        </td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="article-empty">
                <p class="article-empty-title">
                    No Articles were created.
                    <a href="{{route('article.create')}}" class="btn btn-success pull-right">Create</a>
                </p>
            </div>
            @endif
        </div>
    </div>
</div>
</div>
</div>
@endsection
