@extends('reports.layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Add New Report</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('reports.index') }}"> Back</a>

            </div>

        </div>

    </div>


    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    <form action="{{ route('reports.store') }}" method="POST">

        @csrf


        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Bill No:</strong>

                    <input type="text" name="billNo" class="form-control" placeholder=Bill No">

                </div>

            </div>

            <br><br>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Item No:</strong>

                    <input type="text" name="itemNo" class="form-control" placeholder="Item No">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Reason:</strong>

                    <textarea class="form-control" style="height:150px" name="reason" placeholder="Reason"></textarea>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>


    </form>


@endsection
