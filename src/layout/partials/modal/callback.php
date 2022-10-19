<div class="modal modal-callback micromodal-slide" id="modal-callback" aria-hidden="true">
  <div class="modal__overlay" data-micromodal-close>
    <div class="modal__container" role="dialog">
      <header class="modal__header">
        <h3 class="modal__title">Записаться на услугу</h3>

        <svg class="modal__close" data-micromodal-close viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path data-micromodal-close d="M2 2L34 33M34 2L2 33" stroke="#5A3600" stroke-width="4" />
        </svg>
      </header>

      <main class="modal__content">
        <p class="modal__text">
          Оставьте заявку и мы свяжемся с Вами в ближайшее время
        </p>

        <form action="" data-target="callback" data-subject="Запись на услугу" data-additional="" class="modal__form form form-section">
          <div class="form__wrapper">
            <div class="input input--small mb-4">
              <input placeholder="Ваше имя" autocomplete="off" type="text" name="user_name" class="input__field">
              <img data-tippy-content="Имя содержит ошибки" class="input__warning" src="img/icons/misc/warning.svg" alt="">
            </div>
            <!-- /.input -->

            <div class="input input--small mb-5">
              <input placeholder="Ваш телефон" autocomplete="off" type="tel" name="user_phone" class="input__field">
              <img data-tippy-content="Номер не указан или содержит ошибки" class="input__warning" src="img/icons/misc/warning.svg" alt="">
            </div>
            <!-- /.input -->

            <button class="button button-primary" type="submit" data-sending="Отправка...">Отправить заявку</button>
          </div>
          <!-- /.form__wrapper -->

          <div class="form__privacy">
            Нажимая кнопку Отправить вы соглашаетесь с <a class="link" href="">политикой конфиденциальности</a>
          </div>
        </form>
      </main>
    </div>
  </div>
</div>
<!-- /.modal -->