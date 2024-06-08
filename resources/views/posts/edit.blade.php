@extends("layout.app")

@section("title","edit post")

@section("content")
@php
$tags=explode(",",$post->tags)
@endphp
<table class="table table-info table-striped" >
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
    <form action="/post/{{ $post->id }}" method="POST" class="form-inline" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <td>
                <input type="text" id="tit" name="title" value="{{ $post->title }}">
            </td>
            <td>
                <textarea name="description" id="des" cols="30" rows="10">{{ $post->description }}</textarea>
            </td>
            <td>
                <img src="/assets/imgs/{{ $post->image }}" alt="" class="img-fluid" alt="" width="100" height="150">
                <input type="file" id="img" name="image">
            </td>
            <td>
                <label for="test">Happiness</label>
                <input type="checkbox" id="test" name="tags[]" value="test"
                @foreach ($tags as $tag )
                    @if ($tag == "test")
                        @checked(true)
                    @endif
                @endforeach>
                <label for="test2">Love</label>
                <input type="checkbox" id="test2" name="tags[]" value="test2"
                @foreach ($tags as $tag )
                    @if ($tag == "test2")
                        @checked(true)
                    @endif
                @endforeach>
            </td>
            <td>
                <label for="public">public</label>
                <input type="radio" id="public" name="show" value="public"
                @if($post->show =="public")
                    @checked(true)
                @endif>
                <label for="private">private</label>
                <input type="radio" id="private" name="show" value="private"
                @if($post->show =="private")
                    @checked(true)
                @endif>
            </td>
            <td>
                <select name="category" >
                    <option value="mobile" @if($post->categories =="mobile") @selected(true) @endif>Mobile </option>
                    <option value="discktop" @if($post->categories =="discktop") @selected(true) @endif>Discktop </option>
                </select>
            </td>
</tbody>
</table>
<br>
    <div class="a">

        <button class="btn btn-warning"  style="color: rgb(59, 122, 122); font-weight: bolder " type="submit" >Send</button>
        <button class="btn btn-warning "><a href="/">Home</a></button>
    </div>

</form>
@endsection

