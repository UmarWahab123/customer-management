<!DOCTYPE html>

<html>

<head>

</head>

<body>
<h3>Basic Info</h3>
<table width="60%" cellspacing="1"><tbody><tr><td width="40%"><b>Name</b></td><td width="60%"> : {{$data['user_key']->first_name}} {{$data['user_key']->last_name}}</td></tr><tr><td><b>Email</b></td><td> : {{$data['user_key']->email}}</td></tr><tr><td><b>Middle Initial</b></td><td> : {{$data['user_key']->middle_initial}}</td></tr><tr><td><b>Contractor</b></td><td> : {{$data['user_key']->contractor}}</td></tr>@if($data['user_key']->contractor=='Contractor')<tr><td><b>Contractor Name</b></td><td>{{$data['user_key']->ref_name}}</td></tr>@else<tr><td><b>Builder Name</b></td><td>{{$data['user_key']->ref_name}}</td></tr> @endif<tr><td><b>Street</b></td><td> : {{$data['user_key']->street}}</td></tr><tr><td><b>Lot Number</b></td><td> : {{$data['user_key']->lot_number}}</td></tr><tr><td><b>City</b></td><td> : {{$data['user_key']->city}}</td></tr><tr><td><b>State</b></td><td> :{{$data['user_key']->state}}</td></tr>
<tr><td><b>Postal Code</b></td><td> :{{$data['user_key']->postal_code}}</td></tr>
<tr><td><b>Sub Division</b></td><td> :{{$data['user_key']->state}}</td></tr>
<tr><td><b>Phone</b></td><td> :{{$data['user_key']->phone}}</td></tr>
<tr><td><b>Fax</b></td><td> :{{$data['user_key']->fax}}</td></tr>
<tr><td><b>Remodel</b></td><td> :{{$data['user_key']->remodel}}</td></tr>
<tr><td><b>New Cabinet</b></td><td> :{{$data['user_key']->new_cabinet}}</td></tr>
<tr><td><b>Pre Existing Cabinet</b></td><td> :{{$data['user_key']->pre_existing_cabinet}}</td></tr>
<tr><td><b>Remove Existing Cabinet</b></td><td> :{{$data['user_key']->remove_existing_cabinet}}</td></tr>
</tbody></table>
<h3>Area Info</h3>
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
            @foreach($data['item'] as $key=>$value)
            <tr>
               <td>{{$key+1}}</td>
               <td>{{$value['area']}}</td>
               <td>{{$value['color']}}</td>
               <td>{{$value['bs']}}</td>
               <td>{{$value['sink']}}</td>
               <td>{{$value['edge']}}</td>
               <td>{{$value['faucets']}}</td>
               <td>{{$value['stove']}}</td>
            </tr>
            @endforeach
         </tbody>
      </table>
</body>

</html>