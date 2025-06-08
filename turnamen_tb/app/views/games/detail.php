<div class="container mt-5">
    <h1 class="mb-4 text-primary"><?= $game['name']; ?></h1>
    <img src="<?= BASEURL . '/img/' . $game['detail_img_path']; ?>" alt="<?= $game['name']; ?>" class="img-fluid rounded mb-4">

    <!-- Tabs Status -->
    <ul class="nav nav-tabs mb-4">
        <?php
        $statuses = ['upcoming' => 'Upcoming', 'ongoing' => 'Ongoing', 'completed' => 'Completed'];
        foreach ($statuses as $key => $label):
            $active = ($key == $status) ? 'active' : '';
        ?>
            <li class="nav-item">
                <a class="nav-link <?= $active; ?>" href="<?= BASEURL; ?>/games/<?= $game['slug']; ?>?status=<?= $key; ?>">
                    <?= $label; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <?php if (empty($tournaments)) : ?>
        <div class="alert alert-info">
            Tidak ada turnamen dengan status <strong><?= $statuses[$status]; ?></strong>.
        </div>
    <?php else: ?>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php foreach ($tournaments as $tournament): ?>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title"><?= $tournament['name']; ?></h5>
                            <p class="card-text text-muted">
                                Mulai: <?= date('d M Y', strtotime($tournament['start_date'])); ?><br>
                                Status: <span class="badge bg-secondary"><?= ucfirst($status); ?></span>
                            </p>
                            <a href="<?= BASEURL; ?>/tournament/detail/<?= $tournament['id']; ?>" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>
