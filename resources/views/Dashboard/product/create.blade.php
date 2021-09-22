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
                            <h2>Add Product</h2>
                            <form method="POST" action="{{ url('/product') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description:</label>
                                    <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price:</label>
                                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="discount" class="form-label">Discount:</label>
                                    <input type="text" class="form-control" id="discount" name="discount" value="{{ old('discount') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Upload Image:</label>
                                    <input type="file" class="form-control" id="image" name="image" required>
                                </div>
                                <div class="mb-3">
                                    <label for="cat" class="form-label">Category:</label>
                                    <select class="form-control" name="cat_id" id="cat">
                                        @foreach ($data as $key => $value)
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                        @endforeach
                                    </select>
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
