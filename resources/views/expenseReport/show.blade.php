@extends('layouts.base')

@section('content')

<div class="title m-b-md">
</div>

<div>
    <div class="row">
        <div class="col">
            <h1>Show Reports {{$report->title}} </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/expense_reports" class="btn btn-secondary">Back</a>
        </div>
    </div>
    <div class="row">
        Detalles...
    </div>
            
        </div>
    </div>
</div>

               

@endsection
