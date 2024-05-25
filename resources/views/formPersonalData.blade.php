@extends('layoutAdmin')
@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Select2 (Default Theme)</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ url('prosesInput') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label>Nick Name</label>
                                <input type="text" class="form-control" name="nick_name">
                            </div>
                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="number" class="form-control" name="telephone">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="mail">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                            <!-- /.form-group -->
                            <button type="submit" class="btn btn-primary">submit</button>
                        </div>
                        
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.row -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information
                about
                the plugin.
            </div>
        </div>
        <!-- /.card -->

        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
