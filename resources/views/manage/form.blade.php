<div class="col-12">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{ isset($animals->name) ? $animals->name : '' }}" placeholder="Name..."/>
</div>
<div class="col-12">
    <label for="gender" class="form-label">Gender</label>
    <select id="inputgender" class="form-select" name="gender" value="{{ isset($animals->gender) ? $animals->gender : '' }}">
        <option selected>ตัวเลือก</option>
        <option>เพศผู้</option>
        <option>เพศเมีย</option>
        </select>
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}} mb-3">
    <label for="image" class="control-label">Image</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ isset($animals->image) ? $animals->image : ''}}" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>

