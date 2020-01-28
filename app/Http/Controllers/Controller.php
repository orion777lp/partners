<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

include_once('my_data.php');

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	 /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function ajaxRequest()

    {

        return view('ajaxRequest');

    }

   

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function ajaxRequestPost(Request $request)

    {

        $input = $request->data;

        $data = new my_data();

        $data = $data->get_data();

        if($input){

            $result = array();

            foreach ($data as  $key=>$val){

              if (strpos(mb_strtolower ($val), mb_strtolower ($input))!==false){

                $result[] = $val;

              }

            }

        }else{

            $result = $data;

        }

        return response()->json($result);

    }

    public function module(){

        $data = new my_data();

        $data = $data->get_data();       

        return view('module',
            [
                'data' => $data
            ]
    
        );

    }
	
}
