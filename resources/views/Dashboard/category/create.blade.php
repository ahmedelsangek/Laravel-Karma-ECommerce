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
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </ol>
                    <div class="mb-4">
                        <div class="container">
                            <h2>Add Category</h2>
                            <form method="POST" action="{{ url('/category') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="category" name="name" value="{{ old('name') }}" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Create</button>
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
