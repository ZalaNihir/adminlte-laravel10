<x-admin>
    @section('title')
        {{ 'Create Product' }}
    @endsection
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create Product</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.product.index') }}" class="btn btn-info btn-sm">Back</a>
                        </div>
                    </div>
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    <form class="needs-validation" novalidate action="{{ route('admin.product.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                                            class="form-control" required>
                                            <x-error>name</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="collection">Collection</label>
                                        <select name="collection" id="collection" class="form-control" required>
                                            <option value="" selected disabled>Select collection</option>
                                            @foreach ($collection as $collect)
                                                <option {{ old($collect->id) == $collect->id ? 'selected' : '' }}
                                                    value="{{ $collect->id }}">{{ $collect->name }}</option>
                                            @endforeach
                                        </select>
                                        <x-error>collection</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="category" class="form-label">Category</label>
                                        <select name="category" id="category" class="form-control">
                                            <option value="" selected disabled>select the category</option>
                                            @foreach ($category as $cat)
                                                <option {{ old($cat->id) == $cat->id ? 'selected' : '' }}
                                                    value="{{ $cat->id }}">{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="subcategory" class="form-label">Sub Category</label>
                                        <select name="subcategory" id="subcategory" class="form-control">
                                            <option value="" selected disabled>select the subcategory</option>
                                        </select>
                                        <x-error>subcategory</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" name="image" id="image" class="form-control"
                                            required>
                                        <x-error>image</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="product-images" class="form-label">Product Slider Images</label>
                                        <input type="file" name="product_images[]" id="product-images"
                                            class="form-control" multiple>
                                            <x-error>product_images</x-error>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" id="submit" class="btn btn-primary float-right">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @section('js')
        <script>
            $("#category").on('change', function() {
                let category = $("#category").val();
                $("#submit").attr('disabled', 'disabled');
                $("#submit").html('Please wait');
                $.ajax({
                    url: "{{ route('admin.getsubcategory') }}",
                    type: 'GET',
                    data: {
                        category: category,
                    },
                    success: function(data) {
                        $("#submit").removeAttr('disabled', 'disabled');
                        $("#submit").html('Save');
                        if (data) {
                            $("#subcategory").html(data);
                        }
                    }
                });
            });
        </script>
    @endsection
</x-admin>
