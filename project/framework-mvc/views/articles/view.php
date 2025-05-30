<h2><?= htmlspecialchars($article['title']) ?></h2>
<p><?= nl2br(htmlspecialchars($article['content'])) ?></p>
<p><small>Дата: <?= $article['created_at'] ?></small></p>

<hr>
<h3>Комментарии</h3>

<?php foreach ($comments as $comment): ?>
    <div style="border:1px solid #ccc; padding: 10px; margin-bottom: 10px;">
        <p><?= nl2br(htmlspecialchars($comment['content'])) ?></p>
        <small>Пользователь: <?= $comment['user_id'] ?> | <?= $comment['created_at'] ?></small>

        <!-- Показываем кнопку "Удалить", если пользователь автор или админ -->
        <?php if (
            isset($_SESSION['user']) &&
            ($_SESSION['user']['id'] == $comment['user_id'] || ($_SESSION['user']['is_admin'] ?? false))
        ): ?>
            <form method="POST" action="<?= BASE_URL ?>/articles/deleteComment" style="margin-top: 5px;" onsubmit="return confirm('Удалить комментарий?');">
                <input type="hidden" name="comment_id" value="<?= $comment['id'] ?>">
                <input type="hidden" name="article_id" value="<?= $article['id'] ?>">
                <button type="submit">Удалить</button>
            </form>
        <?php endif; ?>
    </div>
<?php endforeach; ?>


<hr>

<?php if (isset($_SESSION['user'])): ?>
    <h4>Добавить комментарий</h4>
    <form method="POST" action="<?= BASE_URL ?>/articles/addComment/<?= $article['id'] ?>">
        <textarea name="content" rows="4" cols="50" required></textarea><br>
        <button type="submit">Отправить</button>
    </form>
<?php else: ?>
    <p><a href="<?= BASE_URL ?>/login/login">Войдите</a>, чтобы оставить комментарий.</p>
<?php endif; ?>
