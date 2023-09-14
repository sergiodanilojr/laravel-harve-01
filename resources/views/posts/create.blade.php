@extends('layouts.app')

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="">
        <label for="">Título</label>
        <input type="text" name="title">
    </div>
    <div class="">
        <label for="">URL</label>
        <input type="text" name="slug">
    </div>
    <div class="">
        <label for="">Conteúdo</label>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="">
        <button class="">Criar Publicação</button>
    </div>
</form>