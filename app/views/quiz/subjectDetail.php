<?php include 'app/views/haeder.php'; ?>

<table class="table" style="width:80%;margin-left : 135px">
    <tr>
        <th class="table__heading" style="width:20%;">STT</th>
        <th class="table__heading" style="width:20%;">Tên Quiz</th>
        <th class="table__heading" style="width:20%;">Thời Gian Bắt Đầu</th>
        <th class="table__heading" style="width:20%;">Thời Gian Kết thúc</th>
        <th class="table__heading" style="width:20%;"> Thời Gian Làm Bài</th>
    </tr>
    <?php foreach ($model as $index => $model) : ?>
        <tr class="table__row">
            <td class="table__content" data-heading="Player"><?= $index + 1 ?></td>
            <td class="table__content" data-heading="Seasons"><a href="<?= BASE_URL . 'quiz/chi-tiet?id=' . $model->id ?>"><?= $model->name ?></a></td>
            <td class="table__content" data-heading="Points"><?= $model->start_time ?></td>
            <td class="table__content" data-heading="Jersey Number"><?= $model->end_time ?></td>
            <td class="table__content" data-heading="Teams"><?= $model->duration_minutes ?></td>
        </tr>
    <?php endforeach ?>

</table>
<?php include 'app/views/footer.php'; ?>