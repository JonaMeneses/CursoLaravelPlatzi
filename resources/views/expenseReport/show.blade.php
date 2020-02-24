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
        <div class="col">
            <h3>Detalles</h3>
            <table class="table">
                @foreach($report->expenses as $expense)
                <tr>
                    <td>{{$expense->description}}</td>
                    <td>{{$expense->created_at}}</td>
                    <td>{{$expense->amount}}</td>
                </tr>
                @endforeach
            </table>
        </div>    
    </div>
    
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense_reports/{{$report->id}}/expenses/create">New Expense</a>
        </div>
    </div>

        </div>
    </div>
</div>

               

@endsection
