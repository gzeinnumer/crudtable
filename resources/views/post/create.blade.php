{{--todo 23 test di browser--}}

{{--todo 24--}}
{{--memanggil layout --}}
{{--buat extends dan section saja lalu test browser post/create--}}
@extends('layouts.app')

@section('content')
    {{--todo 25 isi section--}}
    <div class="container">
        {{--todo 32 khusus untuk baris dibawah, kita pakai route yang kita buat tadi, test masukan data ke post dan save--}}
        <form action="{{ route('post.store') }}" class="" method="pots">
            {{--todo 33 menambahkan csrf--}}
            @csrf
            <div class="form-group">
                <label for="">title</label>
                <input type="text" class="form-control" name="title" placeholder="Post Title">
            </div>
            {{--todo 35--}}
            <div class="form-group">
                <label for="">title</label>
                <select name="categori_id" id="" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            {{--isi database categori dengan data dummy--}}
            {{--lalu test dengan browser--}}
            {{--end todo--}}
            <div class="form-group">
                <label for="">Contene</label>
                <textarea name="content" rows="5" class="form-control" placeholder="post Content"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
    </div>
    {{--todo 26 lalu test di browser--}}
@endsection
