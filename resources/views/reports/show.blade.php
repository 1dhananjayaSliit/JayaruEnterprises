@extends('reports.layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Report</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('reports.index') }}"> Back</a>

            </div>

        </div>

    </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Bill No:</strong>

                {{ $report->billNo }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Item No:</strong>

                {{ $report->itemNo }}

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Reason:</strong>

                    {{ $report->reason }}

                </div>

            </div>

        </div>

    </div>

@endsection
