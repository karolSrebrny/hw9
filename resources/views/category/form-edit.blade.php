@extends('layout')

@section('content')
    <form action="/category/{{ $category->id }}/edit" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $category->title }}">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $category->slug }}">
        </div>

        <div class="mb-3">
            <input type="submit" class="btn btn-primary mb-3" value="Save" />
        </div>
    </form>
@endSection