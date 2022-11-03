<?php include_once('layout/partials/header.php') ?>

<!-- Основной контент -->
<main id="home">
  <section style="background-image: url('img/layout/page/index/hero/background.jpg');" id="hero" class="section">
    <div class="container">
      <div class="hero">
        <div class="section__header">
          <h1 class="section__title">
            “Красота -
            <br>
            &nbsp;это свобода”
          </h1>
        </div>
        <!-- /.section__header -->
      </div>
      <!-- /.hero -->
    </div>
    <!-- /.container -->
  </section>

  <section id="about" class="section" style="background-image: url('img/common/background-logo.svg');">
    <div class="container position-relative">
      <div class="about">
        <div class="row">
          <div class="col-12 col-sm-8">
            <div class="section__header">
              <h2 class="section__title">
                О проекте
              </h2>
            </div>
            <!-- /.section__header -->

            <div class="about__content" data-editor="default">
              <p>
                SALON ‌SVOBODA - отправная точка на пути к обновлению, естественности
                и красоте.
                Инновационные косметологические процедуры и создание индивидуальных и динамичных образов, являются основой на пути к свободе самоощущений и удовольствию от себя.
              </p>
            </div>
            <!-- /.about__content -->
          </div>
          <!-- /.col-5 -->

          <div class="col-12">
            <div class="text-center text-md-end">
              <picture class="about__picture">
                <img src="img/layout/page/index/about/label.svg" alt="">
              </picture>
            </div>

            <div class="about__advantage position-sticky">
              <div class="row justify-content-between gx-5 gy-4 gy-md-5">
                <div class="col-12 col-sm-6">
                  <h3 class="mb-3 mb-lg-4">Доступность</h3>
                  <p>
                    Идея «Красота в простоте» - продвижение философии естественного преображения и качественного, авторского ухода за собой.
                  </p>
                </div>
                <!-- /.col-6 -->

                <div class="col-12 col-sm-6">
                  <h3 class="mb-3 mb-lg-4">Инновации</h3>
                  <p>
                    Сервис - SVOBODA - это выбирать лучшее, основным принципом проекта является высочайший стандарт сервиса и комфорта. Для гостей предлагаются: игристое, свежие фрукты и специально меню с напитками для полноценного погружения в состояние свободы и удовольствия.
                  </p>
                </div>
                <!-- /.col-6 -->

                <div class="col-12 col-sm-6">
                  <h3 class="mb-3 mb-lg-4">Доступность</h3>
                  <p>
                    С уважением к вашему времени - эксперты SVOBODA постоянно совершенствуют свои знания, изучая новые методики и нововведения в beauty- индустрии. Процедуры по преображению, не требуют больших временных затрат, а возможность получить все услуги в одном месте, значительно сокращают время на пути к преображению.
                  </p>
                </div>
                <!-- /.col-6 -->

                <div class="col-12 col-sm-6">
                  <h3 class="mb-3 mb-lg-4">Инновации</h3>
                  <p>
                    Endospheres Therapy - в SVOBODA используется оригинальный итальянский аппарат. Неинвазивная методика коррекции фигуры посредством компрессионной микровибрации, которая обеспечивает выраженный лимфодренажный эффект, борется с лишним весом и проявлениями целлюлита, устраняет застойные явления, способствует снятию болевого синдрома.
                  </p>
                </div>
                <!-- /.col-6 -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.about__advantage -->
          </div>
          <!-- /.col-7 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.about -->
    </div>
    <!-- /.container -->
  </section>

  <section id="subscribe" class="section">
    <div class="container">
      <div class="section__header text-center">
        <h2 class="section__title">
          Станьте частью привилегированного клуба SVOBODA и получайте
          <br>
          персональные предложения и бонусы первыми!
        </h2>

        <p class="mt-4">Оставьте свои контактные данные, мы свяжемся с Вами в ближайшее время</p>
      </div>
      <!-- /.section__header -->

      <form action="php/test.php" data-target="callback" data-subject="Подписка" class="form form-section">
        <div class="input mb-4">
          <input placeholder="Имя" autocomplete="off" type="text" name="user_name" class="input__field">
          <img data-tippy-content="Имя содержит ошибки" class="input__warning" src="img/icons/misc/warning.svg" alt="">
        </div>
        <!-- /.input -->

        <div class="input mb-4">
          <input placeholder="Телефон" autocomplete="off" type="tel" name="user_phone" class="input__field">
          <img data-tippy-content="Номер не указан или содержит ошибки" class="input__warning" src="img/icons/misc/warning.svg" alt="">
        </div>
        <!-- /.input -->

        <div class="input mb-5">
          <input placeholder="E-mail" autocomplete="off" type="email" name="user_email" class="input__field">
          <img data-tippy-content="Электронная почта содержит ошибки" class="input__warning" src="img/icons/misc/warning.svg" alt="">
        </div>
        <!-- /.input -->

        <button class="button button-primary" type="submit" data-sending="Отправка...">Отправить</button>
        <div class="form__privacy">
          Нажимая кнопку Отправить вы соглашаетесь <br> с <a class="link" href="">политикой конфиденциальности</a>
        </div>
      </form>
    </div>
    <!-- /.container -->
  </section>

  <?php include_once('layout/blocks/category.php') ?>

  <section id="callback" class="section">
    <div class="container">
      <div class="section__header text-center">
        <h2 class="section__title">
          Остались вопросы ?
        </h2>

        <p class="mt-4">Оставьте свои контактные данные, мы свяжемся с Вами в ближайшее время</p>
      </div>
      <!-- /.section__header -->

      <form action="php/test.php" data-target="callback" data-subject="Обратная связь" class="form form-section">
        <div class="input mb-4">
          <input placeholder="Имя" autocomplete="off" type="text" name="user_name" class="input__field">
          <img data-tippy-content="Имя содержит ошибки" class="input__warning" src="img/icons/misc/warning.svg" alt="">
        </div>
        <!-- /.input -->

        <div class="input mb-4">
          <input placeholder="Телефон" autocomplete="off" type="tel" name="user_phone" class="input__field">
          <img data-tippy-content="Номер не указан или содержит ошибки" class="input__warning" src="img/icons/misc/warning.svg" alt="">
        </div>
        <!-- /.input -->

        <div class="input mb-5">
          <input placeholder="E-mail" autocomplete="off" type="email" name="user_email" class="input__field">
          <img data-tippy-content="Электронная почта содержит ошибки" class="input__warning" src="img/icons/misc/warning.svg" alt="">
        </div>
        <!-- /.input -->

        <button class="button button-primary" type="submit" data-sending="Отправка...">Отправить</button>
        <div class="form__privacy">
          Нажимая кнопку Отправить вы соглашаетесь с <a class="link" href="">политикой конфиденциальности</a>
        </div>
      </form>
    </div>
    <!-- /.container -->
  </section>

  <section id="team" class="section">
    <div class="container">
      <div class="team">
        <div class="row flex-column-reverse flex-md-row align-items-center align-items-md-stretch">
          <div class="col-12 col-md-5">
            <div class="section__header d-none d-md-block">
              <h2 class="section__title">
                Команда салона SVOBODA
              </h2>
            </div>
            <!-- /.section__header -->

            <p>
              SALON SVOBODA - уникальное пространство красоты, в котором слились<br>
              в одно целое высококачественный сервис<br>
              и искусство создания истинно элегантных<br>
              и стильных образов с учетом последних тенденций и индивидуальных особенностей каждого клиента.
              <br> <br>
              Наша команда профессионалов в области макияжа, парикмахерского дела, косметологии и nail-сервиса — лучшие эксперты своего дела, ежедневно подтверждающие свое мастерство не только неизменным высоким качеством своей работы, но и внушительным списком постоянных клиентов.
            </p>
          </div>
          <!-- /.col-5 -->

          <div class="col-8 col-sm-6 col-md-4 offset-md-2 mb-4 mb-md-0">
            <div class="team__slider slider">
              <div class="swiper slider-team">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="team-item">
                      <picture class="team-item__picture lazy">
                        <img class="image image--cover lazy__item lazy__item--blur" data-src="img/layout/page/index/team/1.jpg" src="img/layout/page/index/team/thumb/1.jpg" alt="">
                      </picture>

                      <h3 class="team-item__name">Иванова Маша</h3>
                      <strong class="team-item__role">nail-мастер</strong>
                    </div>
                    <!-- /.team-item -->
                  </div>
                  <!-- /.swiper-slide -->

                  <div class="swiper-slide">
                    <div class="team-item">
                      <picture class="team-item__picture lazy">
                        <img class="image image--cover lazy__item lazy__item--blur" data-src="img/layout/page/index/team/2.jpg" src="img/layout/page/index/team/thumb/2.jpg" alt="">
                      </picture>

                      <h3 class="team-item__name">Иванова Маша</h3>
                      <strong class="team-item__role">nail-мастер</strong>
                    </div>
                    <!-- /.team-item -->
                  </div>
                  <!-- /.swiper-slide -->

                  <div class="swiper-slide">
                    <div class="team-item">
                      <picture class="team-item__picture lazy">
                        <img class="image image--cover lazy__item lazy__item--blur" data-src="img/layout/page/index/team/3.jpg" src="img/layout/page/index/team/thumb/3.jpg" alt="">
                      </picture>

                      <h3 class="team-item__name">Иванова Маша</h3>
                      <strong class="team-item__role">nail-мастер</strong>
                    </div>
                    <!-- /.team-item -->
                  </div>
                  <!-- /.swiper-slide -->
                </div>
                <!-- /.swiper-wrapper -->
              </div>
              <!-- /.swiper slider-team -->

              <div class="swiper-control swiper-control--transparent swiper-control--outside">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>
              <!-- /.swiper-control -->
            </div>
            <!-- /.slider -->
          </div>
          <!-- /.col-4 -->

          <div class="col-12 d-block d-md-none">
            <div class="section__header d-block d-md-none">
              <h2 class="section__title">
                Команда салона SVOBODA
              </h2>
            </div>
            <!-- /.section__header -->
          </div>
          <!-- /.col-12 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.team -->
    </div>
    <!-- /.container -->
  </section>

  <section id="feedback" class="section" style="background-image: url('img/layout/page/index/feedback/background.jpg');">
    <div class="container position-relative">
      <div class="section__header text-center">
        <h2 class="section__title">
          Отзывы
        </h2>
      </div>
      <!-- /.section__header -->

      <div class="feedback">
        <div class="feedback__slider slider">
          <div class="swiper slider-feedback">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="feedback__picture">
                  <img class="image image--contain" src="img/layout/page/index/feedback/1.png" alt="">
                </div>
                <!-- /.feedback__picture -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="feedback__picture">
                  <img class="image image--contain" src="img/layout/page/index/feedback/2.png" alt="">
                </div>
                <!-- /.feedback__picture -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="feedback__picture">
                  <img class="image image--contain" src="img/layout/page/index/feedback/3.png" alt="">
                </div>
                <!-- /.feedback__picture -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="feedback__picture">
                  <img class="image image--contain" src="img/layout/page/index/feedback/1.png" alt="">
                </div>
                <!-- /.feedback__picture -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="feedback__picture">
                  <img class="image image--contain" src="img/layout/page/index/feedback/2.png" alt="">
                </div>
                <!-- /.feedback__picture -->
              </div>
              <!-- /.swiper-slide -->
            </div>
            <!-- /.swiper-wrapper -->
          </div>
          <!-- /.swiper slider-feedback -->

          <div class="swiper-control swiper-control--transparent swiper-control--outside">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
          <!-- /.swiper-control -->
        </div>
        <!-- /.feedback__slider slider -->

        <div class="feedback__action text-center">
          <button class="button button-outline">Оставить отзыв</button>
        </div>
        <!-- /.feedback__action -->
      </div>
      <!-- /.feedback -->
    </div>
    <!-- /.container -->
  </section>

  <section id="interior" class="section">
    <div class="container">
      <div class="section__header text-center">
        <h2 class="section__title">
          Интерьер
        </h2>
      </div>
      <!-- /.section__header -->

      <div class="interior">
        <div class="interior__slider slider">
          <div class="swiper slider-interior">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <picture class="interior__picture lazy">
                  <a href="img/layout/page/index/interior/1.jpg" data-fslightbox="interior">
                    <img data-src="img/layout/page/index/interior/1.jpg" src="img/layout/page/index/interior/thumb/1.jpg" alt="" class="image image--cover lazy__item lazy__item--blur">
                  </a>
                </picture>
                <!-- /.interior__picture lazy -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <picture class="interior__picture lazy">
                  <a href="img/layout/page/index/interior/2.jpg" data-fslightbox="interior">
                    <img data-src="img/layout/page/index/interior/2.jpg" src="img/layout/page/index/interior/thumb/2.jpg" alt="" class="image image--cover lazy__item lazy__item--blur">
                  </a>
                </picture>
                <!-- /.interior__picture lazy -->
              </div>
              <!-- /.swiper-slide -->
            </div>
            <!-- /.swiper-wrapper -->
          </div>
          <!-- /.swiper slider-interior -->

          <div class="swiper-control">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
          <!-- /.swiper-control -->
        </div>
        <!-- /.interior__slider slider -->
      </div>
      <!-- /.interior -->
    </div>
    <!-- /.container -->
  </section>

  <?php include_once('layout/blocks/contact.php') ?>

</main>

<?php include_once('layout/partials/footer.php') ?>