<?php foreach($viewmodel as $item): ?>
    <div class="share-item">
        <h3><?= htmlspecialchars($item['title']) ?></h3>
        <p><?= htmlspecialchars($item['body']) ?></p>
    </div>
<?php endforeach; ?>