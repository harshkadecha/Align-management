<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DefaultController extends Controller
{
    public function testimonial(Request $request)
    {
        try{

            $data = $request->all();
            $message = $data['testimonial'];

            $testimonial = new Testimonial;
            $testimonial->message = $message;
            $save = $testimonial->save();


            if($save){
                $response = [
                    'status' => true,
                    'message' => 'Thank You For Your Response...',
                    'data' => []
                ];

            }else{
                $response = [
                    'status' => false,
                    'message' => 'Something went wrong...',
                    'data' => [$data]
                ];
            }

            return $response;

        }catch(Exception $e){
            $response = [
                'status' => false,
                'message' => 'Error : '. $e->getMessage(),
                'data' => []
            ];

            return $response;
        }
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    function adminEdit()
    {

        // return Auth::user();
        $userData = Auth::user();
        return view('auth.edit', compact('userData'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    function adminUpdate(Request $request)
    {

        //return $request;

        $user = Auth::user();
        // $user->email = $request->email;
        // $user->name = $request->name;
        $user->password = Hash::make($request->pass);
        $user->save();
        $userData = Auth::user();
        $response = [
            'status' => true,
            'message' => 'Password changed Successfully',
            'data' => [$request->pass],
        ];
        return $response;
    }

    function resetpassword1(Request $request)
    {

        $pass = $request->pass;
        if (!(Hash::check($request->pass, Auth::user()->password))) {
            $response = [
                'status' => false,
                'message' => 'Error: Password not match',
                'data' => [$request->pass],
            ];
            return $response;
        } else {
            $response = [
                'status' => true,
                'message' => 'Password matched',
                'data' => []
            ];
            return $response;
        }
    }
}
