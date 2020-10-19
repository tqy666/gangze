<?php
namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class TextController extends Controller{

    public function test(){

        Redis::set('name', 'guwenjie');
        $values = Redis::get('name');
        dd($values);
    }

}


