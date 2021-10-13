<form class="row g-3">
    <div class="col-12 mb-2">
        <label for="title" class="form-label">ชื่อเรื่อง</label>
        <input type="text" class="form-control" name="title" value="{{ isset($news->title) ? $news->title : '' }}" placeholder="เรื่อง..."/>
    </div>
    <div class="col-12 mb-2">
        <label for="subtitle" class="form-label">ชื่อเรื่องย่อย</label>
        <input type="text" class="form-control" name="subtitle" value="{{ isset($news->subtitle) ? $news->subtitle : '' }}" placeholder="ชื่อเรื่องย่อย..."/>
    </div>
    <div class="col-12 mb-3">
        <label for="detail" class="form-label">รายละเอียดข่าวสาร</label>
        <div class="form-floating">
            <textarea class="form-control" placeholder="รายละเอียด..." id="floatingTextarea2" name="detail" style="height: 100px" value="{{ isset($news->detail) ? $news->detail : '' }}"></textarea>
            <label for="floatingTextarea2">รายละเอียด</label>
        </div>
    </div>
</form>
