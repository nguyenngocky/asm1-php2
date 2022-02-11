<?php include 'app/views/haeder.php'; ?>

<?php foreach ($quest as $index => $qu) : ?>
    <div class="row">
        <div class="quest">
            <h4>Câu hỏi số: <?= $index + 1 ?>: <?= $qu->name ?></h4>
        </div>
        <form>
            <?php foreach ($qu->getAnswers() as $ansIndex => $ans) : ?>
                <input name="answer" type="radio" value="<?= $ansIndex + 1 ?>" /><strong><?= $ans->content ?></strong><br>
            <?php endforeach ?>
        </form>
    </div>
<?php endforeach ?>
<?php include 'app/views/footer.php'; ?>