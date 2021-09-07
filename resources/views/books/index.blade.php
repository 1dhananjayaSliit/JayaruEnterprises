<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@extends('books.layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Books</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('books.create') }}"> Create New Book</a>

            </div>

        </div>

    </div>


    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif


    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Name</th>

            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($books as $book)

            <tr>

                <td>{{ ++$i }}</td>

                <td>{{ $book->name }}</td>

                <td>{{ $book->detail }}</td>

                <td>

                    <form action="{{ route('books.destroy',$book->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>

                        @csrf

                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>

                </td>

            </tr>

        @endforeach

    </table>


@endsection
</body>
</html>
