@extends('layout_admin.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
			<div class="col-lg-12">
				<table class="table table-responsive table-bordered table-stripped" width="100%">
					<thead>
					<tr>
						<th>#</th>
						<th>Full Name</th>
						<th>Email</th>
						<th>Password</th>
						<th>Phone</th>
						<th>Adress</th>
                        <th>Acction</th>
					</tr>
					</thead>
					<tbody>
						<!-- binding data from controller -->
						@foreach($users as $k => $user)
						<tr>
						<td>{{ $k+1 }}</td>
						<td>{{ $user->full_name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->password }}</td>
						<td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>
						<td>
							<a class="btn btn-success" href="#">Edit</a>
							<a class="btn btn-danger" href="#">Remove</a>
						</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
