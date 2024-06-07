<x-admin>
    @section('title','Edit collection')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Collection</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.collection.index') }}" class="btn btn-info btn-sm">Back</a>
                        </div>
                    </div>
                    <form class="needs-validation" novalidate action="{{ route('admin.collection.update', $data) }}"
                        method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="edit_id" value="{{ $data->id }}">
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
                                        <label for="category">Category</label>
                                        <select name="category" id="category" class="form-control" required>
                                            <option value="" selected disabled>Select category</option>
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
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                        <x-error>image</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="Pdf" class="form-label">Pdf</label>
                                        <input type="file" name="pdf" id="Pdf" class="form-control">
                                        <x-error>pdf</x-error>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <button type="button" class="btn btn-default" data-toggle="modal"
                                        data-target="#modal-default">
                                        View Image
                                    </button>
                                </div>
                                <div class="col-lg-6">
                                    <button type="button" class="btn btn-default" data-toggle="modal"
                                        data-target="#ViewPdf">View PDF</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Image Modal --}}
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
                    <img src="{{ asset('collection-image/' . $data->image) }}" alt="" class="w-full modal-img">
                    <span class="text-muted">If you want to change image just add new image otherwise leave it.</span>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    {{-- Pdf Modal --}}
    <div class="modal fade" id="ViewPdf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="{{ asset('collection-pdf/' . $data->pdf) }}" frameborder="0" class="w-full"></iframe>
                    <span class="text-muted">If you want to change pdf just add new pdf otherwise leave it.</span>
                </div>
            </div>
        </div>
    </div>
    @section('js')
        <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @endsection
</x-admin>
