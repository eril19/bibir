@extends('master')

@section('Judul')
 Home
@endsection

@section('isiTabel')
<table class="table table-hover">
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($nilai as $value => $nilaii)
    <tr>
        <th> <a href=""> {{$nilaii -> title}} </a> </th>
        <th> {{$nilaii -> author}} </th>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection