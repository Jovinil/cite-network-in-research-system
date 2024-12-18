@extends('layouts.app')

@section('content')
<style>
    #pagination-controls button {
    margin: 5px;
    padding: 5px 10px;
    cursor: pointer;
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    border-radius: 3px;
}
#pagination-controls button.active {
    background-color: #007bff;
    color: white;
    font-weight: bold;
}
</style>
        <!-- Content Header (Page header) -->
        <div class="app-content-header">
            <!-- Display success message -->
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <h3 class="mb-0">Search Result</h3>
        </div>

        <section class="content w-100 px-4">
            <div class="card card-solid p-4">

                <table id="student-table" class="table" style="width:100%">
                    <thead>
                        <tr>
                            <th>Entries for: first name: "" last name: "searched name"</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 100; $i++)
                        <tr>
                            <td>
                                <div class="row item-container" id="item-container" >
                                    <div class="col-10" >
                                        <p class="mb-0 fw-light">Article</p>
                                        <p class="mb-0">test {{ $i }} hello</p>
                                        <p class="mb-0">author names</p>
                                        <div class="container-fluid p-0 d-flex">
                                            <a href="#" class="btn btn-link disabled p-0">Research Title ,</a> <p> 2024, 32(12), pp. 941–949</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        {{ $i }} Citations
                                    </div>
                                </div>
                            </td>

                        </tr>
                        @endfor

                    </tbody>
                </table>
            </div>
            {{-- card --}}
        </section>
        {{-- content --}}

@endsection

@push('scripts')
<script src="{{ asset('custom-scripts/search-result.js') }}"></script>
<script>
    $(document).ready(function () {
    // Initialize DataTable
    $('#student-table').DataTable({
        paging: true,          // Enable pagination
        searching: true,       // Enable search functionality
        ordering: false,       // Disable column sorting
        lengthMenu: [5, 10, 25, 50],
        // Set default number of rows per page
        language: {
            search: "Search:", // Customize the search label
        }
    });
});

</script>
@endpush
