<?php include 'app/admin/layout/header.php' ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sửa Quiz</h3>
            </div>
            <div class="card-body">
                <form action="<?= BASE_URL . 'dashboard/tai-khoan/luu-cap-nhat' ?>" method="post">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" value="<?= $model->email ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Tên tài khoản</label>
                            <input type="text" name="name" value="<?= $model->name ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Avatar</label>
                            <input type=" text" name="avatar" value="<?= $model->avatar ?>">
                        </div>
                        <div>
                            <label for="">Mật khẩu</label>
                            <input type=" password" name="password" value="<?= $model->password ?>">
                        </div>
                        <br>
                        <div class="">
                            <a href="<?= BASE_URL . 'dashboard/tai-khoan' ?>" class="btn btn-sm btn-danger">Hủy</a>
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