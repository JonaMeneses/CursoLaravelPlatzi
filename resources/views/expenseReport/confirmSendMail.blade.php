@extends('layouts.base')

@section('content')

<div class="title m-b-md">
    Expense Report
</div>

<div>
    <div class="row">
        <div class="col">
            <h1>Send Reports</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/expense_reports" class="btn btn-secondary">Back</a>
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
            <form action="/expense_reports/{{$report->id}}/sendMail" method="POST">
            @csrf
                <div class="form-group">
                    <label for="Email">Email:</label>
                    <input type="text" class="form-control" id="Email" name="Email" placeholder="Type a Email" value="{{old('Email')}}">    
                </div>
                <button class="btn btn-primary" Type="submit">Send mail</button>
            </form>
        </div>
    </div>
            
        </div>
    </div>
</div>

               

@endsection
