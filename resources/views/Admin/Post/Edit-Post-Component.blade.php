<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>{{ isset($post) ? 'Edit Post' : 'Add Post' }}</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('Admin') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a>Forms</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>{{ isset($post) ? 'Edit Post' : 'Add Post' }}</strong>
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
                <h5>{{ isset($post) ? 'Edit Post Details' : 'Post Details' }}</h5>
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
                <form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($post))
                        @method('PUT')
                    @endif

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Title:</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" value="{{ isset($post) ? $post->title : '' }}" required>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Content 1:</label>
                        <div class="col-sm-10">
                            <textarea name="content1" class="form-control">{{ isset($post) ? $post->content1 : '' }}</textarea>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image 1:</label>
                        <div class="col-sm-10">
                            <input type="file" name="image1" class="form-control">
                            @if(isset($post) && $post->image1)
                                <img src="{{ asset($post->image1) }}" alt="Image 1" class="img-thumbnail mt-2" width="150">
                            @endif
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Content 2:</label>
                        <div class="col-sm-10">
                            <textarea name="content2" class="form-control">{{ isset($post) ? $post->content2 : '' }}</textarea>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Subtitle 1:</label>
                        <div class="col-sm-10">
                            <input type="text" name="subtitle1" class="form-control" value="{{ isset($post) ? $post->subtitle1 : '' }}">
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Content 3:</label>
                        <div class="col-sm-10">
                            <textarea name="content3" class="form-control">{{ isset($post) ? $post->content3 : '' }}</textarea>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image 2:</label>
                        <div class="col-sm-10">
                            <input type="file" name="image2" class="form-control">
                            @if(isset($post) && $post->image2)
                                <img src="{{ asset($post->image2) }}" alt="Image 2" class="img-thumbnail mt-2" width="150">
                            @endif
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Content 4:</label>
                        <div class="col-sm-10">
                            <textarea name="content4" class="form-control">{{ isset($post) ? $post->content4 : '' }}</textarea>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Subtitle 2:</label>
                        <div class="col-sm-10">
                            <input type="text" name="subtitle2" class="form-control" value="{{ isset($post) ? $post->subtitle2 : '' }}">
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image 3:</label>
                        <div class="col-sm-10">
                            <input type="file" name="image3" class="form-control">
                            @if(isset($post) && $post->image3)
                                <img src="{{ asset($post->image3) }}" alt="Image 3" class="img-thumbnail mt-2" width="150">
                            @endif
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Content 5:</label>
                        <div class="col-sm-10">
                            <textarea name="content5" class="form-control">{{ isset($post) ? $post->content5 : '' }}</textarea>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Note:</label>
                        <div class="col-sm-10">
                            <textarea name="note" class="form-control">{{ isset($post) ? $post->note : '' }}</textarea>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Category:</label>
                        <div class="col-sm-10">
                            <select name="category_id" class="form-control" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ isset($post) && $post->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-danger btn-sm" type="reset">Cancel</button>
                            <button class="btn btn-primary btn-sm" type="submit">{{ isset($post) ? 'Update Post' : 'Create Post' }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
