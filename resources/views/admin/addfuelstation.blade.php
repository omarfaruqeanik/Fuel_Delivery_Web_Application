@extends('admin.layouts.master')

@section('title')
Add New Fuel Station
@endsection

@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Fuel Station Information
        <small>Update Fuel Station Information and add Proposal</small>
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
          <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Add New Fuel Station</button>
        </div>
        <br />
      <div class="table-responsive">
        <table id="user_table" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th width="1%">Owner Name</th>
              <th width="1%">Fuel Station Name</th>
              <th width="1%">Fuel Station Phone</th>
              <th width="1%">Area</th>
              <th width="1%">Action</th>
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
           <center>   <label for="exampleInputEmail1">Fuel Name</label>
             <br />
          <!-- <input name="fuel_name1" type="checkbox"  id="fuel_name1"  aria-describedby="emailHelp" > -->
          <input name="fuel_name1" type="checkbox" id="fuel_name1" value="Petrol" onclick="myFunction()">
          <label for="exampleInputEmail1">Petrol</label> &nbsp;
          <input name="fuel_name2" type="checkbox"  id="fuel_name2" value="Octane" onclick="myFunction1()" >
          <label for="exampleInputEmail1">Octane</label> &nbsp;
          <input name="fuel_name3" type="checkbox"  id="fuel_name3"  value="Diesel" onclick="myFunction2()" >
          <label for="exampleInputEmail1">Diesel</label>
          </center>
        </div>


        <div class="form-group col-6">
          <label for="exampleInputEmail1">Fuel Station Name</label>
          <input name="stn_name" type="text" class="form-control" id="stn_name"  aria-describedby="emailHelp" >
        </div>

        <div class="form-group col-6">
          <label for="exampleInputEmail1">Fuel Station Phone</label>
          <input name="stn_phn" type="text" class="form-control" id="stn_phn"  aria-describedby="emailHelp" >
        </div>

       
      </div>

      
           <div class="form-group col-6">
             <label for="exampleInputCampus">Area</label>
             <input name="area" type="text" class="form-control" id="area"  aria-describedby="emailHelp" >

           </div>
           
          <div class="form-group">
             <label for="exampleFormControlTextarea1">Map URL</label> <br>
             <input name="map_url" type="text" class="form-control" id="map_url"  aria-describedby="emailHelp" >
           </div>
           <div id="text" style="display:none"  class="form-group">
           <label for="exampleFormControlTextarea1">Petrol Price</label> <br>
           <input name="fuel1_price" type="text" id="fuel1_price" class="form-control"  aria-describedby="emailHelp" >
            </div>

            <div id="text1" style="display:none"  class="form-group">
           <label for="exampleFormControlTextarea1">Octane Price</label> <br>
           <input name="fuel2_price" type="text" class="form-control"  aria-describedby="emailHelp" >
            </div>

            <div id="text2" style="display:none"  class="form-group">
           <label for="exampleFormControlTextarea1">Diesel Price</label> <br>
           <input name="fuel3_price" type="text" class="form-control"  aria-describedby="emailHelp" >
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
      url: "{{ route('addfuelstation.index') }}",
      data: {category:category}
    },
    columns: [
      {
        data: 'owner_name',
        name: 'owner_name'
      },
      {
        data: 'stn_name',
        name: 'stn_name'
      },
       {
        data: 'stn_phn',
        name: 'stn_phn'
      },
      {
        data: 'area',
        name: 'area'
      },
      
      {
        data: 'action',
        name: 'action',
        orderable: false
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
      action_url = "{{ route('addfuelstation.store') }}";
    }

    if($('#action').val() == 'Edit')
    {
      action_url = "{{ route('addfuelstation.update') }}";
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
           alert('Fuel Station Added successfully.');
           
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
      url :"addfuelstation/"+id+"/edit",
      dataType:"json",
      success:function(data)
      {
        $('#stn_name').val(data.result.stn_name);
        $('#stn_phn').val(data.result.stn_phn);
        $('#fuel_name1').val(data.result.fuel_name1);
        $('#fuel_name2').val(data.result.fuel_name2);
        $('#fuel_name3').val(data.result.fuel_name3);
        $('#fuel1_price').val(data.result.fuel1_price);
        $('#fuel2_price').val(data.result.fuel2_price);
        $('#fuel3_price').val(data.result.fuel3_price);
        $('#area').val(data.result.area);
        $('#map_url').val(data.result.map_url);
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
      url:"addfuelstation/destroy/"+user_id,
      beforeSend:function(){
        $('#ok_button').text('Deleting...');
      },
      success:function(data)
      {
        setTimeout(function(){
          $('#confirmModal').modal('hide');
          $('#user_table').DataTable().ajax.reload();
          alert('Data Deleted');
        }, 2000);
      }
    })
  });

});

</script>

   
@endsection
