<x-admin>
    @section('title','Create subcategory')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create Sub Category</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.subcategory.index') }}" class="btn btn-info btn-sm">Back</a>
                        </div>
                    </div>
                    <form class="needs-validation" novalidate action="{{ route('admin.subcategory.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group mb-2">
                                <label for="category" class="form-label">Select category</label>
                                <select name="category" id="category" class="form-control" required>
                                    <option value="" selected disabled>select category</option>
                                    @foreach ($category as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                                <x-error>category</x-error>
                            </div>
                            <div class="form-group">
                                <label for="name">Sub Category Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter category name" required value="{{ old('name') }}">
                            </div>
                            <x-error>name</x-error>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin>
