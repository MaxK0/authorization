<!DOCTYPE html>
<html lang="en">
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
    <h2>Регистрация</h2>

    <form action="src/actions/register.php" class="card" method="post" enctype="multipart/form-data">
      <label for="name">
        Имя
        <input
          type="text"
          id="name"
          name="name"
          placeholder="Иванов Иван"
          aria-invalid="true"
          required
        />
      </label>

      <label for="email">
        E-mail
        <input
          type="email"
          id="email"
          name="email"
          placeholder="ivan@gmail.com"
          required
        />
      </label>

      <label for="avatar">
        Изображение профиля
        <input type="file" id="avatar" name="avatar" />
      </label>

      <div class="grid">
        <label for="password">
          Пароль
          <input
            type="password"
            id="password"
            name="password"
            placeholder="******"
            required
          />
        </label>
        <label for="password_confirmation">
          Подтверждение
          <input
            type="password"
            id="password_confirmation"
            name="password_confirmation"
            placeholder="******"
            required
          />
        </label>
      </div>

      <fieldset>
        <label for="terms">
          <input type="checkbox" id="terms" name="terms" />
          Я принимаю все условия пользователя
        </label>
      </fieldset>

      <button type="submit" id="submit" disabled>Продолжить</button>
    </form>

    <p>У меня уже есть <a href="/index.php">аккаунт</a></p>

    <script src="/assets/app.js"></script>
  </body>
</html>
