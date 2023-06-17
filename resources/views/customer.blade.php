@extends('layouts.app')
@section('content')
<center>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-danger fw-bold fs-6 " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add Customer
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">CRUD</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-2">
                            <input type="text" placeholder="Enter Customer Name" class="form-control" name="" id="">
                        </div>
                        <div class="mb-2">
                            <input type="text" placeholder="Enter Customer Phone-Number" class="form-control" name="" id="">
                        </div>
                        <div class="mb-2">
                            <input type="file" class="form-control" name="" id="">
                        </div>
                        <button type="Submit" class="btn btn-outline-danger fw-bold fs-6>Add Record</button>
                    </form>

                </div>
                <div class=" modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
</center>

@endsection