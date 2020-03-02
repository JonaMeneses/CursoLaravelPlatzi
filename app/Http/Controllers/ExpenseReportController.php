<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use App\ExpenseReport;



class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('expenseReport.index',[
            'expenseReports' => ExpenseReport::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenseReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validaData = $request->validate([
            'title'=>'required|min:3'
        ]);
        $report = new ExpenseReport();
        $report->title = $validaData['title'];
        $report->save();

        return redirect('/Expense_Reports');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseReport $expenseReport)
    {
        $report = ExpenseReport::findorfail($expenseReport);

        return view('expenseReport.show',['report'=>$expenseReport]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = ExpenseReport::find($id);

        return view('expenseReport.Edit',['report' => $report]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $report = ExpenseReport::find($id);
        $validaData=$request->validate([
            'title'=>'required|min:3'
        ]);

        $report->title = $validaData['title'];
        $report->save();

        return redirect('/expense_reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = ExpenseReport::find($id);
        $report->delete();

        return redirect('/expense_reports');
    }

    public function ConfirmDelete($id)
    {
        $report = ExpenseReport::find($id);
        return view('expenseReport.ConfirmDelete',['report' => $report]);
    }

    public function ConfirmSendMail($id)
    {
        $report = ExpenseReport::find($id);
        return view('expenseReport.confirmSendMail',
            ['report' => $report]);
    }

    public function sendMail(Request $request, $id)
    {
        $report = ExpenseReport::find($id);
        Mail::to($request->get('email'))->send(new SummaryReport($report));

        return redirect('/expenseReports', $id);
    }
}
