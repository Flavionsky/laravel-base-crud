<header class="container">
    <nav class="row d-flex justify-content-end mt-3 mb-3">
        <form class="col-6 d-flex" action="{{ route('bookings.index') }}" method="get">
            @csrf
            <input class="form-control mr-sm-2" type="search" placeholder="cerca. . ." name="filter" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Cerca</button>
        </form>
    </nav>
</header>