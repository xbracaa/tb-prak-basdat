<div class="container mt-5">
    <h1 class="main-title">Everything you need for esports competitions</h1>

    <div class="row mt-4 g-4">
        <?php foreach ($data['games'] as $game): ?>
            <div class="col-md-4 col-lg-2">
                <a href="<?= BASEURL ?>/games/detail/<?= $game['slug']; ?>">
                    <img src="<?= BASEURL; ?>/img/<?= $game['image_path']; ?>" class="game-logo" alt="<?= $game['name']; ?>">
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
