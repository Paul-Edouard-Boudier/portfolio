  <h2 data-about="about" class="hobbies"><?= $i18n['pages']['about']['h2']?></h2>
  <section>
    <div class="infos-about">
      <div class="row about-me">
        <div class="col-12 col-md-3">
          <div class="do">
            <h3><?= $i18n['pages']['about']['do']['h3'] ?></h3>
            <br>
            <p><?= $i18n['pages']['about']['do']['dev'] ?></p>
            <p><?= $i18n['pages']['about']['do']['language']?> </p>
            <p>Я тоже знаю немного руский език, я бил в Россиа на одун миас, в Волгоградский университет.</p>
            <p><?= $i18n['pages']['about']['do']['russiantrip'] ?> </p>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="like">
            <h3><?= $i18n['pages']['about']['like']['h3'] ?></h3>
            <br>
            <p><?= $i18n['pages']['about']['like']['passionate']  ?> </p>
            <p><?= $i18n['pages']['about']['like']['hobbies'] ?></p>
            <p><?= $i18n['pages']['about']['like']['privatelife'] ?></p>
            <p><?= $i18n['pages']['about']['like']['security'] ?></p>
            <p><?= $i18n['pages']['about']['like']['motivated'] ?></p>
          </div>
        </div>
        <div class="col-12 col-md-3">
          <div class="looking-for">
            <h3> <?= $i18n['pages']['about']['looking_for']['h3'] ?></h3>
            <br>
            <p><?= $i18n['pages']['about']['looking_for']['currently'] ?></p>
            <p><?= $i18n['pages']['about']['looking_for']['finalgoal'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="flex-wrap flex-container section-slider section-container-full-height">
    <div class="slider">
      <div class="container-slider">
        <i data-button="left" class="white arrows fa fa-2x fa-arrow-left" aria-hidden="true"></i>
        <div class=" slider">
          <div class="image">
            <img data-number="1" class="hidden" src="images/csgo.jpg" alt="">
            <img data-number="2" class="hidden" src="images/leagueoflegends.jpg" alt="">
            <img data-number="3" class="hidden" src="images/learning.jpg" alt="">
            <img data-number="4" class="hidden" src="images/rugby-lou.jpg" alt="">
          </div>
          <div class="container-slider">
            <div data-dot="1" class="round white"></div>
            <div data-dot="2" class="round white"></div>
            <div data-dot="3" class="round white"></div>
            <div data-dot="4" class="round white"></div>
          </div>
        </div>
        <i data-button="right" class="white arrows fa fa-2x fa-arrow-right" aria-hidden="true"></i>
      </div>
    </div>
    <div>
      <!-- <p>Slider crée en Jquery HTML CSS</p> -->
      <p><?= $i18n['pages']['about']['slider'] ?></p>
    </div>
  </section>
</main>
