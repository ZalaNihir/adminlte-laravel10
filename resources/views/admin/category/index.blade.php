<x-admin>
    @section('title')
        {{ 'Category' }}
    @endsection
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Category Table</h3>
            <div class="card-tools">
                <a href="{{ route('admin.category.create') }}" class="btn btn-sm btn-info">New</a>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $cat)
                        <tr>
                            <td>{{ $cat->name }}</td>
                            <td><a href="{{ route('admin.category.edit', encrypt($cat->id)) }}"
                                    class="btn btn-sm btn-primary">Edit</a></td>
                            <td>
                                <form action="{{ route('admin.category.destroy', encrypt($cat->id)) }}" method="POST" onsubmit="return confirm('Are sure want to delete?')">
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
</x-admin>
