<?php

$title = "Student Request";

require_once('./assets/includes/header.php');
require_once('./assets/db/conn.php');

$results = $crud->getAcademies();

?>

<section class="form-wrapper wrapper">
  <h2 class="hero-title">Вработи студенти</h2>
  <form class="d-flex" action="send-data.php" method="POST">
    <div class="form-group">
      <label for="name">Име и презиме</label>
      <input type="text" id="name" name="name" placeholder="Вашето име и презиме" required maxlength="128" title="Името и презимето треба да бидат одвоени со празно место (e.g. firstname lastname)" pattern="[A-Za-z]{2,63} [A-Za-z]{2,64}" autofocus>
    </div>
    <div class="form-group">
      <label for="company">Име на компанијата</label>
      <input type="company" id="company" name="company" placeholder="Име на вашата компанија" required maxlength="128" title="Името на компанијата треба да содржи од 3 до 128 карактери" pattern="[A-Za-z]{3,128}">
    </div>
    <div class="form-group">
      <label for="email">Контакт имејл</label>
      <input type="email" id="email" name="email" placeholder="Контакт имејл на вашата компанија" required maxlength="128" title="Валидна емаил адреса на вашата компанија" autocomplete="off">
    </div>
    <div class="form-group">
      <label for="phone">Контакт телефон</label>
      <input type="tel" id="phone" name="phone" placeholder="Контакт телефон на вашата компанија" required maxlength="128" title="Телефонски број од 9 до 16 нумерички вредности" pattern="[0-9]{9,16}">
    </div>
    <div class="form-group">
      <label for="academy">Тип на студенти</label>
      <div class="select">
        <select name="academy" id="academy" require>
          <option value="" hidden>Изберете тип на студент</option>

          <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) : ?>

            <option value="<?= $r['academy_id'] ?>">
              <?= $r['academy'] ?>
            </option>

          <?php endwhile ?>

        </select>
      </div>
    </div>
    <div class="form-group">
      <button class="btn" type="submit" name="submit" value="submit">испрати</button>
    </div>
  </form>
</section>

<?php include_once('./assets/includes/footer.php');
