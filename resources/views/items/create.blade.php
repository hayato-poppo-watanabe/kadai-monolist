@extends('layouts.app')

@section('content')
    <div class="search">
        <div class="row">
            <div class="text-center">
                {!! Form::open(['route' => 'items.create', 'method' => 'get', 'class' => 'form-inline']) !!}
                    <div class="form-group">
                        {!! Form::text('keyword', $keyword, ['class' => 'form-control input-lg', 'placeholder' => 'キーワードを入力', 'size' => 40]) !!}
                    </div>
                    {!! Form::submit('商品を探す', ['class' => 'btn btn-warning btn-lg']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    @include('items.items', ['items' => $items])
@endsection