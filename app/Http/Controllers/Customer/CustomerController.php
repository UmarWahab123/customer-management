<?php
namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use App\Models\Customer\Customer;
use App\Models\Customer\CustomerItem;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class CustomerController extends Controller
{
    public  function customer()
    {
        $data['page_title'] = "All Customer";
        $data['results'] =  Customer::get();
        return view('customer.index', compact('data'));
    }
    public  function customers($id = -1)
    {
        $data['page_title'] = "Add Customer";
        if ($id != -1) {
            $data['page_title'] = "Update Customer";
            $data['results'] = Customer::where('id', $id)->first();
            $data['item'] = CustomerItem::where('customer_id',$data['results']->id)->get();
        }
        return view('customer.save', compact('data'));
    }
    public function savecustomer(Request $request)
    {
        $id = $request->id;
        $data = $request->all();
        $item = $request->item;
        $data['date'] = db_format_date($request->date);

        $item  = [];

        $olditem=[];

        $removed_entries=[];

        // $item=$data['item'];

        if(isset($data['item'])){

            $item = $data['item'];

            unset($data['item']);

        }


        if (isset($data['olditem'])) {

            $olditem = $data['olditem'];

            unset($data['olditem']);
        }

        if (isset($data['removed_entries'])) {

            $removed_entries = $data['removed_entries'];

            unset($data['removed_entries']);

        }

        $action = "Added";
        if($id){
            $action = "Updated";
            $modal = Customer::find($id);
            $affected_rows=$modal->update($data);

            foreach ($olditem as $key => $value) {

                $value['customer_id'] = $modal->id;
                CustomerItem::where('id', $value['id'])->update($value) ;

            }

            foreach ($item as $key => $value) {
                if(!empty($value['id']))
                {
                    CustomerItem::where('id',$value['id'])->update($value);
                }
                else
                {
                    $value['customer_id'] = $modal->id;
                    CustomerItem::create($value);
                }   
            }

        } 
        else 
        {
            $affected_rows =  Customer::create($data);
            foreach ($item as $key => $value) {
                $value['customer_id'] = $affected_rows->id;
                CustomerItem::create($value);
            }
        }

        if(!empty($removed_entries)){

          CustomerItem::where('id',$removed_entries)->delete();
        }


        $message=   set_message($affected_rows,'Customer',$action);
        Session::put('message', $message);
        return Redirect('/admin/customer');
    }
    public function deletecustomer($id)
    {
        $affected_rows = Customer::find($id)->delete();
        $message = set_message($affected_rows,'Customer','Deleted');
        Session::put('message', $message);
        return Redirect('admin/customer');
    }
    public function customermodal($id)
    {

        $data['page_title']="Details";

        $data['customer'] = Customer::where('id',$id)->first();

        $data['customer_item']= CustomerItem::where('customer_id',$id)->get();

        return view('customer.details',compact('data'));

    }
    public function upload_file(Request $request)
    {

        $path=$_GET['url'];

        $path = str_replace('-', '/', $path);

        if ( !empty( $_FILES ) ) {

            $date = new \DateTime();

            $current_dir=str_replace('uploads','',getcwd());

            $tempPath = $_FILES[ 'file' ][ 'tmp_name' ];

            $name=str_replace(' ', '', $_FILES['file']['name']);

            $filename=$date->getTimestamp().'-'. $name;

            //  $filename=$name;

            $uploadPath = $current_dir.$path. DIRECTORY_SEPARATOR .$filename;

            //  print_r($uploadPath); exit;

            move_uploaded_file( $tempPath, $uploadPath );

            $answer = array( 'answer' => 'File transfer completed' );

            $json = json_encode( $answer );

            $newFileName = $path.'/'.$filename;

            echo $newFileName;

        } else {

            echo 'No files';

        }

    }

}
?>