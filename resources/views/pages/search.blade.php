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
            <h3 class="mb-0">Search</h3>
        </div>

        <section class="content w-100 px-4">
            <div class="card card-dark card-outline mb-4"> <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">Search Author</div>
                </div> <!--end::Header--> <!--begin::Form-->
                <form action="{{ route('test') }}" method="Get"> <!--begin::Body-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3"> <label for="first_name" class="form-label">First Name</label> <input type="text" class="form-control" id="first_name" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3"> <label for="last_name" class="form-label">Last Name</label> <input type="text" class="form-control" id="last_name"> </div>
                            </div>
                        </div>
                        
                        
                        <!-- <div class="input-group mb-3"> <input type="file" class="form-control" id="inputGroupFile02"> <label class="input-group-text" for="inputGroupFile02">Upload</label> </div>
                        <div class="mb-3 form-check"> <input type="checkbox" class="form-check-input" id="exampleCheck1"> <label class="form-check-label" for="exampleCheck1">Check me out</label> </div> -->
                    </div> <!--end::Body--> <!--begin::Footer-->
                    <div class="card-footer"> 
                        <div class="container d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Search</button> 
                        </div>
                    </div> <!--end::Footer-->
                </form> <!--end::Form-->
            </div>
            {{-- card --}}
        </section>
        {{-- content --}}

@endsection

@push('scripts')
<script>

</script>
@endpush
