@extends('frontend.layout.header')

@section('css')
<link href="{{asset('/frontend/css/dropzone.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('content')

<section class="customer_form">
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			@if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif
    			<form action="{{ url('savecustomer') }}" class="" id="form_submit" method="post" enctype="multipart/form-data">
       				{{ csrf_field() }}
    				<div class="row">
    					<div class="col-md-4">
    						<div class="form-group">
                  <label><b>Date</b></label>
                  <input type="date" name="date" class="form-control " value="{{(isset($data['results']->date) ? format_date($data['results']->date) : '')}}"  required/>
                </div>
    					</div>
    					<div class="col-md-4">
    						<div class="form-group">
    							<label><b>First Name</b></label>
                  <input type="text" name="first_name" id="customer_name" class="form-control " value="{{(isset($data['results']->first_name) ? $data['results']->first_name : '')}}" required>
    						</div>
    					</div>
    					<div class="col-md-4">
    						<div class="form-group">
    							<label><b>Last Name</b></label>
                  <input type="text" name="last_name" id="customer_name" class="form-control " value="{{(isset($data['results']->last_name) ? $data['results']->last_name : '')}}" required>
    						</div>
    					</div>
    					<div class="col-md-4">
    						<div class="form-group">
    							<label><b>Middle Initial</b></label>
                  <input type="text" name="middle_initial"  id="customer_name" class="form-control" value="{{(isset($data['results']->middle_initial) ? $data['results']->middle_initial : '')}}">
    						</div>
    					</div>
    					<div class="col-md-4">
    						<div class="form-group">
    							<label><b>Contractor/Builder Cabinet</b></label>
                  <select name="contractor" class="form-control main_cat" data-option-id="{{(isset($data['results']->contractor) ? $data['results']->contractor : '')}}" required>
                    <option value="">Select</option>
                    <option value="Contractor">Contractor</option>
                    <option value="Builder">Builder</option>
                  </select>
    						</div>
    					</div>
              <div class="col-md-4 ref_name">
               
              </div>
              
    					<div class="col-md-4">
    						<div class="form-group">
    							<label><b>Street</b></label>
                  <input type="text" name="street" class="form-control" value="{{(isset($data['results']->street) ? $data['results']->street : '')}}" required>
    						</div>
    					</div>
    					<div class="col-md-4">
    						<div class="form-group">
    							<label><b>Lot Number</b></label>
                  <input type="text" name="lot_number" class="form-control" value="{{(isset($data['results']->lot_number) ? $data['results']->lot_number : '')}}" required>
    						</div>
    					</div>
    					<div class="col-md-4">
    						<div class="form-group">
    							<label><b>City</b></label>
                  <input type="text" name="city" class="form-control" value="{{(isset($data['results']->city) ? $data['results']->city : '')}}" required>
    						</div>
    					</div>
    					<div class="col-md-4">
    						<div class="form-group">
    							<label><b>State</b></label>
                  <input type="text" name="state" class="form-control" value="{{(isset($data['results']->state) ? $data['results']->state : '')}}" required>
    						</div>
    					</div>
    					<div class="col-md-4">
    						<div class="form-group">
    							<label><b>Zip</b></label>
                  <input type="text" name="postal_code" class="form-control" value="{{(isset($data['results']->postal_code) ? $data['results']->postal_code : '')}}" required>
    						</div>
    					</div>
    					<div class="col-md-4">
    						<div class="form-group">
    							<label><b>Sub Division</b></label>
                  <input type="text" name="sub_division" class="form-control" value="{{(isset($data['results']->sub_division) ? $data['results']->sub_division : '')}}" required>
    						</div>
    					</div>
    					<div class="col-md-4">
    						<div class="form-group">
    							<label><b>Phone</b></label>
                  <input type="text" name="phone" class="form-control" value="{{(isset($data['results']->phone) ? $data['results']->phone : '')}}" required>
    						</div>
    					</div>
    					<div class="col-md-4">
    						<div class="form-group">
    							<label><b>fax</b></label>
                  <input type="text" name="fax" class="form-control" value="{{(isset($data['results']->fax) ? $data['results']->fax : '')}}" required>
    						</div>
    					</div>
    					<div class="col-md-4">
    						<div class="form-group">
    							<label><b>Remodel</b></label>
                  <select name="remodel" class="form-control" data-option-id="{{(isset($data['results']->remodel) ? $data['results']->remodel : '')}}" required>
                    <option value="">Select</option>
                    <option>Yes</option>
                    <option>No</option>
                  </select>
    						</div>
    					</div>
    					<div class="col-md-3">
    						<div class="form-group">
    							<label><b>Email</b></label>
                  <input type="text" name="email" class="form-control" value="{{(isset($data['results']->email) ? $data['results']->email : '')}}" required>
    						</div>
    					</div>
    					<div class="col-md-3">
    						<div class="form-group">
    							<label><b>New Cabinet</b></label>
                  <select name="new_cabinet" class="form-control" data-option-id="{{(isset($data['results']->new_cabinet) ? $data['results']->new_cabinet : '')}}" required>
                    <option value="">Select</option>
                    <option>Yes</option>
                    <option>No</option>
                  </select>
    						</div>
    					</div>
    					<div class="col-md-3">
    						<div class="form-group">
    							<label><b>Pre Existing Cabinet</b></label>
                  <select name="pre_existing_cabinet" class="form-control" data-option-id="{{(isset($data['results']->pre_existing_cabinet) ? $data['results']->pre_existing_cabinet : '')}}" required>
                    <option value="">Select</option>
                    <option>Yes</option>
                    <option>No</option>
                  </select>
    						</div>
    					</div>
    					<div class="col-md-3">
    						<div class="form-group">
    							<label><b>Remove Existing Cabinet</b></label>
                  <input type="text" name="remove_existing_cabinet" class="form-control" value="{{(isset($data['results']->remove_existing_cabinet) ? $data['results']->remove_existing_cabinet : '')}}" required>
    						</div>
    					</div>
    					<div class="col-md-12">
    						<div class="form-group">
    							<label><b>Upload Picture</b></label>
                    <div action="{{url('admin/upload_file?url=-public-uploads-users-dp')}}" class="dropzone" id="dropzoneupload1">
                        <div class="dz-message">Drop files here or click to upload.</div>
                    </div>
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
                    <label><b>Area</b></label>
                    <select name="item[{{$key}}][area]" data-option-id="{{(isset($item->area) ? $item->area : '')}}" required="">
                      <option value="">Select Area</option>
                      <option value="kitchen">Kitchen</option>
                      <option value="Bedroom">Bedroom</option>
                      <option value="Livingroom">Livingroom</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label><b>Color</b></label>
                    <select name="item[{{$key}}][color]" data-option-id="{{(isset($item->color) ? $item->color : '')}}" required="">
                      <option value="">Select Color</option>
                      <option value="Black">Black</option>
                      <option value="Gray">Gray</option>
                      <option value="Red">Red</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label><b>B/S</b></label>
                    <input type="text" name="item[{{$key}}][bs]" class="form-control"  value="{{(isset($item->bs) ? $item->bs : '')}}" required>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label><b>Sink</b></label>
                    <input type="text" name="item[{{$key}}][sink]" class="form-control" value="{{(isset($item->sink) ? $item->sink : '')}}" required>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label><b>Edge</b></label>
                    <input type="text" name="item[{{$key}}][edge]" class="form-control" value="{{(isset($item->edge) ? $item->edge : '')}}" required>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label><b>Faucets</b></label>
                    <input type="text" name="item[{{$key}}][faucets]" class="form-control" value="{{(isset($item->faucets) ? $item->faucets : '')}}" required>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label><b>Stove</b></label>
                    <input type="text" name="item[{{$key}}][stove]" class="form-control" value="{{(isset($item->stove) ? $item->stove : '')}}" required>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="btn-remove">
                    <label></label>
                    <a id="remove_field" style="cursor: pointer"><i class="fa fa-minus"></i></a>
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
                    <label><b>Area</b></label>
                    <select name="item[0][area]" data-option-id="{{(isset($data['item']->area) ? $data['item']->area : '')}}" required="">
                      <option value="">Select Area</option>
                      <option value="kitchen">Kitchen</option>
                      <option value="Bedroom">Bedroom</option>
                      <option value="Livingroom">Livingroom</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label><b>Color</b></label>
                    <select name="item[0][color]" data-option-id="{{(isset($data['item']->color) ? $data['item']->color : '')}}" required="">
                      <option value="">Select Color</option>
                      <option value="Black">Black</option>
                      <option value="Gray">Gray</option>
                      <option value="Red">Red</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label><b>B/S</b></label>
                    <input type="text" name="item[0][bs]" class="form-control" value="{{(isset($data['item']->bs) ? $data['item']->bs : '')}}" required>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label><b>Sink</b></label>
                    <input type="text" name="item[0][sink]" class="form-control" value="{{(isset($data['item']->sink) ? $data['item']->sink : '')}}" required>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label><b>Edge</b></label>
                    <input type="text" name="item[0][edge]" class="form-control" value="{{(isset($data['item']->edge) ? $data['item']->edge : '')}}" required>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label><b>Faucets</b></label>
                    <input type="text" name="item[0][faucets]" class="form-control" value="{{(isset($data['item']->faucets) ? $data['item']->faucets : '')}}" required>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label><b>Stove</b></label>
                    <input type="text" name="item[0][stove]" class="form-control" value="{{(isset($data['item']->stove) ? $data['item']->stove : '')}}" required>
                  </div>
                </div>
              </div>
              <input type="hidden" name="item[0][id]" value="{{(isset($data['item']->id) ? $data['item']->id : '')}}">
              @endif
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="add_button ">
                  <a id="add_field" style="cursor: pointer"><i class="fa fa-plus"></i></a>
                </div>
              </div>               
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                @foreach($data['description'] as $key=>$value)
                <?= $value->description?>
                @endforeach
              </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                  <div class="checkbox-outer">
                     I agree to the<a href="#">&nbspterms and conditions.</a>
                    <!--  <input type="checkbox" tabindex="3" /> -->
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
              	<button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
    			</form>
    		</div>
    	</div>
    </div>
</section>

@endsection

@section('js')
<script src="{{asset('/frontend/js/dropzone.js')}}"></script>
<script src="{{asset('/frontend/js/dropzonescript.js')}}"></script>

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
                        <label><b>Area</b></label>
                         <select name="item[`+i+`][area]" data-option-id="{{(isset($data['results']->area) ? $data['item']->area : '')}}">
                            <option value="">Select Area</option>
                            <option value="kitchen">Kitchen</option>
                            <option value="Bedroom">Bedroom</option>
                            <option value="Livingroom">Livingroom</option>
                          </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label><b>Color</b></label>
                        <select name="item[`+i+`][color]" data-option-id="{{(isset($data['results']->color) ? $data['item']->color : '')}}">
                            <option value="">Select Color</option>
                            <option value="Black">Black</option>
                            <option value="Gray">Gray</option>
                            <option value="Red">Red</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label><b>B/S</b></label>
                        <input type="text" name="item[`+i+`][bs]" class="form-control" value="{{(isset($data['results']->bs) ? $data['results']->bs : '')}}">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label><b>Sink</b></label>
                        <input type="text" name="item[`+i+`][sink]" class="form-control" value="{{(isset($data['results']->sink) ? $data['results']->sink : '')}}">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label><b>Edge</b></label>
                        <input type="text" name="item[`+i+`][edge]" class="form-control" value="{{(isset($data['results']->edge) ? $data['results']->edge : '')}}">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label><b>Faucets</b></label>
                        <input type="text" name="item[`+i+`][faucets]" class="form-control" value="{{(isset($data['results']->faucets) ? $data['results']->faucets : '')}}">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label><b>Stove</b></label>
                        <input type="text" name="item[`+i+`][stove]" class="form-control" value="{{(isset($data['results']->stove) ? $data['results']->stove : '')}}">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="remove_button mt-5">
                        <label></label>
                        <a id="remove_field" style="cursor: pointer; color:red;"><i data-feather="plus"></i><u>Click to removel the fields</u></a>
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

    $('.buildername').addClass('d-none');
    $('.contractorname').addClass('d-none');
    jQuery(document).on('change','.main_cat',function(){

        var token = $('input[name=_token]').val();
        var select =$('select[name=contractor]').val();

        if(select=="Contractor")

        {
          var content =`<div class="form-group">
                  <label><b>Contractor Name</b></label>
                  <input type="text" name="ref_name" class="form-control" required="">
                </div>`;
          $('.ref_name').html(content);

        }
        else if(select=="Builder")
        {
           var content =`<div class="form-group">
                  <label><b>Builder Name</b></label>
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