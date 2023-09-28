<!DOCTYPE html>
<html lang="en" data-theme="dark">
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
    <div class="card home">
      <img
        class="avatar"
        src="https://img.gazeta.ru/files3/516/15017516/upload-GettyImages-1166522079-pic_32ratio_900x600-900x600-58937.jpg"
        alt="{{ name }}"
      />

      <h1>Привет, {{ name }}!</h1>
      <a href="#" role="button">Выйти из аккаунта</a>
    </div>
  </body>
</html>
