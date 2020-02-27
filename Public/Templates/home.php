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
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Dylan</td>
                <td>Heintze</td>
                <td>M</td>
                <td>2J4</td>
                <td>dheintze0@dagondesig</td>
                <td>248</td>
                <td>2008-02-29</td>
                <td>Иногородний</td>
            </tr>
            </tbody>
        </table>
        <nav aria-label="...">
            <ul class="pagination pagination-md justify-content-center">
                <li class="page-item active" aria-current="page">
                    <span class="page-link">
                        1
                        <span class="sr-only">(current)</span>
                    </span>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
        </nav>
    </div>
<?php $this->theme->footer(); ?>