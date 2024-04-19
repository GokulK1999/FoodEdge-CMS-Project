@extends('layout.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Invoices</h1>
        <a href="{{ route('invoice.create') }}" class="btn btn-primary">Add Receipt</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Item</th>
                <th>Total Paid</th>
                <th>Description</th>
                <th>Paid</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($invoice->count() > 0)
                @foreach($invoice as $invoice)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $invoice->name }}</td>
                        <td class="align-middle">{{ $invoice->item }}</td>
                        <td class="align-middle">{{ $invoice->totalPaid }}</td>
                        <td class="align-middle">{{ $invoice->description }}</td>
                        <td class="align-middle">{{ $invoice->paid ? 'Yes' : 'No' }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('invoice.show', $invoice->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('invoice.edit', $invoice->id) }}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('invoice.destroy', $invoice->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="7">No receipts found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
