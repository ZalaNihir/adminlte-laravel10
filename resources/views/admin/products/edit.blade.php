<x-admin>
    @section('title','Edit Product')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Product</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.product.index') }}" class="btn btn-info btn-sm">Back</a>
                        </div>
                    </div>
                    <form class="needs-validation" novalidate action="{{ route('admin.product.update', $data) }}"
                        method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" id="name" value="{{ $data->name }}"
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
                                                <option {{ $data->collection_id == $collect->id ? 'selected' : '' }}
                                                    value="{{ $collect->id }}">{{ $collect->name }}</option>
                                            @endforeach
                                        </select>
                                        <x-error>collection</x-error>
                                        @error('collection')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="category" class="form-label">Category</label>
                                        <select name="category" id="category" class="form-control">
                                            <option value="" selected disabled>select the category</option>
                                            @foreach ($category as $cat)
                                                <option {{ $data->category_id == $cat->id ? 'selected' : '' }}
                                                    value="{{ $cat->id }}">{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                        <x-error>category</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="subcategory" class="form-label">Sub Category</label>
                                        <select name="subcategory" id="subcategory" class="form-control">
                                            @foreach ($subcategory as $item)
                                                <option {{ $data->sub_category_id == $item->id ? 'selected' : '' }}
                                                    value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <x-error>subcategory</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                        <a href="javascript:void(0)" data-toggle="modal"
                                            data-target="#modal-default">View Image</a>
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
                                <div class="col-lg-12">
                                    <div class="row">
                                        @foreach ($productImages as $productImage)
                                            <div class="col-lg-2">
                                                <a href="{{ route('admin.remove.image', $productImage->id) }}"
                                                    onclick="return confirm('Are you sure want to remove image?')">
                                                    <img src="{{ asset('product-slider-images/' . $productImage->image) }}"
                                                        alt="" class="slider-img">
                                                </a>
                                            </div>
                                        @endforeach
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
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">View Image</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('product-image/' . $data->image) }}" alt="" class="w-full modal-img">
                    <span class="text-muted">If you want to change image just add new image otherwise leave it.</span>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    @section('css')
        <style>
            img.w-full.modal-img {
                width: 100%;
                height: auto;
                object-fit: cover;
            }
            img.slider-img {
                width: 100px;
                height: auto;
                object-fit: cover;
            }
        </style>
    @endsection
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
                        if (data) {
                            $("#submit").removeAttr('disabled', 'disabled');
                            $("#submit").html('Save');
                            $("#subcategory").html(data);
                        }
                    }
                });
            });
        </script>
    @endsection
</x-admin>
