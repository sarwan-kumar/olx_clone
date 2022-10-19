@extends('admin.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-6">
                        <h1>{{ $_GET['search'] ?? 'All' }} Users</h1>
                    </div>



                </div>

            </div><!-- /.container-fluid -->
        </section>



        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <!-- /.card-header -->
                        <div class="card-body"  style="overflow-x: auto;">

                            <table id="example1" class="table table-bordered table-striped" >

                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Full Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Sex</th>
                                        @if (isset($_GET['search']) && $_GET['search'] == 'Carbajar')
                                            <th>ID Card</th>
                                            <th>Registration Certificate</th>
                                        @endif
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($Users as $item)
                                        <tr>




                                            <td>{{ $item->username }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->mobile }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->sex }}</td>
                                            @if (isset($_GET['search']) && $_GET['search'] == 'Carbajar')
                                                <td><img src='{{ url('/') . $item->id_card }}'
                                                        style="width:200px;height:200px" /></td>
                                                <td><img src='{{ url('/') . $item->registration }}'
                                                        style="width:200px;height:200px" /> </td>
                                            @endif
                                            <td>
                                                <div class="row" style="display: flex; justify-content: space-evenly; ">

                                                    <!--<a type="button" class="btn bg-gradient-primary">Edit</button>-->
                                                    <a href="{{ url('delete_user/' . $item->id) }}"
                                                        class="btn bg-gradient-danger">Delete</a>
                                                    <br>
                                                    @if (isset($_GET['search']) && $_GET['search'] == 'Carbajar' && $item->verified == 0)
                                                        <a href="{{ url('Verify/' . $item->id) }}"
                                                            class="btn bg-gradient-warning">Verify Profile</a>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach



                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Username</th>
                                        <th>Full Name</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>Sex</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
@endsection
