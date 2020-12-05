<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
//     protected function showHotel9jaImage($filename){
//    //check image exist or not
//         $exists = Storage::disk('resources')->exists('assets/images/'.$filename);
        
//         if($exists) {
            
//             //get content of image
//             $content = Storage::get('resources/assets/images/'.$filename);
            
//             //get mime type of image
//             $mime = Storage::mimeType('resources/assets/images/'.$filename);
//             //prepare response with image content and response code
//             $response = Response::make($content, 200);
//             //set header 
//             $response->header("Content-Type", $mime);
//             // return response
//             return $response;
//         } else {
//             abort(404);
//         }  
//     }

    
}
