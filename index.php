<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <title>Авторизация и регистрация</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css"
    />
    <link rel="stylesheet" href="assets/app.css" />
  </head>

  <body>
    <form class="card" action="" method="post">
      <h2>Вход</h2>

      <label for="name">
        Имя
        <input
          type="text"
          id="name"
          name="id"
          placeholder="Иванов Иван"
          aria-invalid="true"
          required
        />
      </label>

      <label for="password">
        Имя
        <input
          type="password"
          id="password"
          name="password"
          placeholder="*******"
          required
        />
      </label>

      <button type="submit" id="submit">Продолжить</button>
    </form>

    <p>У меня ещё нет <a href="/register.php">аккаунта</a></p>
  </body>
</html>
