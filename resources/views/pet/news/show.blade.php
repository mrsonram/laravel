<!-- Pet Info Modal - Text-->
<div class="card-body">
    <h1 class="card-text">
        {{ isset($data->title) ? $data->title : 'ไม่ทราบ' }}
    </h1>
    <h2 class="card-text text-muted">
        {{ isset($data->subtitle) ? $data->subtitle : 'ไม่ทราบ' }}
    </h2>
    <h3 class="card-text">
        รายละเอียด : {{ isset($data->detail) ? $data->detail : 'ไม่ทราบ' }}
    </h3>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
<button class="btn btn-primary" data-bs-dismiss="modal" style="font-size: 28px">
    <i class="fas fa-times fa-fw"></i>
        ปิด
</button>
</div>
