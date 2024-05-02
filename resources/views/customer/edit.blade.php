@extends('layout.app')

@section('body')
    <h1 class="mb-0">Edit Customer Profile</h1>
    <hr />
    <form action="{{ route('customer.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $customer->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Photo</label>
                <input type="text" name="photo" class="form-control" placeholder="Photo" value="{{ $customer->photo }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $customer->address }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phone_number" class="form-control" placeholder="Address" value="{{ $customer->phone_number }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Details</label>
                <textarea class="form-control" name="details" placeholder="Details" >{{ $customer->details }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Membership</label>
                <select class="form-select" name="membership">
                    <option value="Basic" @if($customer->membership == 'Basic') selected @endif>Basic</option>
                    <option value="Premium" @if($customer->membership == 'Premium') selected @endif>Premium</option>
                    <option value="None" @if($customer->membership == 'None') selected @endif>None</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
