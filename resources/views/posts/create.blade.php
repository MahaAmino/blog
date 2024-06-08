@extends('layout.app')
@section("title", "add post")
@section('content')
<div class="left" >
<table class="table table-success table-striped">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Tags</th>
            <th>Show</th>
            <th>Category</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
        <form action="/post" method="POST" enctype="multipart/form-data">
        @csrf
        <td>
            <input type="text" id="tit" name="title">
        </td>
        <td>
            <textarea name="description" id="des" cols="70" rows="3"></textarea>
        </td>

        <td><label for="test">Happiness</label>
            <input type="checkbox" id="test" name="tags[]" value="test">
        <br>
            <label for="test2">Love</label>
            <input type="checkbox" id="test2" name="tags[]" value="test2">
        </td>
        <td>
            <label for="public">Public</label>
            <input type="radio" id="public" name="show" value="public">
            <label for="private">Private</label>
            <input type="radio" id="private" name="show" value="private">
        </td>

        <td>
            <select name="category" >
                <option value="mobile">Mobile</option>
                <option value="discktop">Discktop</option>
            </select>
        </td>
        <td>
            <input type="file" id="img" name="image">
        </td>
        </tbody>
</table>
        <div>
            <button type="submit"  class="btn btn-warning" style="color: rgb(59, 122, 122); font-weight: bolder " >Send </button>
        </div>
    </form>
</div>

@endsection
