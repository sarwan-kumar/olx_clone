@extends('admin.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Product</h1>
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
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Contact</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Address</th>
                                        <th>Photos</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>I Phone</td>
                                        <td>Category</td>
                                        <td>1050 ₹
                                        </td>
                                        <td>Description of the product goes here</td>
                                        <td> 0132465798</td>
                                        <td>Sirsa</td>
                                        <td>Haryana</td>
                                        <td>
                                            <address> Street no. 5 sirsa</address>
                                        </td>
                                        <td><img src="" alt="">Image</td>
                                        <td>
                                            <div class="row" style="display: flex; justify-content: space-evenly; ">

                                                <button type="button"
                                                    class="btn btn-block bg-gradient-primary">Edit</button>
                                                <button type="button"
                                                    class="btn btn-block bg-gradient-danger">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>I Phone</td>
                                        <td>Category</td>
                                        <td>1050 ₹
                                        </td>
                                        <td>Description of the product goes here</td>
                                        <td> 0132465798</td>
                                        <td>Sirsa</td>
                                        <td>Haryana</td>
                                        <td>
                                            <address> Street no. 5 sirsa</address>
                                        </td>
                                        <td><img src="" alt="">Image</td>
                                        <td>
                                            <div class="row" style="display: flex; justify-content: space-evenly; ">

                                                <button type="button"
                                                    class="btn btn-block bg-gradient-primary">Edit</button>
                                                <button type="button"
                                                    class="btn btn-block bg-gradient-danger">Delete</button>
                                            </div>
                                        </td>
                                    </tr>

                                   
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Contact</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Address</th>
                                        <th>Photos</th>
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
