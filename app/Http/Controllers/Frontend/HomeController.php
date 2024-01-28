<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App;

use App\Models\Customer\Customer;

use App\Models\Customer\CustomerItem;

use App\Models\Description\Description;


use App\Http\Requests;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;
use Mail;

class HomeController extends Controller

{ 

    public function home()
    {
        $data['results'] =  Customer::get();
    	$data['description'] =  Description::get();
    	return view('frontend.home.index',compact('data'));
    }

    public function savecustomer(Request $request)
    {
  		$id = $request->id;
        $data = $request->all();
        $item = $request->item;
        $data['date'] = db_format_date($request->date);
        unset($data['item']);
        $user_data = $data;
        $action = "Added";
            $affected_rows =  Customer::create($data);
            foreach ($item as $key => $value) {
                $value['customer_id'] = $affected_rows->id;
                CustomerItem::create($value);
            }
        $data['user_key'] = (object)$data;
        $data['item'] = $item;
        $template= view('frontend.email.email',compact('data'))->render();
        $email=$request->email;
        $this->send_email_test($email,'Contact Email',"frontend.email.email",$data);
        return Redirect('/')->with('status','Customer Information Saved Successfully');
    }    

    function send_email_test($email,$subject,$template,$data)

    {

        Mail::send($template, ['data'=>$data], function($message) use ($subject, $email) {

                $message->to($email,$subject)->subject($subject);
                $message->from('asad@igtechservices.com',$subject);

                 });

    }
}

?>