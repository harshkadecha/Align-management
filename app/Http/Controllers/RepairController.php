<?php

namespace App\Http\Controllers;

use App\Models\EmailLogs;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class RepairController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return route('repairs');
    }
    public function imgUpload(Request $request)
    {
        try {
            $data = $request->all();

            $file = $request->file('file');
            $path = storage_path() . '/app/public/image/repair-requests/';
            if (!Storage::exists($path)) {
                Storage::makeDirectory($path);
            }

            $path = storage_path() . '/app/public/image/repair-requests/';
            $fileName = $file->getClientOriginalName();
            $file->move($path, $fileName);

            return $data;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function removeUploads(Request $request)
    {
        try {

            $oldImage = storage_path() . '/app/public/image/repair-requests/' . $request->name;
            if (file_exists($oldImage)) {
                unlink($oldImage);
                Log::info("Old Image deleted : " . $oldImage);
            } else {
                return $request->name;
            }
            return $request->name;
        } catch (Exception $e) {
            return $e->getMessage();
        }
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
        try {

            $data1 = $request->all();
            $data1 = $data1['data'];

            $html = view('email-template.index', compact('data1'))->render();

            $data = [];
            $data += array('to' => $data1['email']);
            // $data += array('to' => 'support@alignmgmtny.com');
            $data += array('from' => env('MAIL_FROM_ADDRESS'));
            $data += array('subject' => 'Repair Request');
            $data += array('body' => $html);
            $email = new EmailLogs;
            $email->SaveData($data, true);

            return true;



        } catch (Exception $e) {
            $response = [
                'status' => false,
                'message' => 'Error : ' . $e->getMessage(),
                'data' => [],
            ];

            return $response;
        }
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
