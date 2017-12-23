@extends('layouts.master')
@section('title')
@endsection
@section('content')
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What do you have to say?</h3></header>
            <form action="">
                <div class="form-group">
                    <textarea name="new-post" id="new-post" rows="5" class="form-control"
                              placeholder="Your Post"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </section>
    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What other people say...</h3></header>
            <article class="post">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore modi nesciunt numquam officia quam
                    quos, similique soluta ullam voluptates? Aspernatur in molestias natus numquam reiciendis
                    voluptates. Assumenda, nisi sequi! Provident.</p>
                <div class="info">
                    Posted by Max on 12 Feb 2016
                </div>
                <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a>
                </div>
            </article>
            <article class="post">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore modi nesciunt numquam officia quam
                    quos, similique soluta ullam voluptates? Aspernatur in molestias natus numquam reiciendis
                    voluptates. Assumenda, nisi sequi! Provident.</p>
                <div class="info">
                    Posted by Max on 12 Feb 2016
                </div>
                <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a>
                </div>
            </article>
        </div>
    </section>
@endsection