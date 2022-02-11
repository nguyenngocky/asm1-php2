<?php include 'app/admin/layout/header.php' ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tạo mới Quiz</h3>
            </div>
            <div class="card-body">
                <form action="<?= BASE_URL . 'quiz/luu-tao-moi?subjectId=' . $subjectId ?>" method="post">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label for="">Tên Quiz</label>
                            <input type="text" name="name" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Thời gian bắt đầu</label>
                            <input type="datetime-local" name="start_time" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Thời gian kết thúc</label>
                            <input type="datetime-local" name="end_time" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Thời gian làm bài</label>
                            <input type="number" step="0" name="duration_minutes" class="form-control">
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" name="status" type="checkbox" value="1" id="status">
                            <label class="form-check-label" for="status">
                                Online
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" name="is_shuffle" type="checkbox" value="1" id="is_shuffle">
                            <label class="form-check-label" for="is_shuffle">
                                Đảo câu
                            </label>
                        </div>
                        <br>
                        <div class="">
                            <a href="<?= BASE_URL . 'dashboard/quiz' ?>" class="btn btn-sm btn-danger">Hủy</a>
                            &nbsp;
                            <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'app/admin/layout/footer.php' ?>