@extends('admin.layouts.master')
@section('title')
Admin Dashboard
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        
              <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$totalfaculty}}</h3>

              <p>Registered Station</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$totaladmin}}</h3>

              <p>Total Admin</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$totaluser}}</h3>

              <p>Registered Customer</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3>{{$totalproposal}}</h3>

              <p>Total Sale</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
          <!-- small box -->
         
      </div>
      <!-- /.row -->
        
        
        <div class="container-fluid">
            <div class="block-header" align="center">
                 <br />
                           <div class="alert alert-success" style="border-radius: 10px;">
   <h1>Logged In As Admin</h1>
  </div>
                <!--<h1>WELCOME TO OUR SYSTEM</h1>-->
  <marquee> <h3>Design & Developed by Washim Akram, Md. Shohel Arman, Asif Khan Shakir </h3></marquee>
            </div>
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p align="center">{{$message}}</p>
  </div>
  @endif
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.2.0
    </div>
    <strong>Copyright &copy; 2023 <a href="#">Omar</a>.</strong> All rights
    reserved.

    @endsection