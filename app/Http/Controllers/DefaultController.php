<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Exception;
use Illuminate\Http\Request;

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
}
