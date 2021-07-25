<form class="row g-3">
    <div class="col-12">
        <label for="inputname" class="form-label">ชื่อ</label>
        <input type="text" class="form-control" name="name" value="{{ isset($animal->animal_name) ? $animal->animal_name : '' }}" placeholder="ชื่อ..."/>
    </div>
    <div class="col-12">
        <label for="inputtype" class="form-label">ประเภท</label>
        <input type="text" class="form-control" name="type" value="{{ isset($animal->animal_type) ? $animal->animal_type : '' }}" placeholder="ประเภท..."/>
    </div>
    <div class="col-12">
        <label for="inputspecies" class="form-label">พันธุ์</label>
        <input type="text" class="form-control" name="species" value="{{ isset($animal->animal_species) ? $animal->animal_species : '' }}" placeholder="พันธุ์..."/>
    </div>
    <div class="col-12">
        <label for="inputmarking" class="form-label">ลาย</label>
        <input type="text" class="form-control" name="marking" value="{{ isset($animal->animal_marking) ? $animal->animal_marking : '' }}" placeholder="ลาย..."/>
    </div>
    <div class="col-12">
        <label for="inputgender" class="form-label">เพศ</label>
        <select id="inputgender" class="form-select" name="gender" value="{{ isset($animal->animal_gender) ? $animal->animal_gender : '' }}">
            <option selected>ตัวเลือก</option>
            <option>เพศผู้</option>
            <option>เพศเมีย</option>
        </select>
    </div>
    <div class="col-12">
        <label for="inputcollar" class="form-label">ปลอกคอสี</label>
        <select id="inputcollar" class="form-select" name="collar" value="{{ isset($animal->animal_collar) ? $animal->animal_collar : '' }}">
            <option selected>ตัวเลือก</option>
            <option>สีเขียว</option>
            <option>สีเหลือง</option>
            <option>สีแดง</option>
        </select>
    </div>
    <div class="col-12">
        <label for="inputmarking" class="form-label">อายุ</label>
        <input type="number" class="form-control" name="age" value="{{ isset($animal->animal_age) ? $animal->animal_age : '' }}" placeholder="อายุ..."/>
    </div>
    <div class="col-12">
        <label for="inputstatus" class="form-label">สถานะ</label>
        <select id="inputstatus" class="form-select" name="status" value="{{ isset($animal->animal_status) ? $animal->animal_status : '' }}">
            <option selected>ตัวเลือก</option>
            <option>มีชีวิตอยู่</option>
            <option>เสียชีวิตแล้ว</option>
        </select>
    </div>
    <div class="col-12">
        <label for="inputvet" class="form-label">สถานะทำหมัน</label>
        <select id="inputvet" class="form-select" name="status" value="{{ isset($animal->animal_vet) ? $animal->animal_vet : '' }}">
            <option selected>ตัวเลือก</option>
            <option>ทำหมันแล้ว</option>
            <option>ยังไม่ทำหมัน</option>
        </select>
    </div>
    <div class="col-12">
        <label for="inputowner" class="form-label">เจ้าของ</label>
        <input type="text" class="form-control" name="owner" value="{{ isset($animal->owner) ? $animal->owner : '' }}" placeholder="เจ้าของ..."/>
    </div>
