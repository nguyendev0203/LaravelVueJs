@extends('layouts.app')

@section('title','- Creating memories, one experience at a time')

@section('content')
<h1>Categories</h1>
<category-manager :initial-categories="{{ $categories }}"></category-manager>
@endsection