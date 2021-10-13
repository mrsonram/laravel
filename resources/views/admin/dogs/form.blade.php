<div class="col-6">
    <div class="form-outline">
        <input type="text" class="form-control" id="name" required name="name"
            value="{{ isset($animals->name) ? $animals->name : '' }}" />
        <label for="name" class="form-label">ชื่อ</label>
        <div class="invalid-tooltip">ไม่สามารถเว้นว่างได้</div>
    </div>
</div>
<div class="col-6">
    <div class="form-outline">
        <input type="text" class="form-control" id="species" required name="species"
            value="{{ isset($animals->species) ? $animals->species : '' }}" />
        <label for="species" class="form-label">พันธุ์</label>
        <div class="invalid-tooltip">ไม่สามารถเว้นว่างได้</div>
    </div>
</div>
<div class="col-6">
    <div class="form-outline">
        <input type="text" class="form-control" id="marking" name="marking" required
            value="{{ isset($animals->marking) ? $animals->marking : '' }}" placeholder="ลาย..." />
        <label for="marking" class="form-label">ลาย</label>
        <div class="invalid-tooltip">ไม่สามารถเว้นว่างได้</div>
    </div>
</div>
<div class="col-6">
    <div class="form-outline">
        <input type="number" class="form-control" id="age" required name="age"
            value="{{ isset($animals->age) ? $animals->age : '' }}" />
        <label for="age" class="form-label">อายุ</label>
        <div class="invalid-tooltip">ไม่สามารถเว้นว่างได้</div>
    </div>
</div>
<div class="col-6">
    <label for="gender" class="form-label">เพศ</label>
    <select id="gender" class="form-select" name="gender"
        value="{{ isset($animals->gender) ? $animals->gender : '' }}">
        <option selected>ตัวเลือก</option>
        <option>เพศผู้</option>
        <option>เพศเมีย</option>
    </select>
</div>
<div class="col-6">
    <label for="collar" class="form-label">ปลอกคอสี</label>
    <select id="collar" class="form-select" name="collar"
        value="{{ isset($animals->collar) ? $animals->collar : '' }}">
        <option selected>ตัวเลือก</option>
        <option>สีเขียว</option>
        <option>สีเหลือง</option>
        <option>สีแดง</option>
        <option>ไม่มี</option>
    </select>
</div>
<div class="col-6">
    <label for="status" class="form-label">สถานะ</label>
    <select id="status" class="form-select" name="status"
        value="{{ isset($animals->status) ? $animals->status : '' }}">
        <option selected>ตัวเลือก</option>
        <option>มีชีวิตอยู่</option>
        <option>เสียชีวิตแล้ว</option>
    </select>
</div>
<div class="col-6">
    <label for="vet" class="form-label">สถานะทำหมัน</label>
    <select id="vet" class="form-select" name="vet" value="{{ isset($animals->vet) ? $animals->vet : '' }}">
        <option selected>ตัวเลือก</option>
        <option>ทำหมันแล้ว</option>
        <option>ยังไม่ทำหมัน</option>
        <option>ไม่ทราบ</option>
    </select>
</div>
<div class="col-12">
    <div class="form-outline">
        <input type="text" class="form-control" id="owner" required name="owner"
            value="{{ isset($animals->owner) ? $animals->owner : '' }}" />
        <label for="owner" class="form-label">เจ้าของ</label>
        <div class="invalid-tooltip">ไม่สามารถเว้นว่างได้</div>
    </div>
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image" class="control-label">รูปภาพ</label>
    <input class="form-control" name="image" type="file" id="image"/>
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>

<!--Google Map Marker-->
<div class="col-12">
    <div class="form-outline">
        <input type="text" class="form-control" id="location" required name="location"
            value="{{ isset($animals->location) ? $animals->location : '' }}">
        <label for="location" class="form-label">ชื่อสถานที่ (ตำแหน่งที่สุนัขชอบอยู่)</label>
        <div class="invalid-tooltip">ไม่สามารถเว้นว่างได้</div>
    </div>
</div>
<!-- Not available
<div class="col-12">
    <label for="map">แผนที่</label>
    <input type="text" class="form-control input-sm" id="search"> -->
    <div id="map"></div>
</div>
<div class="col-6">
    <label for="lat" class="form-label">ละติจูด</label>
    <input type="text" class="form-control input-sm" name="lat" id="lat"
        value="{{ isset($animals->lat) ? $animals->lat : '' }}">
</div>
<div class="col-6">
    <label for="lng" class="form-label">ลองจิจูด</label>
    <input type="text" class="form-control input-sm" name="lng" id="lng"
        value="{{ isset($animals->lng) ? $animals->lng : '' }}">
</div>
