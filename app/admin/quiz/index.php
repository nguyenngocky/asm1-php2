<?php include 'app/admin/layout/header.php' ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Môn Học : <?= $subject->name ?> </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
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
                        <th>Tên quiz</th>
                        <th>Thời gian bắt đầu</th>
                        <th>Thời gian kết thúc</th>
                        <th>Trạng thái</th>
                        <th>Thời gian làm bài</th>
                        <th>Đảo câu</th>
                        <th>
                            <a href="<?= BASE_URL . 'quiz/tao-moi?subjectId= ' . $subject->id ?>" class="btn btn-sm btn-success">Tạo mới</a>
                            
                        </th>
                        
                    </thead>
                    <tbody>
                        <?php foreach ($subjectQuizs as $sq) : ?>
                            <tr>
                                <td scope="row"><?= $sq->name ?></td>
                                <td><?= $sq->start_time ?></td>
                                <td><?= $sq->end_time ?></td>
                                <td><?= $sq->status == 1 ? "Active" : "Inactive" ?></td>
                                <td><?= $sq->duration_minutes ?></td>
                                <td><?= $sq->is_shuffle == 1 ? "Có" : "Không" ?></td>
                                <td>
                                    <a href="<?= BASE_URL . 'quiz/cap-nhat?id=' . $sq->id ?>" class="btn btn-sm btn-primary">Sửa</a>
                                    &nbsp;
                                    <a href="<?= BASE_URL . 'quiz/xoa?id=' . $sq->id ?>" class="btn btn-sm btn-danger">Xóa</a>
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