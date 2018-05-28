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
    <label>tag1</label>
    <select class="selectpicker form-control" name="tag1">
      <option value="0">タグを登録しない</option>
      @foreach ($tags as $tag)
          <option value="{{ $tag->id }}">{{ $tag->name }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label>tag2</label>
    <select class="selectpicker form-control" name="tag2">
      <option value="0">タグを登録しない</option>
      @foreach ($tags as $tag)
          <option value="{{ $tag->id }}">{{ $tag->name }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label>tag3</label>
    <select class="selectpicker form-control" name="tag3">
      <option value="0">タグを登録しない</option>
      @foreach ($tags as $tag)
          <option value="{{ $tag->id }}">{{ $tag->name }}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="mt-20 btn btn-primary">申請</button>
</div>

@endsection