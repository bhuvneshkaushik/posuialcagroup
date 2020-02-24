@extends('master')
@section('title')
    <title>Category Page</title>
@endsection

@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">

        {{-- title page --}}
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0">Data Category</h4>
                        </div>
                        
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end page-title-box -->
            </div>
        </div> 
        {{-- end title page --}}

        <div class="row">
           <div class="col-md-12">
               <div class="card m-b-30">
                   <div class="card-body">
                       <h4 class="mt-0 header-title">Category Management</h4>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Elektronik</td>
                                        <td>TV Samsung</td>
                                        <td><a href="#" class="btn btn-sm-6 btn-info"><i class="fas fa-edit"></i> Edit</a> <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i>  Delete</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> 
               </div>
           </div>
        </div> 
        <!-- end page title -->

    </div><!-- container fluid -->

</div>
@endsection

@section('jquery')
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

@endsection

@section('appjs')
<script src="assets/pages/dashboard.int.js"></script>        

<!-- App js -->
<script src="assets/js/app.js"></script>
@endsection