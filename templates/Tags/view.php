<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 */
?>
<div class="content">
    <h1>「<?= h($tag->title) ?>」の投稿一覧</h1>
    <?php foreach ($posts as $post): ?>
        <h3><?= h($post->title) ?></h3>
        <p><?= $post->created->i18nFormat('YYYY年MM月dd日 HH:mm') ?></p>
        <?= $this->Text->autoParagraph($post->description) ?>
        <p><small>投稿者 :<?= h($post->user->username) ?></small></p>
        <?= $this->Html->link('記事を読む', [
            'action' => 'view',
            $post->id
        ], ['class' => 'button']) ?>
        <hr>
    <?php endforeach; ?>

    <?= $this->Html->link('一覧へ戻る', [
        'action' => 'index'
    ],['class' => 'button']) ?>
</div>
