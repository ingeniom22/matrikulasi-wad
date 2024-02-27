@vite('resources/css/app.css')
<div class="mx-4 my-2">
    <a href="{{ route('purchase.create') }}" class="btn bg-slate-500 mb-4">Add Purchase</a>

    <table class="table table-zebra bg-slate-400 text-center">
        <thead>
            <tr>
                <th>Created At</th>
                <th>Updated At</th>
                <th>ID</th>
                <th>Item name</th>
                <th>Count</th>
                <th>Price Each</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($purchases as $purchase)
            <tr class="bg-base-200">
                <td>{{$purchase->created_at}}</td>
                <td>{{$purchase->updated_at}}</td>
                <td>{{$purchase->id}}</td>
                <td>{{$purchase->name}}</td>
                <td>{{$purchase->count}}</td>
                <td>{{$purchase->price_each}}</td>
                <td>
                    <div role="group">
                        <a href="{{ route('purchase.edit', $purchase->id) }}" class="btn btn-warning text-white">Edit</a>
                        <form action="{{ route('purchase.destroy', $purchase->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-error text-white">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>