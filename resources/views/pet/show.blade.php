<img class="img-fluid rounded mb-5" src="{{ isset($data->image) ? asset($data->image) : asset('images/background.png') }}" alt="..." />
<!-- Pet Info Modal - Text-->
<div class="card-body">
    <h4 class="card-text">
        ชื่อ : {{ $data->name }}
    </h4>
    <h4 class="card-text">
        พันธุ์ : {{ $data->species }}
    </h4>
    <h4 class="card-text">
        ลาย : {{ $data->marking }}
    </h4>
    <h4 class="card-text">
        เพศ : {{ $data->gender }}
    </h4>
    <h4 class="card-text">
        ปลอกคอสี : {{ $data->collar }}
    </h4>
    <h4 class="card-text">
        อายุ : {{ $data->age }} ปี
    </h4>
    <h4 class="card-text">
        สถานะ : {{ $data->status }}
    </h4>
    <h4 class="card-text">
        สถานะทำหมัน : {{ $data->vet }}
    </h4>
    <h4 class="card-text">
        เจ้าของ : {{ $data->owner }}
    </h4>
</div>
<button class="btn btn-primary" data-bs-dismiss="modal" style="font-size: 28px">
    <i class="fas fa-times fa-fw"></i>
        ปิด
</button>
