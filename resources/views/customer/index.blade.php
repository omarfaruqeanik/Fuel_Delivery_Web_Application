@extends('admin.layouts.master')
@section('title')
Customer Dashboard
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
        
     
        
        
        <div class="container-fluid">
            <div class="block-header" align="center">
                 <br />
                           <div class="alert alert-success" style="border-radius: 10px;">
   <h1>Logged In As Customer</h1>
  </div>
                <!--<h1>WELCOME TO OUR SYSTEM</h1>-->
  <marquee> <h3>Design & Developed by Omar </h3></marquee>
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