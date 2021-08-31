<div class="p2">
    <h1>{{ $data->name }}</h1>
    <div class="form-group">
        <input type="text" name="name" id="name" value="{{ $data->name }}" class="form-control" placeholder="Name...">
    </div>
    <div class="form-group">
        <input type="text" name="gender" id="gender" value="{{ $data->gender }}" class="form-control" placeholder="Gender...">
    </div>
    <div class="form-group mt-2">
        <button class="btn btn-warning" onClick="update({{ $data->id }})">Update</button>
    </div>
</div>
