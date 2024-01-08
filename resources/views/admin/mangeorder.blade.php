@extends('admin.layouts.master')

@section('title')
Managed Order
@endsection

@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manageorder Information
        <small>Manageorder Information</small>
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

        <br />
      <div class="table-responsive">
        <table id="user_table" class="table table-bordered table-striped">
          <thead>
            <tr>
            <th width="1%">Owner Name</th>
              <th width="1%">Owner Email</th>
              <th width="1%">Address</th>
              <th width="1%">Package_1</th>
              <th width="1%">Package_2</th>
              <th width="1%">Package_3</th>
              <th width="1%">Shipping Status</th>
              <th width="1%">Delivery Status</th>
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
            <h4 class="modal-title">Add New Fuel Station</h4>
          </div>
          <div class="modal-body">
            <span id="form_result"></span>
            <form method="post" id="sample_form" class=" ">
              @csrf
              <div class="form-row">
        <div class="form-group col-6">
          <label for="exampleInputEmail1">Customer Name</label>
          <input name="Customer_FName" type="text" class="form-control" id="Customer_FName" readonly aria-describedby="emailHelp" >
        </div>

        <div class="form-group col-6">
          <label for="exampleInputEmail1">Customer Email</label>
          <input name="Customer_Emailid" type="text" class="form-control" id="Customer_Emailid" readonly aria-describedby="emailHelp" >
        </div>
      </div>

           <div class="form-group col-6">
             <label for="exampleInputCampus">Customer Address</label>
             <input name="Delivery_Address" type="text" class="form-control" id="Delivery_Address" readonly aria-describedby="emailHelp" >

           </div>
           
           <div class="form-group col-6">
             <label for="exampleInputCampus">Shipping Status</label>
             <input name="Shipping_Status" type="text" class="form-control" id="Shipping_Status" readonly aria-describedby="emailHelp" >

           </div>

           <div class="form-group col-6">
             <label for="exampleInputCampus">Delivery Status</label>
             <input name="Delivery_Status" type="text" class="form-control" id="Delivery_Status"  readonly aria-describedby="emailHelp" >

           </div>



           <div class="form-group col-6">
             <label for="exampleInputCampus">Shipping Status</label>
             <select name="Shipping_Status" id="Shipping_Status"class="form-control show-tick"  >
             <option value="Pending">Pending</option>
              <option value="Approved">Approved</option>
             </select>

           </div>

           <div class="form-group col-6">
             <label for="exampleInputCampus">Delivery Status</label>
             <select name="Delivery_Status" id="Delivery_Status" class="form-control show-tick">
                 <option value="Pending">Pending</option>
           <option value="Approved">Approved</option>
             </select> 

           </div>
      
           <div class="form-group col-6">
             <label for="exampleInputCampus">Canceled Order</label>
             <select name="Order_Cancel_Status" id="Order_Cancel_Status" class="form-control show-tick">
                 <option value="No">No</option>
           <option value="Yes">Yes</option>
             </select> 

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



<script>
$(document).ready(function(){

  $('#user_table').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
      url: "{{ route('managerequest.index') }}"
    },
    columns: [
    {
        data: 'Customer_FName',
        name: 'Customer_FName'
      },
      {
        data: 'Customer_Emailid',
        name: 'Customer_Emailid'
      },
      {
        data: 'Delivery_Address',
        name: 'Delivery_Address'
      },
       {
        data: 'package1',
        name: 'package1'
      },
      {
        data: 'package2',
        name: 'package2'
      },
       {
        data: 'package3',
        name: 'package3'
      },
      {
        data: 'Shipping_Status',
        name: 'Shipping_Status',
        "render": function (data, type, full, meta, row) {
    if (!data) {
            return '<i class="far fa-dot-circle" style="color:green" /*aria-hidden="true"*/>'+data+'</i>';
        }
        else
        {
             return '<i class="far fa-dot-circle" style="color:green" /*aria-hidden="true"*/>'+data+'</i>' ;
             
        } 
             
             }
      },
      {
        data: 'Delivery_Status',
        name: 'Delivery_Status',
        "render": function (data, type, full, meta, row) {
    if (!data) {
            return '<i class="far fa-dot-circle" style="color:green" /*aria-hidden="true"*/>'+data+'</i>';
        }
        else
        {
             return '<i class="far fa-dot-circle" style="color:green" /*aria-hidden="true"*/>'+data+'</i>' ;
             
        } 
             
             }
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
      action_url = "{{ route('managerequest.store') }}";
    }

    if($('#action').val() == 'Update')
    {
      action_url = "{{ route('managerequest.update') }}";
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
           $('#formModal').modal('hide');
          $('#user_table').DataTable().ajax.reload();
           alert('Order Information Updated successfully.');
           
        //   html = '<div class="alert alert-success">' + data.success + '</div>';
        //   $('#sample_form')[0].reset();
        //   $('#user_table').DataTable().ajax.reload();
        }
        $('#form_result').html(html);
      }
    });
  });

  $(document).on('click', '.edit', function(){
    var id = $(this).attr('id');
    $('#form_result').html('');
    $.ajax({
      url :"managerequest/"+id+"/edit",
      dataType:"json",
      success:function(data)
      {
        $('#Customer_FName').val(data.result.Customer_FName);
        $('#Customer_Emailid').val(data.result.Customer_Emailid);
        $('#Delivery_Address').val(data.result.Delivery_Address);
        $('#Shipping_Status').val(data.result.Shipping_Status);
        $('#Delivery_Status').val(data.result.Delivery_Status);
        $('#Order_Cancel_Status').val(data.result.Order_Cancel_Status);
        $('#hidden_id').val(id);
        $('.modal-title').text('Update Information');
        $('#action_button').val('Update');
        $('#action').val('Update');
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
      url:"managerequest/destroy/"+user_id,
      beforeSend:function(){
        $('#ok_button').text('Deleting...');
      },
      success:function(data)
      {
        setTimeout(function(){
          $('#confirmModal').modal('hide');
          $('#user_table').DataTable().ajax.reload();
          alert('Order Deleted Deleted');
        }, 1000);
      }
    })
  });

});

</script>

@endsection
