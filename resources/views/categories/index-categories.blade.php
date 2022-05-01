@extends('layout')

@section('main')
    <div class="categories-list">
            <h1 style="color: black">Categories List</h1>
            @if(session('status'))
            <p style = "color: lawngreen; text-align:center; font-size: 20px;">{{session('status')}}</p>
            <br>
        @endif
            @foreach ($categories as $category)
            {{-- <div class="item"> --}}
                <p style="color: black">{{$category-> name}}</p>
                {{-- <div>
                    <a href="{{route('categories.edit', $category)}}">Edit</a>
                </div>
                <form action="{{route('categories.destroy', $category)}}" method="post">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Delete">
                </form> --}}
            {{-- </div> --}}
            @endforeach
        <div class="index-categories">
            <a href="{{route('categories.create')}}">Create category<span>&#8594;</span></a>
        </div>
    </div>
@endsection