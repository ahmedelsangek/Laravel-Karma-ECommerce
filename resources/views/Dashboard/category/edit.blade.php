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
                    <h1 class="mt-4">Edit</h1>
                    <ol class="breadcrumb mb-4">
                        <!-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif -->
                    </ol>
                    <div class="mb-4">
                        <div class="container">
                            <h2>Category Name</h2>
                            <form method="POST" action="{{ url('category/' . $data[0]->id) }}">
                                @method('PUT')
                                @csrf
                                <div class="mb-3">
                                    <input value="{{ $data[0]->name }}" type="text" class="form-control" id="category" name="name" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
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
