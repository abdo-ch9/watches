
<div class="container">
    <h1>Edit Order</h1>
    <div class="mb-3">
        <label class="form-label">Phone Number</label>
        <input type="text" name="phone_number" class="form-control" value="{{ $order->phone_number }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">City</label>
        <input type="text" name="city" class="form-control" value="{{ $order->city }}" required>
    </div>
    <form action="{{ route('orders.update', $order) }}" method="POST">

        @csrf @method('PUT')
        <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="text" name="phone_number" class="form-control" value="{{ $order->phone_number }}" required>
        </div>
    <div class="mb-3">
        <label class="form-label">City</label>
        <input type="text" name="city" class="form-control" value="{{ $order->city }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Phone Number</label>
        <input type="text" name="phone_number" class="form-control" value="{{ $order->phone_number }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Update Order</button>
</form>
<div class="ms-4 text-light fw-bold" style="margin-top: 10px;">1 (800) 862 6772 </div>

</div>
