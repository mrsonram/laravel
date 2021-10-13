<form class="row g-3">
    <div class="col-12 mb-2">
        <label for="inputname" class="form-label">ชื่อ</label>
        <input type="text" class="form-control" name="name" value="{{ isset($animals->name) ? $animals->name : '' }}" placeholder="ชื่อ..."/>
    </div>
    <div class="col-12 mb-2">
        <label for="inputspecies" class="form-label">พันธุ์</label>
        <input type="text" class="form-control" name="species" value="{{ isset($animals->species) ? $animals->species : '' }}" placeholder="พันธุ์..."/>
    </div>
    <div class="col-12 mb-2">
        <label for="inputmarking" class="form-label">ลาย</label>
        <input type="text" class="form-control" name="marking" value="{{ isset($animals->marking) ? $animals->marking : '' }}" placeholder="ลาย..."/>
    </div>
    <div class="col-12 mb-2">
        <label for="inputgender" class="form-label">เพศ</label>
        <select id="inputgender" class="form-select" name="gender" value="{{ isset($animals->gender) ? $animals->gender : '' }}">
            <option selected>ตัวเลือก</option>
            <option>เพศผู้</option>
            <option>เพศเมีย</option>
            </select>
    </div>
    <div class="col-12 mb-2">
        <label for="inputcollar" class="form-label">ปลอกคอสี</label>
        <select id="inputcollar" class="form-select" name="collar" value="{{ isset($animals->collar) ? $animals->collar : '' }}">
            <option selected>ตัวเลือก</option>
            <option>สีเขียว</option>
            <option>สีเหลือง</option>
            <option>สีแดง</option>
            <option>ไม่มี</option>
        </select>
    </div>
    <div class="col-12 mb-2">
        <label for="inputmarking" class="form-label">อายุ</label>
        <input type="number" class="form-control" name="age" value="{{ isset($animals->age) ? $animals->age : '' }}" placeholder="อายุ..."/>
    </div>
    <div class="col-12 mb-2">
        <label for="inputstatus" class="form-label">สถานะ</label>
        <select id="inputstatus" class="form-select" name="status" value="{{ isset($animals->status) ? $animals->status : '' }}">
            <option selected>ตัวเลือก</option>
            <option>มีชีวิตอยู่</option>
            <option>เสียชีวิตแล้ว</option>
        </select>
    </div>
    <div class="col-12 mb-2">
        <label for="inputvet" class="form-label">สถานะทำหมัน</label>
        <select id="inputvet" class="form-select" name="vet" value="{{ isset($animals->vet) ? $animals->vet : '' }}">
            <option selected>ตัวเลือก</option>
            <option>ทำหมันแล้ว</option>
            <option>ยังไม่ทำหมัน</option>
            <option>ไม่ทราบ</option>
        </select>
    </div>
    <div class="col-12 mb-2">
        <label for="inputowner" class="form-label">เจ้าของ</label>
        <input type="text" class="form-control" name="owner" value="{{ isset($animals->owner) ? $animals->owner : '' }}" placeholder="เจ้าของ..."/>
    </div>
    <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}} mb-2">
        <label for="image" class="control-label">รูปภาพ</label>
        <input class="form-control" name="image" type="file" id="image" value="{{ isset($animals->image) ? $animals->image : ''}}" >
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>

    <!--Google Map Marker-->
    <div class="col-12 mb-2">
        <label for="location">ชื่อสถานที่ (ตำแหน่งที่สุนัขชอบอยู่)</label>
        <input type="text" class="form-control input-sm" name="location" value="{{ isset($animals->location) ? $animals->location : ''}}">
    </div>
    <div class="col-12 mb-2">
        <label for="map">แผนที่</label>
        <input type="text" class="form-control input-sm" id="search">
        <div id="map"></div>
    </div>
    <div class="col-12 mb-2">
        <label for="lat">ละติจูด</label>
        <input type="text" class="form-control input-sm" name="lat" id="lat" value="{{ isset($animals->lat) ? $animals->lat : ''}}">
    </div>
    <div class="col-12 mb-3">
        <label for="lng">ลองจิจูด</label>
        <input type="text" class="form-control input-sm" name="lng" id="lng" value="{{ isset($animals->lng) ? $animals->lng : ''}}">
    </div>
</form>
