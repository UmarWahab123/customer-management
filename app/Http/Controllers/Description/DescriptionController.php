<?php

namespace App\Http\Controllers\Description;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App;

use App\Models\Description\Description;

use App\Http\Requests;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;

class DescriptionController extends Controller

{

    public  function descriptions()

    {

        $data['page_title'] = "Terms";

        $data['results'] =  Description::get();

        return view('description.index', compact('data'));

    }

    public  function description($id = -1)

    {

        $data['page_title'] = "Add Terms";

        if ($id != -1) {

            $data['page_title'] = "Update Terms";

            $data['results'] = Description::where('id', $id)->first();

        }

        return view('description.save', compact('data'));

    }

    public function savedescription(Request $request)

    {

        $id = $request->id;
 
        $data = $request->all();
        


        $action = "Added";

        
        if ($id) {

            $action = "Updated";

            $affected_rows = Description::find($id)->update($data);

        } else {

            $affected_rows =  Description::create($data);

        }

        $message=   set_message($affected_rows,'Description',$action);

        Session::put('message', $message);

        return Redirect('/admin/descriptions');

    }



    public function deletedescription($id)

    {

        $affected_rows = Description::find($id)->delete();

        $message = set_message($affected_rows,'Description','Deleted');

        Session::put('message', $message);

        return Redirect('admin/descriptions');

    }


   

   

   

   

  

    

   

}



?>

