@extends('layout.header')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/forms/form-file-uploader.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/forms/pickers/form-pickadate.css')}}">
@endsection
@section('breadcrumb')
   <h2 class="content-header-title float-left mb-0">Customer Management</h2>
   <div class="breadcrumb-wrapper">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="{{url('admin/customer')}}">Customers</a>
         </li>
         <li class="breadcrumb-item"><a href="#">{{$data['page_title']}}</a>
         </li>
      </ol>
   </div>
   @endsection
   @section('content')
    <div class="content-body">
      <section id="basic-input">
      <form action="{{ url('admin/savecustomer') }}" class="" id="form_submit" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}
      <div class="col-md-12 text-right mb-2">
         <button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">Save Changes</button>
         <a href="{{url('admin/customer')}}" class="btn btn-outline-secondary">Back</a>
      </div>
         <div class="card">
            <div class="card-body">
               <input class="form-control" name="id" type="hidden" value="{{(isset($data['results']->id) ? $data['results']->id : '')}}">
               <div class="col-md-12">
                  <div class="tab-content">
                        <div class="row">
                           <div class="col-md-3">
                              <div class="form-group m-form__group">
                                 <label for="pd-format">Date</label>
                                    <input type="text" name="date" id="pd-format" class="form-control format-picker" value="{{(isset($data['results']->date) ? format_date($data['results']->date) : '')}}" class="form-control m-input m_datepicker" required/>
                               </div>
                            </div>
                           <div class="col-md-3">
                              <div class="form-group m-form__group">
                                 <label>First Name</label>
                                 <input type="text" id="customer_name" name="first_name" class="form-control m-input m-input--square" value="{{(isset($data['results']->first_name) ? $data['results']->first_name : '')}}" required>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group m-form__group">
                                 <label>Last Name</label>
                                 <input type="text" id="customer_name" name="last_name" class="form-control m-input m-input--square" value="{{(isset($data['results']->id) ? $data['results']->last_name : '')}}" required>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group m-form__group">
                                 <label>Middle Initial</label>
                                 <input type="text" name="middle_initial" id="customer_name" class="form-control m-input m-input--square" value="{{(isset($data['results']->middle_initial) ? $data['results']->middle_initial : '')}}">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                            <div class="form-group m-form__group">
                              <label>Contractor/Builder Cabinet</label>
                              <select name="contractor" class="form-control main_cat" data-option-id="{{(isset($data['results']->contractor) ? $data['results']->contractor : '')}}" required>
                                <option value="">Select</option>
                                <option value="Contractor">Contractor</option>
                                <option value="Builder">Builder</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6 ref_name">
               
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Street</label>
                                 <input type="text" name="street" class="form-control m-input m-input--square" value="{{(isset($data['results']->street) ? $data['results']->street : '')}}" required>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>Lot Number</label>
                                 <input type="text" name="lot_number" class="form-control m-input m-input--square" value="{{(isset($data['results']->lot_number) ? $data['results']->lot_number : '')}}" required>
                              </div>
                           </div>
                            <div class="col-md-4">
                              <div class="form-group m-form__group">
                                 <label>City</label>
                                 <input type="text" name="city" class="form-control m-input m-input--square" value="{{(isset($data['results']->city) ? $data['results']->city : '')}}" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                          <div class="col-md-3">
                              <div class="form-group m-form__group">
                                 <label>State</label>
                                 <input type="text" name="state" class="form-control m-input m-input--square" value="{{(isset($data['results']->state) ? $data['results']->state : '')}}" required>
                              </div>
                           </div>
                             <div class="col-md-3">
                              <div class="form-group m-form__group">
                                 <label>Zip</label>
                                 <input type="text" name="postal_code" class="form-control m-input m-input--square" value="{{(isset($data['results']->postal_code) ? $data['results']->postal_code : '')}}" required>
                              </div>
                           </div>
                             <div class="col-md-3">
                              <div class="form-group m-form__group">
                                 <label>Sub Division</label>
                                 <input type="text" name="sub_division" class="form-control m-input m-input--square" value="{{(isset($data['results']->sub_division) ? $data['results']->sub_division : '')}}" required>
                              </div>
                           </div>
                            <div class="col-md-3">
                              <div class="form-group m-form__group">
                                 <label>Phone</label>
                                 <input type="text" name="phone" class="form-control m-input m-input--square" value="{{(isset($data['results']->phone) ? $data['results']->phone : '')}}" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                          <div class="col-md-3">
                              <div class="form-group m-form__group">
                                 <label>fax</label>
                                 <input type="text" name="fax" class="form-control m-input m-input--square" value="{{(isset($data['results']->fax) ? $data['results']->fax : '')}}" required>
                              </div>
                           </div>
                          <div class="col-md-3">
                           <div class="form-group m-form__group">
                                 <label>Remodel</label>
                                 <select name="remodel" class="form-control" data-option-id="{{(isset($data['results']->remodel) ? $data['results']->remodel : '')}}" required>
                                    <option value="">Select</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                 </select>
                              </div>
                           </div>
                             <div class="col-md-3">
                              <div class="form-group m-form__group">
                                 <label>Email</label>
                                 <input type="text" name="email" class="form-control m-input m-input--square" value="{{(isset($data['results']->email) ? $data['results']->email : '')}}" required>
                              </div>
                           </div>
                          <div class="col-md-3">
                           <div class="form-group m-form__group">
                                 <label>New Cabinet</label>
                                 <select name="new_cabinet" class="form-control" data-option-id="{{(isset($data['results']->new_cabinet) ? $data['results']->new_cabinet : '')}}" required>
                                    <option value="">Select</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                          <div class="col-md-3">
                           <div class="form-group m-form__group">
                                 <label>Pre Existing Cabinet</label>
                                 <select name="pre_existing_cabinet" class="form-control" data-option-id="{{(isset($data['results']->pre_existing_cabinet) ? $data['results']->pre_existing_cabinet : '')}}" required>
                                    <option value="">Select</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                 </select>
                              </div>
                           </div>
                             <div class="col-md-3">
                              <div class="form-group m-form__group">
                                 <label>Remove Existing Cabinet</label>
                                 <input type="text" name="remove_existing_cabinet" class="form-control m-input m-input--square" value="{{(isset($data['results']->remove_existing_cabinet) ? $data['results']->remove_existing_cabinet : '')}}" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group" >
                                 <label>
                                 Upload Picture
                                 </label>
                                 <div action="{{url('admin/upload_file?url=-public-uploads-users-dp') }}" class="dropzone" id="dropzoneupload1">
                                    <div class="dz-message">Drop files here or click to upload.</div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <img class="img-fluid mt-3" src="{{isset($data['results']->file)?url('/').''.$data['results']->file:'' }}">  
                           </div>
                           <input class="form-control" name="file" type="hidden" value="{{(isset($data['results']->file) ? $data['results']->file : '')}}">
                        </div>
                  </div>
                  <div class="info_div">
                    @if(isset($data['item']))
                    @foreach($data['item'] as $key=>$item)
                    <div class="row info_row">
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label>Area</label>
                            <select name="item[{{$key}}][area]" class="form-control" data-option-id="{{(isset($item->area) ? $item->area : '')}}">
                            <option value="">Select Area</option>
                            <option value="kitchen">Kitchen</option>
                            <option value="Bedroom">Bedroom</option>
                            <option value="Livingroom">Livingroom</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label>Color</label>
                          <select name="item[{{$key}}][color]" class="form-control" data-option-id="{{(isset($item->color) ? $item->color : '')}}">
                            <option value="">Select Color</option>
                            <option value="Black">Black</option>
                            <option value="Gray">Gray</option>
                            <option value="Red">Red</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label>B/S</label>
                          <input type="text" name="item[{{$key}}][bs]" class="form-control"  value="{{(isset($item->bs) ? $item->bs : '')}}">
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label>Sink</label>
                          <input type="text" name="item[{{$key}}][sink]" class="form-control" value="{{(isset($item->sink) ? $item->sink : '')}}">
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label>Edge</label>
                          <input type="text" name="item[{{$key}}][edge]" class="form-control" value="{{(isset($item->edge) ? $item->edge : '')}}">
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label>Faucets</label>
                          <input type="text" name="item[{{$key}}][faucets]" class="form-control" value="{{(isset($item->faucets) ? $item->faucets : '')}}">
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label>Stove</label>
                          <input type="text" name="item[{{$key}}][stove]" class="form-control" value="{{(isset($item->stove) ? $item->stove : '')}}">
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="btn-remove">
                          <label></label>
                            <a data-id="{{$item->id}}" id="btn-remove" style="cursor: pointer">Delete</a>
                        </div>
                      </div>
                        <input class="form-control oldid" name="olditem[{{$key}}][id]" type="hidden" value="{{$item->id}}">
                        <input type="hidden" name="item[{{$key}}][id]" value="{{(isset($item->id) ? $item->id : '')}}">
                    </div>
                           
                    @endforeach
                    @else
                    <div class="row info_row">
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label>Area</label>
                          <select name="item[0][area]" class="form-control" data-option-id="{{(isset($data['item']->area) ? $data['item']->area : '')}}">
                            <option value="">Select Area</option>
                            <option value="kitchen">Kitchen</option>
                            <option value="Bedroom">Bedroom</option>
                            <option value="Livingroom">Livingroom</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label>Color</label>
                          <select name="item[0][color]" class="form-control" data-option-id="{{(isset($data['item']->color) ? $data['item']->color : '')}}">
                            <option value="">Select Color</option>
                            <option value="Black">Black</option>
                            <option value="Gray">Gray</option>
                            <option value="Red">Red</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label>B/S</label>
                          <input type="text" name="item[0][bs]" class="form-control" value="{{(isset($data['item']->bs) ? $data['item']->bs : '')}}">
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label>Sink</label>
                          <input type="text" name="item[0][sink]" class="form-control" value="{{(isset($data['item']->sink) ? $data['item']->sink : '')}}">
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label>Edge</label>
                          <input type="text" name="item[0][edge]" class="form-control" value="{{(isset($data['item']->edge) ? $data['item']->edge : '')}}">
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label>Faucets</label>
                          <input type="text" name="item[0][faucets]" class="form-control" value="{{(isset($data['item']->faucets) ? $data['item']->faucets : '')}}">
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label>Stove</label>
                          <input type="text" name="item[0][stove]" class="form-control" value="{{(isset($data['item']->stove) ? $data['item']->stove : '')}}">
                        </div>
                      </div>
                    </div>
                    <input type="hidden" name="item[0][id]" value="{{(isset($data['item']->id) ? $data['item']->id : '')}}">
                    @endif
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                      <div class="add_button ">
                        <a id="add_field" style="cursor: pointer"><i data-feather="plus"></i></a>
                      </div>
                    </div>               
                  </div>
             </form>
         </div>
    </div>
</div>
</section>
</div>
@endsection
@section('js')
<script src="{{asset('/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/extensions/dropzone.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('/app-assets/js/scripts/forms/pickers/form-pickers.js')}}"></script>
<script type="text/javascript">
   $('.customer-mng').addClass('sidebar-group-active');
   $('.customer-mng').addClass('active');

   $('#form_submit').validate({
       rules: {
           'role_id': {
               required: true
           },
           'first_name': {
               required: true
           },
           'last_name': {
               required: true
           },
           'email': {
               required: true,
               email: true
           },
           'cpassword': {
               equalTo: '.password'
           },
           'status': {
               required: true
           },
       }
   });
 DropzoneSinglefunc('dropzoneupload1','.png,.jpg,.jpge',1,'file');
</script>


<script type="text/javascript">
    
    var i =1;
    @if(isset($data['item']) && count($data['item']) > 0)
      i='{{count($data['item'])}}';
    @endif

    jQuery(document).on('click','#add_field',function(e){

       var html_content ="";
       html_content +=`
            <div class="row info_row">
              
              <div class="col-lg-3">
                <div class="form-group">
                  <label>Area</label>
                  <select name="item[`+i+`][area]" data-option-id="{{(isset($data['results']->area) ? $data['item']->area : '')}}" class="form-control">
                    <option value="">Select Area</option>
                    <option value="kitchen">Kitchen</option>
                    <option value="Bedroom">Bedroom</option>
                    <option value="Livingroom">Livingroom</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label>Color</label>
                  <select name="item[`+i+`][color]" data-option-id="{{(isset($data['results']->color) ? $data['item']->color : '')}}" class="form-control">
                    <option value="">Select Color</option>
                    <option value="Black">Black</option>
                    <option value="Gray">Gray</option>
                    <option value="Red">Red</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label>B/S</label>
                  <input type="text" name="item[`+i+`][bs]" class="form-control" value="{{(isset($data['results']->bs) ? $data['results']->bs : '')}}">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label>Sink</label>
                  <input type="text" name="item[`+i+`][sink]" class="form-control" value="{{(isset($data['results']->sink) ? $data['results']->sink : '')}}">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label>Edge</label>
                  <input type="text" name="item[`+i+`][edge]" class="form-control" value="{{(isset($data['results']->edge) ? $data['results']->edge : '')}}">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label>Faucets</label>
                  <input type="text" name="item[`+i+`][faucets]" class="form-control" value="{{(isset($data['results']->faucets) ? $data['results']->faucets : '')}}">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label>Stove</label>
                  <input type="text" name="item[`+i+`][stove]" class="form-control" value="{{(isset($data['results']->stove) ? $data['results']->stove : '')}}">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="remove_button mt-5">
                        <label></label>
                        <a id="remove_field" style="cursor: pointer; color:red;"><i data-feather="plus"></i><u>Click to removel the fields</u></a>
                    </div>
              </div>   
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="add_button ">
                    <a id="add_field" style="cursor: pointer"><i data-feather="plus"></i></a>
                  </div>
                </div>               
              </div>            
            </div>
                   
       `;
        
        jQuery(".info_div").append(html_content);
         i++;
    });

    jQuery(document).on('click','#remove_field',function(e){
        jQuery(this).attr('data-id');
        jQuery(this).parents('.info_row').remove();
        jQuery('#form-submit').append('<input type="hidden" name="removed_entries[]" value="' + $(this).attr('data-id') + '"/>');

        jQuery(this).parents('.info_row').find('.oldid').each(function (i, obj) {
           alert($(this).val() );
          $('#form-submit').append('<input type="hidden" name="removed_entries[]" value="' + $(this).val() + '"/>');
                
      });
      i--;

    });

  jQuery(document).on('click', '#btn-remove', function() {

            jQuery(this).parents('.info_row').remove();


            jQuery(this).parents('.info_row').find('.oldid').each(function(i, obj) {

                // alert(jQuery(this).val());

                jQuery('#form_submit').append('<input type="hidden" name="removed_entries[]" value="' + jQuery(this).val() + '"/>');

            });

            i--;


        });

 $('.buildername').addClass('d-none');
$('.contractorname').addClass('d-none');

  jQuery(document).on('change','.main_cat',function(){

        var token = $('input[name=_token]').val();
        var select =$('select[name=contractor]').val();

        if(select=="Contractor")

        {

           var content =`<div class="form-group">
                  <label>Contractor Name</label>
                  <input type="text" name="ref_name" class="form-control" required="">
                </div>`;
          $('.ref_name').html(content);

        }
        else if(select=="Builder")
        {
           var content =`<div class="form-group">
                  <label>Builder Name</label>
                  <input type="text" name="ref_name" class="form-control" required="">
                </div>`;
          $('.ref_name').html(content);
        }

      });


      setTimeout(function()


      { $('.main_cat').trigger('change') }, 1000);
      $(document).on('keypress', '#customer_name', function (event) {
    var regex = new RegExp("^[a-zA-Z ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});  
</script>

@endsection