<?php include 'app/views/haeder.php'; ?>

<table class="table" style="width:80%;margin-left : 135px">
    <tr>
        <th class="table__heading" style="width:15%;">STT</th>
        <th class="table__heading" style="width:15%;">Tên Quiz</th>
        <th class="table__heading" style="width:15%;"> Môn</th>
        <th class="table__heading" style="width:15%;">Thời Gian Bắt Đầu</th>
        <th class="table__heading" style="width:15%;">Thời Gian Kết thúc</th>
        <th class="table__heading" style="width:15%;"> Thời Gian Làm Bài</th>
    </tr>
    <?php foreach ($quizs as $index => $quiz) : ?>
        <tr class="table__row">
            <td class="table__content" data-heading="Player"><?= $index + 1 ?></td>
            <td class="table__content" data-heading="Seasons"><a href="<?= BASE_URL . 'quiz/chi-tiet?id=' . $quiz->id ?>"><?= $quiz->name ?></a></td>
            <td class="table__content" data-heading="Seasons"><?= $quiz->subject()->name ?></td>
            <td class="table__content" data-heading="Points"><?= $quiz->start_time ?></td>
            <td class="table__content" data-heading="Jersey Number"><?= $quiz->end_time ?></td>
            <td class="table__content" data-heading="Teams"><?= $quiz->duration_minutes ?></td>
        </tr>
    <?php endforeach ?>

</table>
<?php include 'app/views/footer.php'; ?>