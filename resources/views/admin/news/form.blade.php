<div class="col-12">
    <div class="form-outline">
        <input type="text" class="form-control" id="title" required name="title"
            value="{{ isset($news->title) ? $news->title : '' }}" />
        <label for="title" class="form-label">ชื่อเรื่อง</label>
        <div class="invalid-tooltip">ไม่สามารถเว้นว่างได้</div>
    </div>
</div>
<div class="col-12">
    <div class="form-outline">
        <input type="text" class="form-control" id="subtitle" required name="subtitle"
            value="{{ isset($news->subtitle) ? $news->subtitle : '' }}" />
        <label for="subtitle" class="form-label">ชื่อเรื่องย่อย</label>
        <div class="invalid-tooltip">ไม่สามารถเว้นว่างได้</div>
    </div>
</div>
<div class="col-12">
    <div class="form-outline">
        <textarea class="form-control" id="detail"
            placeholder="รายละเอียดข่าวสาร เช่น ตรวจสุขภาพสุนัข เริ่มตั้งแต่ 10:00 - 15:00 เป็นต้น"
            required name="detail">{{ isset($news->detail) ? $news->detail : '' }}</textarea>
        <label for="detail" class="form-label">รายละเอียดข่าวสาร</label>
        <div class="invalid-tooltip">ไม่สามารถเว้นว่างได้</div>
    </div>
</div>
