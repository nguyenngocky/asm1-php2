<?php include 'app/views/haeder.php'; ?>
<div class="box-center">
    Câu hỏi:
    <?= $quizs->name ?> <br>
    Đáp án:
    next: <a href="<?= BASE_URL . 'question/luu-tao-moi' ?>"></a>
</div>
<?php include 'app/views/footer.php'; ?>