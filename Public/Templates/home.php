<?php
$data = $this->theme->getData();
$this->theme->header();
?>
    <h1 class="h1 d-flex justify-content-center">Студенты</h1>
    <div class="d-flex flex-column">
        <table class="table table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Пол</th>
                <th scope="col">Группа</th>
                <th scope="col">Email</th>
                <th scope="col">Баллы ЕГЭ</th>
                <th scope="col">Дата рождения</th>
                <th scope="col">Местный/Иногородний</th>
            </tr>
            </thead>
            <?php if ($data['studentTableCount'] > 0): ?>
                <tbody>
                <?php foreach ($data['studentTable'] as $row): array_map('htmlentities', $row); ?>
                    <tr>
                        <td><?php echo implode('</td><td>', $row); ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            <?php endif; ?>
        </table>
        <nav aria-label="...">
            <ul class="pagination pagination-md justify-content-center">
                <?php for($i=1;$i <= $data['pagination']['allPages'];$i++): ?>
                    <?php if($data['pagination']['currentPage'] == $i): ?>
                    <li class="page-item active">
                        <span class="page-link">
                            <?= $i?>
                            <span class="sr-only">(current)</span>
                        </span>
                    </li>
                    <?php else: ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?= $i?>"><?= $i?></a>
                    </li>
                    <?php endif; ?>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>
<?php $this->theme->footer(); ?>