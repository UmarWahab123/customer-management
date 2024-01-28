<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App;

use App\Models\Slider\Slider;

use App\Models\Product\Product;

use App\Models\User;

use App\Http\Requests;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller

{ 
  public function home()
  {
      $data['product'] = Product::get();
      $data['slider'] = Slider::get()->take(8);
      $data['business'] = User::where('role_id',3)->take(6)->get();
      $response = array('status'=>1,'product'=>$data['product'],'slider'=>$data['slider'],'businesses'=>$data['business']);
      return json_encode($response);
  }


}

?>