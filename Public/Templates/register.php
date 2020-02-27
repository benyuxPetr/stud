<?php
$data = $this->theme->getData();
$this->theme->header();
?>
    <h1 class="h1 d-flex justify-content-center">Регистрация</h1>
    <div class="row justify-content-md-center">
        <div class="col-md-5">
        <form>
            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Имя</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" id="inputName" placeholder="Имя">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputLastName" class="col-sm-3 col-form-label">Фамилия</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="lastName" id="inputLastName" placeholder="Фамилия">
                </div>
            </div>
            <div class="form-group row">
                <label for="sex" class="col-sm-3 col-form-label">Пол</label>
                <div class="col-sm-9">
                    <select class="form-control" id="sex">
                        <option value="M">Mужской</option>
                        <option value="F">Женский</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputExam" class="col-sm-3 col-form-label">Баллы ЕГЭ</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" name="exam" id="inputExam" placeholder="Баллы ЕГЭ">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputDate" class="col-sm-3 col-form-label">Дата Рождения</label>
                <div class="col-sm-9">
                    <input class="form-control" type="date" id="inputDate" placeholder="Дата Рождения">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">Местный</div>
                <div class="col-sm-9">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="inputCheck" name="resident" value="resident">
                        <label class="form-check-label" for="inputCheck">Местный</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
            </div>
        </form>
        </div>
    </div>
<?php $this->theme->footer(); ?>