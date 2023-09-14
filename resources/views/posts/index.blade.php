@extends('layouts.app')

<section class="">
    <h1>Meus Artigos</h1>

    @foreach($posts as $post)
        <article>
            <h1>{{$post->title}}</h1>
            <div class="">{{ $post->content }}</div>
        </article>
    @endforeach
</section>