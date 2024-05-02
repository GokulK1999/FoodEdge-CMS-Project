<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand p-3 text-bg-dark" href="#">Top</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('invoice.index') }}"> Invoice</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('receipt.index') }}"> Receipt</a>
                </li>
            @if(Auth::check() && (Auth::user()->role == 1 || Auth::user()->role == 2))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.index') }}">Customer</a>
                </li>
            @elseif(Auth::check() && Auth::user()->role == 3)
                @if(Auth::user()->customer) <!-- Check if the user has a customer profile -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.show', Auth::user()->customer->id) }}">View Customer Profile</a>
                    </li>
                @else
                    <li class="nav-item">
                        <form action="{{ route('customer.create') }}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-primary ms-5 me-5">Create Customer Profile</button>
                        </form>
                    </li>
                @endif
            @endif
            </ul>
        </div>
    </div>
</nav>
