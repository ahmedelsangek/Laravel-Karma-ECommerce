<!DOCTYPE html>
<html lang="en">
@include('layouts.dashboard-head')

<body class="sb-nav-fixed">
    @include('layouts.dashboard-nav')
    <div id="layoutSidenav">
        @include('layouts.dashboard-sidenav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Display Roles</h1>
                    <ol class="breadcrumb mb-4">

                    </ol>
                    <div class="row">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Options</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        @foreach ($data as $key => $value)





                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are You Sure To Delete {{ $value->name }} ??
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                        <form method="POST" action="{{ url('category/' . $value->id) }}">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-primary">Yes</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal -->






                                        <tr>
                                            <th>{{ $key+1 }}</th>
                                            <th> {{ $value->name }} </th>
                                            <th>
                                                <a class="btn btn-primary" href="{{ url('category/' . $value->id . '/edit') }}">Edit</a>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $value->id }}">Delete</button>
                                            </th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </main>
            @include('layouts.dashboard-footer')
        </div>
    </div>
    @include('layouts.dashboard-scripts')
</body>

</html>
