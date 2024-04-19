@extends('layout.app')

@section('body')
    <h1 class="mb-0">Invoice Details</h1>
    <hr />

    <!-- Wrap the receipt details content with the div element -->
    <div id="invoiceDetails">
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $invoice->name }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Item</label>
                <input type="text" name="item" class="form-control" placeholder="Item" value="{{ $invoice->item }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Total Paid</label>
                <input type="text" name="totalPaid" class="form-control" placeholder="Total Amount" value="{{ $invoice->totalPaid }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Description" readonly>{{ $invoice->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Paid</label>
                <input type="text" name="paid" class="form-control" placeholder="Paid" value="{{ $invoice->paid ? 'Yes' : 'No' }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Created At</label>
                <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $invoice->created_at }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Updated At</label>
                <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $invoice->updated_at }}" readonly>
            </div>
        </div>
    </div>

    <!-- Print button -->
    <button id="printButton" class="btn btn-primary">Print invoice</button>

    <!-- Include html2pdf library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

    <script>
        document.getElementById('printButton').addEventListener('click', function() {

            const invoiceDetails = document.getElementById('invoiceDetails');

            // Use html2pdf to convert HTML to PDF
            html2pdf().from(invoiceDetails).save();
        });
    </script>
@endsection
