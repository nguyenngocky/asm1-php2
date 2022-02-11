<?php include 'app/views/haeder.php'; ?>

<table class="table" style="width:55%;margin-left : 335px">
    <tr>
        <th class="table__heading" style="width:40%">STT</th>
        <th class=" table__heading" style="width:30%;">Tên Môn Học</th>

    </tr>
    <?php foreach ($subjects as $index => $sub) : ?>
        <tr class=" table__row">
            <td class="table__content" data-heading="Player"><?= $index + 1 ?></td>
            <td class="table__content" data-heading="Seasons"><a href="<?= BASE_URL . 'mon-hoc/chi-tiet?id=' . $sub->id ?>"><?= $sub->name ?></a></td>
        </tr>
    <?php endforeach ?>

</table>
<?php include 'app/views/footer.php'; ?>