@extends('layout.header')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/colors.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/extensions/ext-component-sweet-alerts.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
@endsection
@section('breadcrumb')
<h2 class="content-header-title float-left mb-0">Customer</h2>
<div class="breadcrumb-wrapper">
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('admin/customer')}}">Customers</a>
      </li>
      <li class="breadcrumb-item"><a href="#">{{$data['customer']->first_name}} {{$data['customer']->last_name}} {{$data['page_title']}}</a>
      </li>
   </ol>
</div>
@endsection
@section('content')
<div class="content-body">
    <div class="col-md-12 text-right mb-2">
      <a href="{{url('admin/customer')}}" class="btn btn-outline-secondary">Back</a>
      <a href="#" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1 btn_print">Print</a>
   </div>
   <section id="basic-datatable">
      <div class="card">
         <div class="card-body">
            <div class="col-md-12">
               <div class="tab-content" id="printarea">
                  <table class="table dynamic_table font-weight-bold table-bordered">
                     <tbody>
                        <tr>
                           <td><b>First Name</b></td>
                           <td>{{isset($data['customer']->first_name) ? $data['customer']->first_name : ''}}</td>
                        </tr>
                        <tr>
                           <td><b>Last Name</b></td>
                           <td>{{isset($data['customer']->last_name) ? $data['customer']->last_name : ''}}</td>
                        </tr>
                        <tr>
                           <td><b>Middle Name</b></td>
                           <td>{{isset($data['customer']->middle_initial) ? $data['customer']->middle_initial : ''}}</td>
                        </tr>
                        <tr>
                           <td><b>Email</b></td>
                           <td>{{isset($data['customer']->email) ? $data['customer']->email : ''}}</td>
                        </tr>
                        <tr>
                           <td><b>Date</b></td>
                           <td>{{$data['customer']->date}}</td>
                        </tr>
                        <tr>
                           <td><b>Contractor</b></td>
                           <td>{{$data['customer']->contractor}}</td>
                        </tr>
                        @if($data['customer']->contractor=='Contractor')
                         <tr>
                           <td><b>Contractor Name</b></td>
                           <td>{{$data['customer']->ref_name}}</td>
                        </tr>
                        @else
                         <tr>
                           <td><b>Builder Name</b></td>
                           <td>{{$data['customer']->ref_name}}</td>
                        </tr>
                        @endif
                        <tr>
                           <td><b>Street</b></td>
                           <td>{{$data['customer']->street}}</td>
                        </tr>
                        <tr>
                           <td><b>Lot Number</b></td>
                           <td>{{$data['customer']->lot_number}}</td>
                        </tr>
                        <tr>
                           <td><b>City</b></td>
                           <td>{{$data['customer']->city}}</td>
                        </tr>
                        <tr>
                           <td><b>State</b></td>
                           <td>{{$data['customer']->state}}</td>
                        </tr>

                         <tr>
                           <td><b>Zip</b></td>
                           <td>{{$data['customer']->postal_code}}</td>
                        </tr>
                        <tr>
                           <td><b>Sub Division</b></td>
                           <td>{{$data['customer']->sub_division}}</td>
                        </tr>
                        <tr>
                           <td><b>Phone</b></td>
                           <td>{{$data['customer']->phone}}</td>
                        </tr>
                        <tr>
                           <td><b>Fax</b></td>
                           <td>{{$data['customer']->fax}}</td>
                        </tr>
                        <tr>
                           <td><b>Remodel</b></td>
                           <td>{{$data['customer']->remodel}}</td>
                        </tr>

                        <tr>
                           <td><b>New Cabinet</b></td>
                           <td>{{$data['customer']->new_cabinet}}</td>
                        </tr>
                        <tr>
                           <td><b>Pre Existing Cabinet</b></td>
                           <td>{{$data['customer']->pre_existing_cabinet}}</td>
                        </tr>
                        <tr>
                           <td><b>Remove Existing Cabinet</b></td>
                           <td>{{$data['customer']->remove_existing_cabinet}}</td>
                        </tr>
                        <tr>
                           <td><b>file</b></td>
                          <td><img src="{{url('/')}}/{{$data['customer']->file}}" width="60" height="60"></td>
                        </tr>
                     </tbody>
                  </table>
                  <br>
                  <table class="table dynamic_table font-weight-bold table-bordered">
                     <thead>
                        <tr>
                           <th>S.No</th>
                           <th>Area</th>
                           <th>Color</th>
                           <th>B/S</th>
                           <th>Sink</th>
                           <th>Edge</th>
                           <th>Faucets</th>
                           <th>Stove</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($data['customer_item'] as $key=>$value)
                        <tr>
                           <td>{{$key+1}}</td>
                           <td>{{$value->area}}</td>
                           <td>{{$value->color}}</td>
                           <td>{{$value->bs}}</td>
                           <td>{{$value->sink}}</td>
                           <td>{{$value->edge}}</td>
                           <td>{{$value->faucets}}</td>
                           <td>{{$value->stove}}</td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@include('includes.delete')
@endsection


@section('js')
<script src="{{asset('/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script type="text/JavaScript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.6.0/jQuery.print.js"></script>
<script type="text/javascript">
   $('.customer-mng').addClass('sidebar-group-active');
   $('.customer-mng').addClass('active');
$(document).ready(function(){
   $('a.btn_print').on('click',function(){
      $('#printarea').print();
       return false;
   });
});

</script>
@endsection