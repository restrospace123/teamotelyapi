<?php

namespace App\Http\Controllers\V1;

use Illuminate\Http\Client\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class ApiController extends BaseController
{
    /**
     * Auth Key
     */
    protected $key = 'csv_process';

    /**
     * Process csv request
     */
    public function post(){
        
        if($data = json_decode(request()->post_data)){
            
            if($data->key == md5($this->key)){
                return $this->render($data->data);
            }
        }

        return false;
    }

    /**
     * Form csv HTML
     */
    public function render($data){
        $html = view('table')->with('data', $data);
        return $html;
    }
}
