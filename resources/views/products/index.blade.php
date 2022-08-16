@extends('layouts.main')

@section('title','ヘッダー')

@section('content')
  <p>コンテンツ</p>
  <ul>
    <li>aaa</li>
    <li>bbb</li>
  </ul>
@endsection

@section('side')
  @parent
  <ul>
    <li>ccc</li>
    <li>ddd</li>
  </ul>
@endsection