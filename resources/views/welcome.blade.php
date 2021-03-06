@extends('layout')

@section('header')
<!-- header -->
<header class="header" style = "background-image: url({{asset("images/mainpage.jpg")}});">
        <div class="header-text">
          <h1>Video Game Blog</h1>
          
        </div>
        <div class="overlay"></div>
      </header>

@endsection

@section('main')
      <!-- main -->
      <main class="container">
        <h2 class="header-title">Latest Blog Posts</h2>
        <section class="cards-blog latest-blog">
          @foreach($posts as $post)
        <div class="card-blog-content">
          <h4>
            <a href="{{route('blog.show', $post)}}"> {{$post-> title}}</a>
          </h4>
          <img src="{{asset($post->imagePath)}}" alt="image" />
          {{-- <img src="{{asset('images/diablo.jpg')}}" alt="image" --}}
          <p>
            {{$post-> created_at-> diffForHumans()}}
            <span>Written By  {{$post-> user-> name}}</span>
          </p>
          {{-- <h4>
            <a href="{{route('blog.show', $post)}}"> {{$post-> title}}</a>
          </h4> --}}
        </div>
        @endforeach
        </section>
      </main>

@endsection