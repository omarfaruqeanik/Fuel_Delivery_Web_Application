@extends('admin.layouts.master')

@section('title')
Registered Admin List
@endsection

@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Registered Admin Information
        <small>Add Admin Information</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
       @if(count($errors)>0)
        <div class="alert alert-danger w-50 mx-auto mt-3 text-center">
          <ul>
            @foreach($errors->all() as $error)
              <li style="list-style: none;">{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <div class="box-header">
              <!--<h3 class="box-title">Student Information</h3>-->
                    
            </div>

            <!-- /.box-header -->
            <div class="box-body">
        <div align="right">
          <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Add Admin</button>
        </div>
        <br />
      <div class="table-responsive">
        <table id="user_table" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th width="1%">Admin Name</th>
              <th width="1%">Admin Email</th>
              <th width="1%">Role</th>
              <th width="5%">Created Date</th>
              <th width="1%">Updated Date</th>
              <th width="3%">Action</th>
            </tr>
          </thead>
        </table>
      </div>
      <br />
      <br />
    </div>
  </body>
</html>

<div id="formModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add New Admin</h4>
          </div>
          <div class="modal-body">
            <span id="form_result"></span>
            <form method="post"  id="sample_form" class="form-horizontal">
              @csrf
              <div class="form-group">
                <label class="control-label col-md-4" >Admin Name: </label>
                <div class="col-md-8">
                  <input type="text" name="name" id="name" placeholder="Enter Here Admin Name" class="form-control" />
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-4">Email : </label>
                <div class="col-md-8">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="example@diu.edu.bd"  title="Please enter your DIU e-mail address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">Password : </label>
                <div class="col-md-8">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="12345678" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-md-4"></label>
                <div class="col-md-8">
                  <span class="text-danger">* Default Password:12345678</span>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">Confirm Password : </label>
                <div class="col-md-8">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="12345678" required autocomplete="new-password">
                </div>
              </div>
              
               <div class="form-group">
                <label class="control-label col-md-4">Role: </label>
                <div class="col-md-8">
                 
                  <select type="text" class="form-control " name="role">
                    <option value="admin">Admin</option>
                    <option value="customer">Customer</option>
                    <option value="owner">Owner</option>
          </select>
                </div>
              </div>
                
                  <br />
                  <div class="form-group" align="center">
                    <input type="hidden" name="action" id="action" value="Add" />
                    <input type="hidden" name="hidden_id" id="hidden_id" />
                    <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Add" />
                  </div>
            </form>
          </div>
      </div>
    </div>
</div>

<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Confirmation</h2>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
            </div>
            <div class="modal-footer">
              <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#sv_name').change(function(){
    var countryID = $(this).val();    
    if(countryID){
        $.ajax({
           type:"GET",
           url:"{{url('api/viewinfo')}}?sv_id="+countryID,
           success:function(res){               
            if(res){
                $("#state").empty();
                $.each(res,function(key,value){
                    $("#state").append('<option value="'+value+'">'+value+'</option>');
                });
           
            }else{
               $("#state").empty();
            }
           }
        });
    }else{
        $("#state").empty();
        $("#city").empty();
    }      
   });
   
</script>

<script>
$(document).ready(function(){

  $('#user_table').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
      url: "{{ route('adminlist.index') }}"
    },
    columns: [
      {
        data: 'name',
        name: 'name'
      },
      {
        data: 'email',
        name: 'email'
      },
      {
        data: 'role',
        name: 'role'
      },
      {
        data: 'created_at',
        name: 'created_at'
      },
      {
        data: 'updated_at',
        name: 'updated_at'
      },
      {
        data: 'action',
        name: 'action',
        orderable: false
      }
    ]
  });


  $('#create_record').click(function(){
    $('.modal-title').text('Add New Record');
    $('#action_button').val('Add');
    $('#action').val('Add');
    $('#form_result').html('');

    $('#formModal').modal('show');
  });

  $('#sample_form').on('submit', function(event){
    event.preventDefault();
    var action_url = '';

    if($('#action').val() == 'Add')
    {
      action_url = "{{ route('adminlist.store') }}";
    }

    if($('#action').val() == 'Edit')
    {
      action_url = "{{ route('adminlist.update') }}";
    }

    $.ajax({
      url: action_url,
      method:"POST",
      data:$(this).serialize(),
      dataType:"json",
      success:function(data)
      {
        var html = '';
        if(data.errors)
        {
          html = '<div class="alert alert-danger">';
          for(var count = 0; count < data.errors.length; count++)
          {
            html += '<p>' + data.errors[count] + '</p>';
          }
          html += '</div>';
        }
        if(data.success)
        {
          html = '<div class="alert alert-success">' + data.success + '</div>';
          $('#sample_form')[0].reset();
          $('#user_table').DataTable().ajax.reload();
        }
        $('#form_result').html(html);
      }
    });
  });

  $(document).on('click', '.edit', function(){
    var id = $(this).attr('id');
    $('#form_result').html('');
    $.ajax({
      url :"http://localhost:8000/adminlist/"+id+"/edit",
      dataType:"json",
      success:function(data)
      {
        $('#name').val(data.result.name);
        $('#email').val(data.result.email);
        $('#std_id').val(data.result.std_id);
        $('#role').val(data.result.role);
        $('#hidden_id').val(id);
        $('.modal-title').text('Edit Record');
        $('#action_button').val('Edit');
        $('#action').val('Edit');
        $('#formModal').modal('show');
      }
      
    })
  });

  var user_id;

  $(document).on('click', '.delete', function(){
    user_id = $(this).attr('id');
    $('#confirmModal').modal('show');
  });

  $('#ok_button').click(function(){
    $.ajax({
      url:"http://localhost:8000/adminlist/destroy/"+user_id,
      beforeSend:function(){
        $('#ok_button').text('Deleting...');
      },
      success:function(data)
      {
        setTimeout(function(){
          $('#confirmModal').modal('hide');
          $('#user_table').DataTable().ajax.reload();
          alert('Data Deleted');
        }, 200);
      }
    })
  });

});

</script>

   
@endsection
