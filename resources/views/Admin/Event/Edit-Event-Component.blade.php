<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>{{ isset($event) ? 'Edit Event' : 'Add Event' }}</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('Admin') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a>Forms</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>{{ isset($event) ? 'Edit Event' : 'Add Event' }}</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
    </div>
</div>

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
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
                <h5>{{ isset($event) ? 'Edit Event Details' : 'Event Details' }}</h5>
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
                <form action="{{ isset($event) ? route('events.update', $event->id) : route('events.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($event))
                        @method('PUT')
                    @endif

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Title:</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" value="{{ isset($event) ? $event->title : '' }}" required>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Content 1:</label>
                        <div class="col-sm-10">
                            <textarea name="content1" class="form-control">{{ isset($event) ? $event->content1 : '' }}</textarea>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image 1:</label>
                        <div class="col-sm-10">
                            <input type="file" name="image1" class="form-control">
                            @if(isset($event) && $event->image1)
                                <img src="{{ asset('images/' . $event->image1) }}" alt="Image 1" class="img-thumbnail mt-2" width="150">
                            @endif
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Subtitle 1:</label>
                        <div class="col-sm-10">
                            <input type="text" name="subtitle1" class="form-control" value="{{ isset($event) ? $event->subtitle1 : '' }}">
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Content 2:</label>
                        <div class="col-sm-10">
                            <textarea name="content2" class="form-control">{{ isset($event) ? $event->content2 : '' }}</textarea>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image 2:</label>
                        <div class="col-sm-10">
                            <input type="file" name="image2" class="form-control">
                            @if(isset($event) && $event->image2)
                                <img src="{{ asset('images/' . $event->image2) }}" alt="Image 2" class="img-thumbnail mt-2" width="150">
                            @endif
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Subtitle 2:</label>
                        <div class="col-sm-10">
                            <input type="text" name="subtitle2" class="form-control" value="{{ isset($event) ? $event->subtitle2 : '' }}">
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Content 3:</label>
                        <div class="col-sm-10">
                            <textarea name="content3" class="form-control">{{ isset($event) ? $event->content3 : '' }}</textarea>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image 3:</label>
                        <div class="col-sm-10">
                            <input type="file" name="image3" class="form-control">
                            @if(isset($event) && $event->image3)
                                <img src="{{ asset('images/' . $event->image3) }}" alt="Image 3" class="img-thumbnail mt-2" width="150">
                            @endif
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Content 4:</label>
                        <div class="col-sm-10">
                            <textarea name="content4" class="form-control">{{ isset($event) ? $event->content4 : '' }}</textarea>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div id="image-fields">
                        @if(isset($event) && !empty($event->additional_images))
                            @php
                                $additional_images = json_decode($event->additional_images, true);
                            @endphp

                            @if(is_array($additional_images))
                                @foreach($additional_images as $image)
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Additional Image:</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="additional_images[]" class="form-control image-input" accept="image/*">
                                            <img src="{{ asset('images/' . $image) }}" width="100" height="100" style="margin-top: 10px;">
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        @endif
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-danger btn-sm" type="reset">Cancel</button>
                            <button class="btn btn-primary btn-sm" type="submit">{{ isset($event) ? 'Update Event' : 'Create Event' }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const imageFieldsContainer = document.getElementById('image-fields');
        const addImageButton = document.getElementById('add-image');

        // Function to add new image input field
        function addImageInput() {
            const newField = document.createElement('div');
            newField.classList.add('form-group', 'row');
            newField.innerHTML = `
                <label class="col-sm-2 col-form-label">Additional Image:</label>
                <div class="col-sm-10">
                    <input type="file" name="additional_images[]" class="form-control image-input" accept="image/*">
                </div>
            `;
            imageFieldsContainer.appendChild(newField);
        }

        // Add event listener to the button
        if (addImageButton) {
            addImageButton.addEventListener('click', addImageInput);
        }

        // Handle image previews
        imageFieldsContainer.addEventListener('change', function (e) {
            if (e.target.classList.contains('image-input')) {
                const file = e.target.files[0];
                const reader = new FileReader();
                reader.onload = function (event) {
                    // Create an image element and add it to the DOM
                    const imagePreview = document.createElement('img');
                    imagePreview.src = event.target.result;
                    imagePreview.style.width = '100px';
                    imagePreview.style.height = '100px';
                    imagePreview.style.margin = '10px 0';
                    e.target.parentNode.appendChild(imagePreview);
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>
