@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Contenuto</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Azioni</th>
                            <th scope="col"><a href="{{route('admin.posts.create')}}">Crea nuovo post</a></th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($posts as $post)
                           <tr>
                               <td>{{$post->id}}</td>
                               <td>{{$post->title}}</td>
                               <td>{{substring($post->content, 0, 30)}}</td>
                               <td>{{$post->slug}}</td>
                               <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary">Vedi</a>
                               <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-secondary">Modifica</a>
                           </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
