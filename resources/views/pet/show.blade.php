<img class="img-fluid rounded mb-5" src="{{ isset($data->image) ? asset($data->image) : asset('source/background.png') }}" alt="..." />
<!-- Pet Info Modal - Text-->
<div class="card-body">
    <h4 class="card-text">
        ชื่อ : {{ isset($data->name) ? $data->name : 'ไม่ทราบ' }}
    </h4>
    <h4 class="card-text">
        พันธุ์ : {{ isset($data->species) ? $data->species : 'ไม่ทราบ' }}
    </h4>
    <h4 class="card-text">
        ลาย : {{ isset($data->marking) ? $data->marking : 'ไม่ทราบ' }}
    </h4>
    <h4 class="card-text">
        เพศ : {{ isset($data->gender) ? $data->gender : 'ไม่ทราบ' }}
    </h4>
    <h4 class="card-text">
        ปลอกคอสี : {{ isset($data->collar) ? $data->collar : 'ไม่ทราบ' }}
    </h4>
    <h4 class="card-text">
        อายุ : {{ isset($data->age) ? $data->age : 'ไม่ทราบ' }} ปี
    </h4>
    <h4 class="card-text">
        สถานะ : {{ isset($data->status) ? $data->status : 'ไม่ทราบ' }}
    </h4>
    <h4 class="card-text">
        สถานะทำหมัน : {{ isset($data->vet) ? $data->vet : 'ไม่ทราบ' }}
    </h4>
    <h4 class="card-text">
        เจ้าของ : {{ isset($data->owner) ? $data->owner : 'ไม่ทราบ' }}
    </h4>
    <h4 class="card-text">
        สถานที่ชอบอยู่ : {{ isset($data->location) ? $data->location : 'ไม่ทราบ' }}
    </h4>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
<button class="btn btn-primary" data-bs-dismiss="modal" style="font-size: 28px">
    <i class="fas fa-times fa-fw"></i>
        ปิด
</button>
</div>
