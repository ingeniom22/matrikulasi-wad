@vite('resources/css/app.css')
<div class="h-screen flex justify-center items-center">
    
    <form action="{{ route('purchase.store') }}" method="POST" class="form">
        @csrf
        <div class="mb-2">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="input input-bordered flex items-center gap-2">
        </div>
        <div class="mb-2">
            <label for="count">Count</label>
            <input type="number" name="count" id="count" class="input input-bordered flex items-center gap-2">
        </div>
        <div class="mb-2">
            <label for="price_each">Price Each</label>
            <input type="number" name="price_each" id="price_each" class="input input-bordered flex items-center gap-2">
        </div>

        <div class="btn mb-2 flex">
            <button type="submit">Add Purchase</button>
        </div>

    </form>


</div>