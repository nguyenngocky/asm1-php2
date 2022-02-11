<?php include 'app/admin/layout/header.php' ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Danh Sách Môn Học </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table tabl-stripped">
                    <thead>
                        <th>STT</th>
                        <th>Tên Môn học</th>
                        <th>
                            <a href="<?= BASE_URL . 'mon-hoc/tao-moi' ?>" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>
                        <?php foreach ($subjects as $index => $sub) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><a href="<?= BASE_URL . 'dashboard/quiz?subjectId=' . $sub->id ?>"><?= $sub->name ?></a></td>
                                <td>
                                    <a href="<?= BASE_URL . 'mon-hoc/cap-nhat?id=' . $sub->id ?>" class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= BASE_URL . 'mon-hoc/xoa?id=' . $sub->id ?>" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'app/admin/layout/footer.php' ?>