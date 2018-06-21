@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>素敵なモノと出会える場所</h1>
                <h2>買い物をもっと楽しく</h2>
                @if (!Auth::check())
                <a href="{{ route('signup.get') }}" class="btn btn-warning btn-lg">モノリストをスタート</a>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('content')
     @include('items.items')
    {!! $items->render() !!}
@endsection