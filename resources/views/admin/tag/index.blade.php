@extends('layouts.main')
@section('title', 'ECSL - 図書検索')
@section('content')
    <div class="container" style="padding-top: 60px;">
        <form method="get">
            <div class="form-group">
                <label for="search">書籍検索</label>
                <input type="text" name="keyword" class="form-control" id="search" placeholder="書籍名">
                <button style="float: right;
        margin: 30px 0;"type="submit" class="text-right btn btn-primary">検索</button>
            </div>
        </form>
    </div>

    <div class="container">
        <table class="table col-xs-3">
            <thead>
                <tr>
                    <th scope="col">書籍名</th>
                    <th scope="col">配置場所</th>
                    <th scope="col">請求記号</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection