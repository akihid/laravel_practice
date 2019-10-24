@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection


@section('content')
  <p>本文のコンテンツ</p>
  <p>必要なだけ記述可能</p>

  <p>Controller value<br>'message' = {{$message}}</p>
  <p>ViewComposer value<br>'view_message' = {{$view_message}}</p>


@endsection

@section('footer')
  Copyright 2017
@endsection