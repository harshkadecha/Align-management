<?php

namespace App\Http\Controllers;

use App\Models\EmailLogs;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class EmailLogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.email_logs.email-logs-list');
    }

    public function getEmails(Request $request)
    {
        $emails = EmailLogs::latest()->get();

        $data = DataTables::of($emails)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })->editColumn('sent', function ($data) {
            if ($data->created_at) {
                $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d-m-Y H:i:s');
                return $formatedDate;
            } else {
                return "-";
            }
        })
            ->rawColumns(['action'])
            ->make(true);

        return $data;
    }

    public function dateRange($date_range)
    {

        $start_date = substr($date_range, 0, 10);
        $end_date = substr($date_range, -10);

        $formatedDate1 = Carbon::createFromFormat('Y-m-d', $start_date)->format('Y-m-d H:i:s');
        $formatedDate2 = Carbon::createFromFormat('Y-m-d', $end_date)->format('Y-m-d H:i:s');

        $emails = DB::select("SELECT * FROM `email_logs` WHERE `created_at` BETWEEN '$formatedDate1' AND '$formatedDate2'");

        $data = DataTables::of($emails)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })->editColumn('sent', function ($data) {
                if ($data->created_at) {
                    $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d-m-Y H:i:s');
                    return $formatedDate;
                } else {
                    return "-";
                }
            })
            ->rawColumns(['action'])
            ->make(true);
        return $data;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
