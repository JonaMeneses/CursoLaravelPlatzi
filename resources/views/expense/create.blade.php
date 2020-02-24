@extends('layouts.base')

@section('content')

<div class="title m-b-md">
    Expense Report
</div>

<div>
    <div class="row">
        <div class="col">
            <h1>New Expense</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/expense_reports/{{$report->id}}" class="btn btn-secondary">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>

        @endif
            <form action="/expense_reports/{{$report->id}}/expenses" method="POST">
            @csrf
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Type a description" value="{{old('title')}}">    
                </div>
                <div class="form-group">
                    <label for="amount">Amount:</label>
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Type an amount" value="{{old('title')}}">    
                </div>
                <button class="btn btn-primary" Type="submit">Submit</button>
            </form>
        </div>
    </div>
            
        </div>
    </div>
</div>

               

@endsection
