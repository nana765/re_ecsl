@extends('layouts.main')

@section('title', 'ECSL 図書登録')
<style>

.pt-50{
    padding-top:50px;
}
.pt-20{
    padding-top:20px;
}
.mt-20{
    margin-top:20px;
}
</style>

@section('content')

<div class="container pt-50">
  {!! Form::open(['url' => 'register/book']) !!}
  
  <div class="form-group">
    <label for="exampleInputEmail1">書籍名</label>
    <input type="text" name="name" class="form-control" id="name">
    
  </div>
  <div class="form-group">
    <label for="place">配置場所</label>
    <input type="text" name="place" class="form-control" id="place">
  </div>
   
  <div class="form-group">
    <label for="symbol">請求記号</label>
    <input type="text" name="symbol" class="form-control" id="symbol">
  </div>
  <div class="form-group">
    <label for="tag1">tag1</label>
    <input type="text" name="tag1" class="form-control" id="tag1">
  </div>
  <div class="form-group">
    <label for="tag2">tag2</label>
    <input type="text" name="tag2" class="form-control" id="tag2">
  </div>
  <div class="form-group">
    <label for="tag3">tag3</label>
    <input type="text" name="tag3" class="form-control" id="tag3">
  </div>
  <div>
  <button type="submit" class="mt-20 btn btn-primary">登録</button>
</div>

@endsection