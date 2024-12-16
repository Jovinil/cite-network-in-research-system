@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <div class="app-content-header">
            <!-- Display success message -->
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <h3 class="mb-0">Dashboard</h3>
        </div>

        <section class="content w-100 px-4">
            <div class="card card-solid p-4">
                 <!-- Div that will hold the chart -->
                <div id="chart_div" style="width: 100%; height: 450px;"></div>
            </div>
            {{-- card --}}
        </section>
        {{-- content --}}

@endsection

@push('scripts')
<script>

</script>
@endpush
