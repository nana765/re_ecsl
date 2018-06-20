@extends('layouts.main')
@section('title', 'ECSL - 図書検索')
@section('content')
    <div class="container">
        <form method="get">
            <div class="row">
                <div class="col-xs-3" style="width:95%; margin:auto;padding-top:70px;">
                    <div class="form-group">
                    <select class="selectpicker form-control" name="tag_id">
                        <option value="">タグを選択して下さい</option>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
            </div>
            <button style="float:right;margin:30px 0;"type="submit" class="text-right btn btn-primary">検索</button>
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
                @foreach ($books as $book)
                    <tr>
                        <td class="first">{{ $book->name }}</td>
                        <td>{{ $book->place }}</td>
                        <td>{{ $book->symbol }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        <div class="text-center">
            {{ $books->links() }}
        </div>
    </div>
@endsection