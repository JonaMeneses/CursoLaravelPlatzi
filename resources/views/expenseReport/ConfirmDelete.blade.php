@extends('layouts.base')

@section('content')

<div class="title m-b-md">
    Expense Report
</div>

<div>
    <div class="row">
        <div class="col">
            <h1>Delete Report {{$report->title}} </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/expense_reports" class="btn btn-secondary">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="/expense_reports/{{$report->id}}" method="POST">
            @csrf
            @method('delete')
               <button class="btn btn-primary" Type="submit">Delete</button>
            </form>
        </div>
    </div>
            
        </div>
    </div>
</div>

               

@endsection
