<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Add Category</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('Admin')}}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a>Forms</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Add Category</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
    </div>
</div>
@if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5>Category Details</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>

                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Title:</label>
                        <div class="col-sm-10"><input type="text" name="name" class="form-control" required></div>
                    </div>

                    <div class="hr-line-dashed"></div>


                    <div class="form-group row">
                        <div class="col-sm-4 col-sm-offset-2 justify-between">
                            <button class="btn btn-danger btn-sm" type="reset">Cancel</button>
                            <button class="btn btn-primary btn-sm" type="submit">Create Catecory</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
