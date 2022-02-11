<?php include 'app/admin/layout/header.php' ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sủa môn học</h3>
            </div>
            <div class="card-body">
                <form action="<?= BASE_URL . 'mon-hoc/luu-cap-nhat?id=' . $model->id ?>" method="post">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label for="">Tên danh mục bài viết</label>
                            <input type="text" name="name" class="form-control" placeholder="" aria-describedby="helpId" value="<?= $model->name ?>">
                        </div>
                        <br>
                        <div class="">
                            <a href=" <?= BASE_URL . 'mon-hoc' ?>" class="btn btn-sm btn-danger">Hủy</a>
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