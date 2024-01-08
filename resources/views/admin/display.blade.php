@extends('admin.layouts.master')

@section('title')
Order Details
@endsection

@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Order Information
        <small>Update Order Status</small>
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

            <!-- /.box-header -->
            <div class="box-body">
        <div align="right">
          <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Add Order</button>
        </div>
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
            </tr>
          </thead>
        </table>
      </div>
      <br />
      <br />
    </div>
  </body>
</html>



<script>
            function myFunction() {
              var checkBox = document.getElementById("fuel_name1");
              var text = document.getElementById("text");
              if (checkBox.checked == true){
                text.style.display = "block";
              } else {
                text.style.display = "none";
              }
            }
            function myFunction1() {
              var checkBox = document.getElementById("fuel_name2");
              var text = document.getElementById("text1");
              if (checkBox.checked == true){
                text.style.display = "block";
              } else {
                text.style.display = "none";
              }
            }
            function myFunction2() {
              var checkBox = document.getElementById("fuel_name3");
              var text = document.getElementById("text2");
              if (checkBox.checked == true){
                text.style.display = "block";
              } else {
                text.style.display = "none";
              }
            }
            </script>

<script>
$(document).ready(function(){

fetch_data();

 function fetch_data(category = '')
 {

  $('#user_table').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
      url: "{{ route('orders.index') }}",
      data: {category:category}
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
      }
      
    ]
  });
 }
  $('#category_filter').change(function(){
  var category_id = $('#category_filter').val();

  $('#user_table').DataTable().destroy();

  fetch_data(category_id);
 });

  $('#create_record').click(function(){
    $('.modal-title').text('Add New Fuel Station');
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
      action_url = "{{ route('orders.store') }}";
    }

    if($('#action').val() == 'Edit')
    {
      action_url = "{{ route('orders.update') }}";
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
      url :"orders/"+id+"/edit",
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
      url:"orders/destroy/"+user_id,
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
