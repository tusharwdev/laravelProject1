<div class="card-body">


    @csrf
    <label for="name">Name</label>
    @error('name') <i class="text-danger">{{ $message }}</i> @enderror
    <input name="name" class="form-control form-control-lg" value="{{ old('name',isset($category)?$category->name:null) }}" type="text" placeholder="Enter Category Name">
    <br>
    <label for="description">Description</label>
    <textarea name="description" class="form-control" placeholder="Enter Category Description">{{ old('description',isset($category)?$category->description:null) }}</textarea>
    <br>
    <div class="form-check">
        @error('status') <i class="text-danger">{{ $message }}</i> @enderror
        <p>Status</p>

        <input name="status" value="Active" type="radio" class="form-check-input" id="active" @if(old('status',isset($category)?$category->status:null) == 'Active') checked @endif>
        <label class="form-check-label" for="active">Active </label><br>
        <input name="status" value="Inactive" @if(old('status',isset($category)?$category->status:null) == 'Inactive') checked @endif type="radio" class="form-check-input" id="inactive">
        <label class="form-check-label" for="Inactive">Inactive</label>
        <br>
        <br>

    </div

</div>
