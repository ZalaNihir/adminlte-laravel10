<x-admin>
    @section('title')
        {{ 'Collection' }}
    @endsection
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Collection Table</h3>
            <div class="card-tools">
                <a href="{{ route('admin.collection.create') }}" class="btn btn-sm btn-info">New</a>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $collection)
                        <tr>
                            <td>
                                <img src="{{ asset('collection-image/' . $collection->image) }}"
                                    alt="{{ $collection->name }}" class="img-th" loading="lazy">
                            </td>
                            <td>{{ $collection->name }}</td>
                            <td>{{ $collection->category->name }}</td>
                            <td><a href="{{ route('admin.collection.edit', encrypt($collection->id)) }}"
                                    class="btn btn-sm btn-primary">Edit</a></td>
                            <td>
                                <form action="{{ route('admin.collection.destroy', encrypt($collection->id)) }}"
                                    method="POST" onsubmit="return confirm('Are sure want to delete?')">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer clearfix float-right">
            {!! $data->links() !!}
        </div>
    </div>
    @section('css')
        <style>
            img.img-th {
                height: 25px;
                width: auto;
            }
        </style>
    @endsection
</x-admin>
