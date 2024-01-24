<x-admin>
    @section('title')
        {{ 'Product' }}
    @endsection
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Product Table</h3>
            <div class="card-tools">
                <a href="{{ route('admin.product.create') }}" class="btn btn-sm btn-info">New</a>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->subcategory->name }}</td>
                            <td><a href="{{ route('admin.product.edit', encrypt($product->id)) }}"
                                    class="btn btn-sm btn-primary">Edit</a></td>
                            <td>
                                <form action="{{ route('admin.product.destroy', encrypt($product->id)) }}" method="POST" onsubmit="return confirm('Are sure want to delete?')">
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
