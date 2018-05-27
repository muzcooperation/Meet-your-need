@extends('admin.layouts.master')
@section('title')
Restaurants
@endsection

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Restaurants Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Restaurants Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	<div class="container">
		<div class="card card-primary card-outline">
	        <div class="card-header">
	            <div class="input-group input-group-sm justify-content-end">
	                <a href="" class="btn btn-info">
	                    <i class="fa fa-plus"></i> Create New directory
	                </a>
	            </div>
	        </div>
	        <div class="card-body">
				
				<table class="table table-responsive table-hover product-table table-striped" id="dealerTable">
                        <thead style="text-align:center;">
                            <th style="display: none">order</th>
                            <th>UUID</th>
                            <th>Name</th>
                            <th style="width:10%;">Email</th>
                            <th>Manufacturer</th>
                            <th>Enroll Date</th>
                            <th>Last Order Date</th>
                            <th>Status</th>
                            <th>Action</th>
                            <!-- <th>Resend Welcome Email</th> -->
                            <th>Launch Maintenance</th>
                            <th>View Online Office</th>
                            <!--  <th>Enrol Date</th> -->
                        </thead>
                        <tbody style="text-align:center;">
                            <tr>
                                <td style="display: none">updated_at </td>
                                <td>id</td>
                                <td>fname lname</td>
                                <td>email </td>
                                <td>manufacture</td>
                                <td>12-2-2</td>
                                <td>22-14-2</td>

                                <td >  
                                    <button type="button" class="btn btn-sm btn-toggle activeMdStatus active" id="{{'active'}}" data-id="2" name="activeStatus" data-msg="you want to deactivate this user" data-toggle="button" aria-pressed="false" autocomplete="off">
                                        <div class="handle"></div>
                                    </button>
                                </td>
                                <td>
                                    <a href=""><i class="fa fa-pencil" aria-hidden="true"></i></a>
									<a style="padding-left:5px;cursor:pointer;" class="confirmationMessage"
									data-name="moveToArchiveMd/" data-msg="you want to archive this user"  data-id="2"><i class="fa fa-lg fa-archive" style="color:#1c669c;"></i> </a>
                                </td>

                                <td>
                                    <a href=""><i class="fa fa-lg  fa-address-book-o" style="color:red;cursor: pointer; "></i></a>
                                </td>

	                            <td>
	                                <a target="_blank" href=""><i class="fa fa-lg  fa-user" style="color:green;cursor: pointer; "></i></a>
	                            </td>
                            </tr><tr>
                                <td style="display: none">updated_at </td>
                                <td>id</td>
                                <td>fname lname</td>
                                <td>email </td>
                                <td>manufacture</td>
                                <td>12-2-2</td>
                                <td>22-14-2</td>

                                <td >  
                                    <button type="button" class="btn btn-sm btn-toggle activeMdStatus active" id="{{'active'}}" data-id="2" name="activeStatus" data-msg="you want to deactivate this user" data-toggle="button" aria-pressed="false" autocomplete="off">
                                        <div class="handle"></div>
                                    </button>
                                </td>
                                <td>
                                    <a href=""><i class="fa fa-pencil" aria-hidden="true"></i></a>
									<a style="padding-left:5px;cursor:pointer;" class="confirmationMessage"
									data-name="moveToArchiveMd/" data-msg="you want to archive this user"  data-id="2"><i class="fa fa-lg fa-archive" style="color:#1c669c;"></i> </a>
                                </td>

                                <td>
                                    <a href=""><i class="fa fa-lg  fa-address-book-o" style="color:red;cursor: pointer; "></i></a>
                                </td>

	                            <td>
	                                <a target="_blank" href=""><i class="fa fa-lg  fa-user" style="color:green;cursor: pointer; "></i></a>
	                            </td>
                            </tr><tr>
                                <td style="display: none">updated_at </td>
                                <td>id</td>
                                <td>fname lname</td>
                                <td>email </td>
                                <td>manufacture</td>
                                <td>12-2-2</td>
                                <td>22-14-2</td>

                                <td >  
                                    <button type="button" class="btn btn-sm btn-toggle activeMdStatus active" id="{{'active'}}" data-id="2" name="activeStatus" data-msg="you want to deactivate this user" data-toggle="button" aria-pressed="false" autocomplete="off">
                                        <div class="handle"></div>
                                    </button>
                                </td>
                                <td>
                                    <a href=""><i class="fa fa-pencil" aria-hidden="true"></i></a>
									<a style="padding-left:5px;cursor:pointer;" class="confirmationMessage"
									data-name="moveToArchiveMd/" data-msg="you want to archive this user"  data-id="2"><i class="fa fa-lg fa-archive" style="color:#1c669c;"></i> </a>
                                </td>

                                <td>
                                    <a href=""><i class="fa fa-lg  fa-address-book-o" style="color:red;cursor: pointer; "></i></a>
                                </td>

	                            <td>
	                                <a target="_blank" href=""><i class="fa fa-lg  fa-user" style="color:green;cursor: pointer; "></i></a>
	                            </td>
                            </tr><tr>
                                <td style="display: none">updated_at </td>
                                <td>id</td>
                                <td>fname lname</td>
                                <td>email </td>
                                <td>manufacture</td>
                                <td>12-2-2</td>
                                <td>22-14-2</td>

                                <td >  
                                    <button type="button" class="btn btn-sm btn-toggle activeMdStatus active" id="{{'active'}}" data-id="2" name="activeStatus" data-msg="you want to deactivate this user" data-toggle="button" aria-pressed="false" autocomplete="off">
                                        <div class="handle"></div>
                                    </button>
                                </td>
                                <td>
                                    <a href=""><i class="fa fa-pencil" aria-hidden="true"></i></a>
									<a style="padding-left:5px;cursor:pointer;" class="confirmationMessage"
									data-name="moveToArchiveMd/" data-msg="you want to archive this user"  data-id="2"><i class="fa fa-lg fa-archive" style="color:#1c669c;"></i> </a>
                                </td>

                                <td>
                                    <a href=""><i class="fa fa-lg  fa-address-book-o" style="color:red;cursor: pointer; "></i></a>
                                </td>

	                            <td>
	                                <a target="_blank" href=""><i class="fa fa-lg  fa-user" style="color:green;cursor: pointer; "></i></a>
	                            </td>
                            </tr><tr>
                                <td style="display: none">updated_at </td>
                                <td>id</td>
                                <td>fname lname</td>
                                <td>email </td>
                                <td>manufacture</td>
                                <td>12-2-2</td>
                                <td>22-14-2</td>

                                <td >  
                                    <button type="button" class="btn btn-sm btn-toggle activeMdStatus active" id="{{'active'}}" data-id="2" name="activeStatus" data-msg="you want to deactivate this user" data-toggle="button" aria-pressed="false" autocomplete="off">
                                        <div class="handle"></div>
                                    </button>
                                </td>
                                <td>
                                    <a href=""><i class="fa fa-pencil" aria-hidden="true"></i></a>
									<a style="padding-left:5px;cursor:pointer;" class="confirmationMessage"
									data-name="moveToArchiveMd/" data-msg="you want to archive this user"  data-id="2"><i class="fa fa-lg fa-archive" style="color:#1c669c;"></i> </a>
                                </td>

                                <td>
                                    <a href=""><i class="fa fa-lg  fa-address-book-o" style="color:red;cursor: pointer; "></i></a>
                                </td>

	                            <td>
	                                <a target="_blank" href=""><i class="fa fa-lg  fa-user" style="color:green;cursor: pointer; "></i></a>
	                            </td>
                            </tr>
                        </tbody>
                    </table>

	        </div>

	    </div>
    </div>
    @endsection