@extends('layout.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Invoices</h1>
        <a href="{{ route('invoice.create') }}" class="btn btn-secondary">Add Invoice</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-success">
            <tr>
                <th>#</th>
                <th>Invoice Number</th>
                <th>Total Amount</th>
                <th>Total Paid</th>
                <th>Description</th>
                <th>Paid</th>
                <th>Action</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($invoice->count() > 0)
                @foreach($invoice as $invoice)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $invoice->invoice_number}}</td>
                        <td class="align-middle">{{ $invoice->total_amount }}</td>
                        <td class="align-middle">{{ $invoice->totalPaid }}</td>
                        <td class="align-middle">{{ $invoice->description }}</td>
                        <td class="align-middle">{{ $invoice->status ? 'Yes' : 'No' }}</td>
                        <td class="align-middle">
                            <div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
                                <a href="{{ route('invoice.show', $invoice->id) }}" type="button" class="btn btn-outline-primary">Details</a>
                                <a href="{{ route('invoice.edit', $invoice->id) }}" type="button" class="btn btn-outline-secondary">Edit</a>
                            </div>
                        </td>
                        <td class="align-middle">
                            <form action="{{ route('invoice.destroy', $invoice->id) }}" method="POST" type="button" class="btn btn-outline-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger">Delete</button>
                            </form>
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
