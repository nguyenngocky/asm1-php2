<?php include 'app/views/haeder.php'; ?>
<div class="box-center">
    <?php foreach ($quest as $quest) : ?>
        <div>
            <?= $quest->name ?> <br>
            <?php foreach ($answer as $answer) : ?>
                <div>
                    <?php if ($answer->question_id == $quest->id) : ?>
                        Đáp án:<?= $answer->content ?>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>
<?php include 'app/views/footer.php'; ?>