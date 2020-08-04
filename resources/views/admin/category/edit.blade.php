@extends('admin.layouts.master');

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $title  }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category List</a></li>
                        <li class="breadcrumb-item active">{{ $title  }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- Form Element sizes -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Category Update Form</h3>
                        </div>
                        <form action="{{ route('category.update',$category->id) }}" method="POST">
                        <div class="card-body">
                            @method('put')
                            @csrf
                            <label for="name">Name</label>
                            @error('name') <i class="text-danger">{{ $message }}</i> @enderror
                            <input name="name" class="form-control form-control-lg" value="{{ old('name',$category->name) }} " type="text" placeholder="Enter Category Name">
                            <br>
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" placeholder="Enter Category Description">{{ old('description',$category->description) }}</textarea>
                            <br>
                            <div class="form-check">
                                @error('status') <i class="text-danger">{{ $message }}</i> @enderror
                                <p>Status</p>

                                <input name="status" value="Active" type="radio" class="form-check-input" id="active" @if(old('status',$category->status) == 'Active') checked @endif>
                                <label class="form-check-label" for="active">Active </label><br>
                                <input name="status" value="Inactive" @if(old('status',$category->status) == 'Inactive') checked @endif type="radio" class="form-check-input" id="inactive">
                                <label class="form-check-label" for="Inactive">Inactive</label>
                                <br>
                                <br>

                            </div

                        </div>
                            <button type="submit">Submit</button>
                        </form>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->



                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection
