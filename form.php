<?php
$title = "Student Request";
require_once './assets/includes/header.php'; ?>

<section class="form-wrapper wrapper">
  <h2 class="hero-title">Вработи студенти</h2>
  <form class="d-flex" action="send-data.php" method="POST">
    <div class="form-group">
      <label for="name">Име и презиме</label>
      <input type="text" id="name" placeholder="Вашето име и презиме" required>
    </div>
    <div class="form-group">
      <label for="company">Име на компанијата</label>
      <input type="company" id="company" placeholder="Име на вашата компанија" required>
    </div>
    <div class="form-group">
      <label for="email">Контакт имејл</label>
      <input type="email" id="email" placeholder="Контакт имејл на вашата компанија" required>
    </div>
    <div class="form-group">
      <label for="phone">Контакт телефон</label>
      <input type="phone" id="phone" placeholder="Контакт телефон на вашата компанија" required>
    </div>
    <div class="form-group">
      <label for="academy">Тип на студенти</label>
      <div class="select">
        <select name="academy" id="academy">
          <option value="" hidden>Изберете тип на студент</option>
          <option>Маркетинг</option>
          <option>Програмирање</option>
          <option>Дата наука</option>
          <option>Дизајн</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <button class="btn" type="submit" value="submit">испрати</button>
    </div>


  </form>
</section>

<?php include_once './assets/includes/footer.php';
