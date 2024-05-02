@extends('layout.app')

@section('body')
    <h1 class="mb-0">Customer Details</h1>
    <hr />

    <!-- Wrap the receipt details content with the div element -->
    <div id="invoiceDetails">
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $customer->name }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Membership</label>
                <input type="text" name="membership" class="form-control" placeholder="Paid" value="{{ $customer->membership }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Name" value="{{ $customer->address }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phone_number" class="form-control" placeholder="Item" value="{{ $customer->phone_number }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Details</label>
                <textarea class="form-control" name="details" placeholder="details" readonly>{{ $customer->details }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Created At</label>
                <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $customer->created_at }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Updated At</label>
                <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $customer->updated_at }}" readonly>
            </div>
        </div>
        <div class="col text-center">
            @if ($customer->photo)
                <img src="{{ asset($customer->photo) }}" alt="{{ $customer->photo }} Photo" class="img-thumbnail" style="width: 60%; height: 60%;">
            @else
                <p>No photo uploaded.</p>
            @endif
        </div>
    </div>
@endsection
