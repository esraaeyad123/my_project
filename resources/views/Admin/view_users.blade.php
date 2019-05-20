@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Worker</a> <a href="#" class="current">View Worker</a> </div>
    <h1>Worker</h1>
    @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">�</button> 
                    <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif   
        @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">�</button> 
                    <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Worker</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th> ID</th>
                  <th> Name</th>
                  <th>email</th>
            <th>created_at</th>
                  
                </tr>
              </thead>
              <tbody>
              @foreach($user as $user)
              
			  
                <tr class="gradeX">

                  <td class="center">{{ $user->id }}</td>
                  <td class="center">{{ $user->email}}</td>
                  <td class="center">{{ $user->name}}</td>
             
		 
			  	  <td class="center">{{ $user->created_at }}</td>
		
 
                     
                </tr>
				
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>

$(document).on('click','.deleteRecord',function(e){
        var id = $(this).attr('rel');
        var deleteFunction = $(this).attr('rel1');
        swal({
          title: "Are you sure?",
          text: "Your will not be able to recover this Record Again!",
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Yes, delete 	",
          closeOnConfirm: false
        },
        function(){
            window.location.href=+deleteFunction+"/"+id;
        });
    });
</script>

@endsection
