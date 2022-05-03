<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="sardor Yusupjomov, Javokhir Abdufattokhov">
    <title>Real Gold Digger</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/revalia" rel="stylesheet">
    <script src="js/jquery-3.6.0.min.js"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link href="css/main.css" rel="stylesheet">
   
</head>
<body>
<!-- header -->
<header>
  <div class="py-2 border-bottom top">
    <div class="container d-flex flex-wrap">
      <div class="me-auto">
        <img class="top-icons" src="img/location-icon.png" alt="location">
        г.Ташкент, ул. А.Каххара, 9 переулок, дом 81/4
      </div>
      <div class="">
        <img class="top-icons" src="img/clock-icon.png" alt="">
        Пн-Вс 9:00 - 19:00 
      </div>
    </div>
  </div>
  <div class="container py-3">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3border-bottom">

      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img class="top-logo" src="img/rgd-logo2.png" alt="LOGO">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 main-nav">
        <li><a href="#" class="nav-link px-2 link-secondary">О Нас</a></li>
        <li><a href="#" class="nav-link px-2 link-secondary">Услуги</a></li>
        <li><a href="#" class="nav-link px-2 link-secondary">Продукты</a></li>
        <li><a href="#" class="nav-link px-2 link-secondary">Вопросы?</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <div class="contacts">+998 (93) 520 55 23</div>
        <div class="contacts">+998 (93) 500 53 35</div>
      </div>
    </div>
  </div>
</header>

<!-- section-banner -->
<div class="container-fluid section-banner">
  <div class="container">
    <div class="row justify-content-start">
      <div class="col-lg-5 col-md-7 col-sm-12">
        <div class="card my-5 p-3">
          <div class="card-body">
            <h5 class="card-title text-info">Доставка удобства, экономии и здоровой Жизни на Дом - 
            фильтры воды по Всему Узбекистану</h5>
            <p class="card-text">А вы знаете на сколько полезно пить чистую фильтрованную воду?.
            Мы бесплатно проведем анализ воды из под крана у вас дома,
            и предлагаем Услуги по установке фильтра воды.</p>
           
              <p class="text-muted">Позвоните нам прямо сейчас или оставьте свой номер
              и мы перезвоним в течении дня.</p> 
              <button type="button" class="btn btn-info mb-2 margin-right"
                data-bs-toggle="modal" data-bs-target="#orderModal">
              Заказать звонок</button>
               <a type="button" href="tel:+998935005335" class="btn mb-2 btn-success">Позвонить</a>
          </div>
        </div>
      </div>
    </div>
    @include("layouts.modal-order")
  </div>
</div>

<!-- main content -->
<main class="container-fluid">
  <div class="container pb-5">

    <!-- section-about-us  -->
    <div class="row  section-about-us p-2 my-4">
      <div class="col-lg-5 col-md-12 p-0">
        <img src="../img/group-photo.jpg" alt="Team-photo">
      </div>
      <div class="col-lg-7 col-md-12 p-3 ">
        <p class="fw-bold">“Real Gold Digger” Group - Опытная компания со стажем и креативная команда полных идей для вас!</p>
        <p>Наша компания занимается Анализом воды из под крана и Обеспечением чистой воды через установление фильтров для воды. Мы занимаемся  живой рекламой, а именно демонстрацией своих услуг и продуктов на примере результатов фильтрованной воды. Вы увидите все на примере До и После.</p>
        <div class="text-end">
         <!--  <button type="button" class="btn btn-outline-info">Подробно</button> -->
        </div>
      </div>
    </div>

    <!-- section-map -->
    <div class="row section-map mb-5">
      <div class="col-12 text-center text-muted">
        <p class="fw-bold">Вы ищите Нас?, а мы уже Здесь! по всему Узбекистану</p>    
      </div>
      <div class="row">
        <div class="col-lg-8 d-lg-block d-md-none d-sm-none d-none"
          style="max-height:530px;overflow:hidden;">
          <p class="">Расположения Наших Офисов</p>
          <div class="map-uz bg-none rounded">
            @include('layouts.map')
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <p class="text-center">Адреса и Контакты</p>
          <div class="map-text bg-white rounded">
           <select class="form-select" aria-label="Default select example"
              onchange="displayDivDemo(this)">
              <option selected>Выберите Ваш Регион</option>
              <option value="1">Город Ташкент</option>
              <option value="2">Ташкентская область</option>
              <!-- <option value="3">Андижанская область</option>
              <option value="4">Бухарская область</option>
              <option value="5">Джизакская область</option>
              <option value="6">Кашкадарьинская область</option>
              <option value="7">Навоийская область</option>
              <option value="8">Наманганская область</option> -->
              <option value="9">Самаркандская область</option>
             <!--  <option value="10">Сурхандарьинская область</option>
              <option value="11">Сырдарьинская область</option> -->
              <option value="12">Республика Каракалпакстан</option>
              <option value="13">Ферганская область</option>
              <option value="14">Хорезмская область</option>
            </select>
            <div class="contacts-by-region p-3">
              <p id="selected-region-name"
              class="fw-bold py-3 text-center">Ташкент</p>
              <ul class="list-group">
                  <!-- <li class="list-group-item">
                      <div class="name"></div>
                      <div class="value">Директор</div>
                  </li> -->
                  <li class="list-group-item">
                      <div class="name">Адрес:</div>
                      <div class="value"> г.Ташкент, ул. А.Каххара, 9 переулок, дом 81/4 </div>
                  </li>
                  <li class="list-group-item">
                      <div class="name">Телефон:</div>
                      <div class="value">+998 (93) 520 55 23</div>
                  </li>
                  <li class="list-group-item">
                      <div class="name">Электронная почта:</div>
                      <div class="value color-yellow">rgdfilters@gmail.com</div>
                  </li>
                 <!--  <li>
                      <div class="name">Веб-сайт</div>
                      <div class="value color-yellow">www.tymk.uz</div>
                  </li> -->
              </ul>
            </div>
            <script>
              function displayDivDemo(e) {
                 // console.log( typeof e.value);
                  var makeVar = eval(e.value);
                switch(makeVar + 0) {
                      case 1:
                        document.getElementById("selected-region-name").innerHTML = "Город Ташкент";
                        console.log(e.value);break;
                      case 2:
                        document.getElementById("selected-region-name").innerHTML = "Ташкентская область";
                         console.log(e.value);break;
                      case 3:
                         document.getElementById("selected-region-name").innerHTML = "Андижанская область";break;
                      case 4:
                         document.getElementById("selected-region-name").innerHTML = "Бухарская область";break;
                      case 5:
                         document.getElementById("selected-region-name").innerHTML = "Джизакская область";break;
                      case 6:
                          document.getElementById("selected-region-name").innerHTML = "Кашкадарьинская область";break;
                      case 7:
                        document.getElementById("selected-region-name").innerHTML = "Навоийская область";break;
                      case 8:
                        document.getElementById("selected-region-name").innerHTML = "Наманганская область";break;
                      case 9:
                        document.getElementById("selected-region-name").innerHTML = "Самаркандская область";break;
                      case 10:
                        document.getElementById("selected-region-name").innerHTML = "Сурхандарьинская область";break;
                      case 11:
                       document.getElementById("selected-region-name").innerHTML = "Сырдарьинская область";break;
                      case 12:
                        document.getElementById("selected-region-name").innerHTML = "Республика Каракалпакстан";break;
                      case 13:
                        document.getElementById("selected-region-name").innerHTML = "Ферганская область";break;
                      case 14:
                        document.getElementById("selected-region-name").innerHTML = "Ферганская область";break;
                      default:
                        document.getElementById("selected-region-name").innerHTML = "Город Ташкент";break;
                }
              }
            </script>
          </div>
        </div>
      </div>
    </div>

    <!-- section-service -->
    <div class="row section-service py-3 mb-5">
      <div class="col-12 text-center text-muted">
        <p class="fw-bold">УСЛУГИ - Как работаь с нами</p>    
      </div> 
      <div class="col-lg-5">
        <img src="img/howto.png" class="service-img" alt="Мы">
      </div>
      <div class="col-lg-7">
        <div class="row px-3">
          <div class="col-lg-12 service-steps">
            <div class="service-steps-numbers">1</div>
            <p>
              <b>Вы:</b> Делаете заявку <br>
              <b>Мы:</b> Отправляем группу специалистов для диагностики 
              загрязнённости воды <span style="color:#27AE60">(БЕСПЛАТНО)</span>.
            </p>  
          </div>
          <div class="col-lg-12 service-steps">
             <div class="service-steps-numbers">2</div>
              <p>
                <b>Мы:</b> При помощи приборов мы показываем разницу между 
                фильтрованной и не фильтрованной воды. <br>
                <b>Вы:</b> Получаете результаты анализа — Удостоверяетесь и вам решать нужно ли установка Фильтра.
              </p>    
          </div>
          <div class="col-lg-12 service-steps">
             <div class="service-steps-numbers">3</div>
              <p>
                <b>Если</b> Вы: Решили произвести установку фильтра. <br>
                <b>Мы:</b> Проведём качественную установку и вы становитесь клиентом, а обо всех клиентах мы заботимся. то-есть мы время от времени дозваниваемся до вас что бы удостоверится что у вас нет неисправностей или истечение срока смены ресурсов фильтра.
              </p>
          </div>
        </div>
      </div>
      <!-- sertaficate-parners -->
      <div class="col-12">
        <div class="row">
          <!-- sertaficate -->
          <div class="col-lg-12 col-md-5 p-3 text-center">
            <p>Сертефикаты</p>
            <img src="img/certf.png" class="sertf-img" alt="CERTEFICATE">
          </div>
          <!-- parners -->
          <!-- <div class="col-lg-8 col-md-7 p-3">
            <p class="text-center">Партнеры</p>
            <div class="partner px-3">
              <div class="row mb-1">
                <div class="col-3 col-md-3 col-sm-4"> 
                  <img src="img/partner-logo.jpg" alt="Waterfilters.uz" class="partner-logo">
                </div>
                <div class="col-9 col-md-9 col-sm-8 mb-2"> 
                  <a href="https://waterfilters.uz/"><p class="waterfilters-title">waterfilters.uz</p></a>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <p> <b>СП ООО Water Filters</b> является официальным дистрибьютором торговых марок Аквафор, WaterBoss, Aquaphor Professional в Узбекистане. А так же дилером Clack, Canature, Runxin, Broxo, Dow, Vontron, Krausen, Hidrotek, Cintropur и других мировых производителей систем водоочистки.</p>
                </div>
              </div>
            </div>
          </div> -->

        </div>
      </div>
    </div>

    <!-- section-top-reasons-why -->
    <div class="row section-top-reasons-why mb-5">
      <div class="row">
        <div class="col-12">
          <p class="fw-bold text-center">Топ-6 Преимуществ Фильтров для Воды</p>
        </div>
      </div>
      <div class="row">
         <div class="col-lg-6 col-md-12 mb-2">
           <div class="row px-1">
             <div class="col-lg-1 col-md-1 bg-info top-icon top-icon-1"></div>
             <div class="col-lg-11 col-md-11 top-text">
               Лучший выбор среди конкурентов: Доставка  воды на дом (Кулеров) и Бутылочной воды.
             </div>
           </div>
         </div>
         <div class="col-lg-6 col-md-12 mb-2">
           <div class="row px-1">
             <div class="col-lg-1 col-md-1 bg-info top-icon top-icon-2"></div>
             <div class="col-lg-11 col-md-11 top-text">
               Защита здоровья от бактерий, камней, соли и только полезное.
             </div>
           </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-6 col-md-12 mb-2">
           <div class="row px-1">
             <div class="col-lg-1 col-md-1 bg-info top-icon top-icon-3"></div>
             <div class="col-lg-11 col-md-11 top-text">
               Своя система производства постоянной чистой воды.
             </div>
           </div>
         </div>
         <div class="col-lg-6 col-md-12 mb-2">
           <div class="row px-1">
             <div class="col-lg-1 col-md-1 bg-info top-icon top-icon-4"></div>
             <div class="col-lg-11 col-md-11 top-text">
                ЭКО - в отличии бутылочной воды вам не придется 
                мусорить, или забивать урну. Скажем Пластику Нет
             </div>
           </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-6 col-md-12 mb-2">
           <div class="row px-1">
             <div class="col-lg-1 col-md-1 bg-info top-icon top-icon-5"></div>
             <div class="col-lg-11 col-md-11 top-text">
               Экономия Денег и Времени нежели возится на рынке, решение проблем: Покупка - Доставка - Установка.
             </div>
           </div>
         </div>
         <div class="col-lg-6 col-md-12 mb-2">
           <div class="row px-1">
             <div class="col-lg-1 col-md-1 bg-info top-icon top-icon-6"></div>
             <div class="col-lg-11 col-md-11 top-text">
               Пить фильтрованную воду рекомендована при большинстве заболеваний
             </div>
           </div>
         </div>
      </div>
    </div>

    <!-- section-adventages -->
    <div class="row section-adventages mb-5">
      <div class="row">
        <div class="col-12">
          <p class="fw-bold text-center">Наши Преимущества</p>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-lg-3 col-6 mb-3">
          <div class="row">
            <div class="col-12 adventages-icon-1"></div>
            <div class="col-12 adventages-text">Гарантия Два года</div>
          </div>
        </div>
        <div class="col-lg-3 col-6 mb-3">
          <div class="row">
            <div class="col-12 adventages-icon-2"></div>
            <div class="col-12 adventages-text">10 Лет Тех Поддержка</div>
          </div>
        </div>
        <div class="col-lg-3 col-6 mb-3">
          <div class="row">
            <div class="col-12 adventages-icon-3"></div>
            <div class="col-12 adventages-text">Опытные специалисты</div>
          </div>
        </div>
        <div class="col-lg-3 col-6 mb-3">
          <div class="row">
            <div class="col-12 adventages-icon-4"></div>
            <div class="col-12 adventages-text">Клиент на 1-ом месте</div>
          </div>
        </div>
      </div>
    </div>

    <!-- section-products -->
    <div class="row section-products mb-5">
      <div class="col-12 text-center py-3">  
        <h5>ПРОДУКТЫ - Фильтры для воды</h5>
      </div>  
      <div class="col-12">
        @include("layouts.product_slider")
      </div>
    </div>

    <!-- section-gallery -->
    <div class="row section-gallery mb-5">
      <div class="col-12 d-lg-block d-sm-none d-none">
        @include("layouts.gallery")
      </div>
    </div>

    <div class="error_fix container">
      <div class="row">
        <div class="col-12"></div>
      </div>
    </div>

    <!-- section-articles -->
    <div class="row section-articles mb-5">
      <div class="col-12 text-center py-3">  
        <h5>Полезные Статьи</h5>
      </div> 
      <div class="col-12">
        <div class="row row-cols-1 row-cols-md-3 g-4">

          <div class="col">
            <div class="card h-100">
              <img src="img/articles/1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p>
                  <h5 class="card-title">Почему прием чистой воды так полезно</h5>
                  <small class="text-muted">статья</small>
                </p>
                <p class="card-text">Насколько выгодно использование фильтров для воды чем питье из кулеров или постоянной покупки бутылочной воды</p>
              </div>
              <div class="card-footer text-end">
                <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" 
                  class="btn btn-info btn-sm">Подробно</button>
                  @include("layouts.modal-article")
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <img src="img/articles/2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p>
                  <h5 class="card-title">Cрок годность воды?</h5>
                  <small class="text-muted">статья</small>
                </p>
                <p class="card-text">А вы знали что на самом деле у воды из магазина Есть срок годности!</p>
              </div>
              <div class="card-footer text-end">
                <button type="button" class="btn btn-info btn-sm" 
                  data-bs-toggle="modal" data-bs-target="#exampleModal">Подробно</button>     
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <img src="img/articles/3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p>
                  <h5 class="card-title">А вы пьете чистую воду?</h5>
                  <small class="text-muted">статья</small>
                </p>
                <p class="card-text">О том сколько % людей пьют фильтрованную воду у нас в Узбекистане и в мире в целом</p>
              </div>
              <div class="card-footer text-end">
                <button type="button" class="btn btn-info btn-sm" 
                  data-bs-toggle="modal" data-bs-target="#exampleModal">Подробно</button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- section-media -->
    <div class="row section-articles mb-5">
      <div class="col-12 text-center py-3">  
        <h5>Отзывы Клиентов - Медиа</h5>
      </div> 
      <div class="col-12">
        <div class="row row-cols-1 row-cols-md-3 g-4">

          <div class="col-lg-4">
            <div class="card h-100">
              <img src="img/feedbacks/1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p>
                  <h5 class="card-title">Очередной результат нашей работы</h5>
                  <small class="text-muted">отзыв</small>
                </p>
                <p class="card-text">У меня были сомнения, но теперь я увидел результат- клиент доволен и поблагодарил нас, мы тоже рады предоставлять наши услуги</p>
              </div>
              <div class="card-footer text-end">
                <a href="https://www.instagram.com/p/CMeyASjhioa/" type="button" class="btn btn-info btn-sm">Подробно</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card h-100">
              <img src="img/feedbacks/2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p>
                  <h5 class="card-title">Как это работает</h5>
                  <small class="text-muted">медиа</small>
                </p>
                <p class="card-text">Узнай все на примере посмотрев разницу между фильтрованной и нефильтрованной водой.</p>
              </div>
              <div class="card-footer text-end">
                <a href="https://www.instagram.com/p/COVdE2jhQ9s/" type="button" class="btn btn-info btn-sm">Подробно</a>     
              </div>
            </div>
          </div>
          
          <div class="col-lg-4">
            <div class="card h-100">
              <img src="img/feedbacks/3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p>
                  <h5 class="card-title">Очередной результат нашей работы</h5>
                  <small class="text-muted">отзыв</small>
                </p>
                <p class="card-text">У меня были сомнения, но теперь я увидел результат- клиент доволен и поблагодарил нас, мы тоже рады предоставлять наши услуги</p>
              </div>
              <div class="card-footer text-end">
                <a href="https://www.instagram.com/p/CMeyASjhioa/" type="button" class="btn btn-info btn-sm">Подробно</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- section-faq -->
    <div class="row section-faq mb-5">
      <div class="col-lg-12">
         <h5 class="py-3 text-center">Возникли Вопросы?</h5>
      </div>
      <div class="col-lg-6 p-3 text-center">
        <div class="row">
          <div class="col-12 p-4">
            <p>Позвоните нам прямо сейчас или оставьте свой номер,
             и мы перезвоним в течении дня</p>
          </div>
          <div class="col-12 p-4">
             <button type="button" class="btn btn-info mb-2 margin-right"
                data-bs-toggle="modal" data-bs-target="#orderModal">
                Заказать звонок
              </button>
              <a type="button" href="tel:+998990994614" class="btn mb-2 btn-success">Позвонить</a>
          </div>
          <div class="col-12 p-4">
            <div class="row">
              <div class="col-3"><a href="https://t.me/rgdfilters"><img src="img/telegram.png" alt="rgdfilters"></a></div>
              <div class="col-3"><a href="https://facebook.com/"><img src="img/facebook.png" alt="rgdfilters"></a></div>
              <div class="col-3"><a href="https://www.instagram.com/rgdfilters/?hl=ru">
                <img src="img/instagram.png" alt="rgdfilters"></a></div>
              <div class="col-3"><a href="https://www.youtube.com/"><img src="img/youtube.png" alt="rgdfilters"></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 p-3 text-info">
        <div class="col-12 text-center">
          <p class="py-3 fw-bold">ЧаВо</p>
        </div>
        <div class="col-12">
          <ul>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Почему у нас дороже чем на рынке?</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Самые загрязнонные районы ?</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Коковы Цены продукта и расходы ?</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Как часто нужно менять Фильтер?</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Должен ли я ухаживать за фильтрам?</a></li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</main>
<!-- footer -->
<footer>
  <div class="py-2 border-bottom bottom">
    <div class="container d-flex flex-wrap">
      <div class="me-auto">
        <img class="top-icons" src="img/location-icon.png" alt="location">
        г.Ташкент, ул. А.Каххара, 9 переулок, дом 81/4
      </div>
      <div class="">
        <img class="top-icons" src="img/clock-icon.png" alt="">
        Пн-Вс 9:00 - 19:00 
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row p-3 text-center authors">
      <div class="col-4">Created by <a href="http://laravel.uz/" target="_blank">JavaFox</a></div>
      <div class="col-4"> &copy; Все права защищены 2021</div>
      <div class="col-4">and Powered by <a href="http://pwwweb.uz/" target="_blank">ProjectWeb</a></div>
    </div>
  </div>
</footer>

</body>
</html>
