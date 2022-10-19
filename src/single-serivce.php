<?php include_once('layout/partials/header.php') ?>

<main id="single-service">
  <section id="about" class="section">
    <div class="container">
      <div class="section__header text-center">
        <h1 class="section__title">
          Эстетическая и аппаратная косметология
        </h1>
      </div>
      <!-- /.section__header -->

      <div class="about">
        <div data-editor="default" class="about__content">
          <p>
            Описание услуги
            уникальное пространство красоты, в котором слились в одно целое высококачественный сервис
            и искусство создания истинно элегантных и стильных образов с учетом последних тенденций и индивидуальных особенностей каждого клиента. Описание услуги уникальное пространство красоты, в котором слились в одно целое высококачественный сервис и искусство создания истинно элегантных и стильных образов с учетом последних тенденций и индивидуальных особенностей каждого клиента.
          </p>
        </div>
        <!-- /.about__content -->

        <div class="about__footer">
          <div class="about__price"><span>2000</span> ₽</div>
          <button data-subject="Эстетическая и аппаратная косметология" data-micromodal-trigger="modal-callback" class="button button-outline button--arrow">Записаться</button>
        </div>
        <!-- /.about__footer -->
      </div>
      <!-- /.about -->
    </div>
    <!-- /.container -->
  </section>

  <section id="portfolio" class="section" style="background-image: url('img/common/background-pink.jpg');">
    <div class="container">
      <div class="section__header text-center">
        <h2 class="section__title">
          Работы
        </h2>
      </div>
      <!-- /.section__header -->

      <div class="portfolio">
        <div class="portfolio__slider slider">
          <div class="swiper slider-portfolio">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <picture class="portfolio__picture lazy">
                  <a href="img/layout/page/single-service/portfolio/1.jpg" data-fslightbox="interior">
                    <img data-src="img/layout/page/single-service/portfolio/1.jpg" src="img/layout/page/single-service/portfolio/thumb/1.jpg" alt="" class="image image--cover lazy__item lazy__item--blur">
                  </a>
                </picture>
                <!-- /.portfolio__picture lazy -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <picture class="portfolio__picture lazy">
                  <a href="img/layout/page/single-service/portfolio/2.jpg" data-fslightbox="interior">
                    <img data-src="img/layout/page/single-service/portfolio/2.jpg" src="img/layout/page/single-service/portfolio/thumb/2.jpg" alt="" class="image image--cover lazy__item lazy__item--blur">
                  </a>
                </picture>
                <!-- /.portfolio__picture lazy -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <picture class="portfolio__picture lazy">
                  <a href="img/layout/page/single-service/portfolio/3.jpg" data-fslightbox="interior">
                    <img data-src="img/layout/page/single-service/portfolio/3.jpg" src="img/layout/page/single-service/portfolio/thumb/3.jpg" alt="" class="image image--cover lazy__item lazy__item--blur">
                  </a>
                </picture>
                <!-- /.portfolio__picture lazy -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <picture class="portfolio__picture lazy">
                  <a href="img/layout/page/single-service/portfolio/1.jpg" data-fslightbox="interior">
                    <img data-src="img/layout/page/single-service/portfolio/1.jpg" src="img/layout/page/single-service/portfolio/thumb/1.jpg" alt="" class="image image--cover lazy__item lazy__item--blur">
                  </a>
                </picture>
                <!-- /.portfolio__picture lazy -->
              </div>
              <!-- /.swiper-slide -->
            </div>
            <!-- /.swiper-wrapper -->
          </div>
          <!-- /.swiper slider-portfolio -->

          <div class="swiper-control">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
          <!-- /.swiper-control -->
        </div>
        <!-- /.slider -->
      </div>
      <!-- /.portfolio -->
    </div>
    <!-- /.container -->
  </section>

  <?php include_once('layout/blocks/contact.php') ?>

  <?php include_once('layout/blocks/service.php') ?>
</main>

<?php include_once('layout/partials/footer.php') ?>