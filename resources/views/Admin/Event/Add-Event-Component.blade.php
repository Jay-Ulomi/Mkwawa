<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Add Event</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('Admin') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a>Forms</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Add Event</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5>All form elements <small>With custom checkboxes and radio elements.</small></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#" class="dropdown-item">Config option 1</a></li>
                        <li><a href="#" class="dropdown-item">Config option 2</a></li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Title:</label>
                        <div class="col-sm-10"><input type="text" name="title" class="form-control" required></div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Content 1:</label>
                        <div class="col-sm-10"><textarea name="content1" class="form-control"></textarea></div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image 1:</label>
                        <div class="col-sm-10"><input type="file" name="image1" class="form-control"></div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image 2:</label>
                        <div class="col-sm-10"><input type="file" name="image2" class="form-control"></div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Subtitle:</label>
                        <div class="col-sm-10"><input type="text" name="subtitle" class="form-control"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Content 2:</label>
                        <div class="col-sm-10"><textarea name="content2" class="form-control"></textarea></div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image 3:</label>
                        <div class="col-sm-10"><input type="file" name="image3" class="form-control"></div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Subtitle 2:</label>
                        <div class="col-sm-10"><input type="text" name="subtitle2" class="form-control"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Content 3:</label>
                        <div class="col-sm-10"><textarea name="content3" class="form-control"></textarea></div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Content 4:</label>
                        <div class="col-sm-10"><textarea name="content4" class="form-control"></textarea></div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Additional Images:</label>
                        <div class="col-sm-10"><input type="file" name="additional_images[]" class="form-control image-input"  accept="image/*"></div>
                    </div>

                    <div id="image-fields"></div>

                    <button type="button" id="add-image" class="btn btn-secondary">Add More Images</button>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-white btn-sm" type="reset">Cancel</button>
                            <button class="btn btn-primary btn-sm" type="submit">Create Event</button>
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
                <label class="col-sm-2 col-form-label">Image:</label>
                <div class="col-sm-10">
                    <input type="file" name="additional_images[]" class="form-control image-input" accept="image/*">
                </div>
            `;
            imageFieldsContainer.appendChild(newField);
        }

        // Add event listener to the button
        addImageButton.addEventListener('click', addImageInput);

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
