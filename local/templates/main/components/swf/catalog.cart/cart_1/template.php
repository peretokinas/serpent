<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<main>
  <div class="container">
    <nav class="breadcrumbs">
      <ul class="breadcrumb-items">
        <li class="breadcrumb-item">
          <a href="#">Главная</a>
        </li>
        <li class="breadcrumb-item">
          <span>Корзина</span>
        </li>
      </ul>
    </nav>
  </div>
  <div class="container">
    <h1>Корзина</h1>
    <div class="basket-page">
      <form action="#" class="basket-form">
        <div class="basket-section">
          <div class="basket-section__head">
            <div class="basket-section__head-number">1</div>
            <h3>Контактные данные</h3>
          </div>
          <div class="form-item">
            <input type="text" placeholder="Имя">
          </div>
          <div class="form-item">
            <input type="text" placeholder="фамилия">
          </div>
          <div class="form-item">
            <input type="text" placeholder="телефон">
          </div>
          <div class="form-item">
            <input type="text" placeholder="Адрес электронной почты">
          </div>
        </div>
        <div class="basket-section">
          <div class="basket-section__head">
            <div class="basket-section__head-number">2</div>
            <h3>способ получения</h3>
          </div>
          <div class="tabs-container">
            <a href="#" data-tab="showroom" class="tabs-head active">Забрать из шоурума</a>
            <a href="#" data-tab="courier" class="tabs-head">
              Курьером
              <svg xmlns="http://www.w3.org/2000/svg" width="57" height="16" viewBox="0 0 57 16"
                 fill="none">
                <path d="M9.09332 12.1165H6.65421C2.85102 12.1165 5.61308 3.86737 8.81553 3.86737H12.6684C13.285 3.86737 14.3758 3.9845 14.911 2.42285L15.7421 0H10.4597C7.59824 0 5.37143 1.02885 3.76117 2.75585C0.981042 5.7092 0.0392773 10.3252 0.705514 12.5322C1.34013 14.5738 3.06331 15.9173 5.76214 15.9518L7.86022 15.9678H10.4461L11.0807 14.025C11.5482 12.6471 10.4913 12.1165 9.09332 12.1165ZM38.7781 8.697L39.5753 6.05827H31.0723C29.6586 6.05827 29.0239 6.45558 28.78 7.28692L27.9851 9.92565H36.4881C37.9018 9.92565 38.5342 9.52835 38.7781 8.697ZM26.7158 13.3452L25.9209 15.9839H34.4216C35.8196 15.9839 36.47 15.5866 36.7139 14.7553L37.5111 12.1165H29.0081C27.6102 12.1165 26.9756 12.5161 26.7158 13.3452ZM40.7633 2.6548L41.5582 0.0160758H33.0552C31.6415 0.0160758 31.0069 0.413377 30.7629 1.24473L29.9657 3.88345H38.4687C39.8689 3.88345 40.5013 3.48615 40.7633 2.6548ZM27.9196 3.1876C27.5627 0.7303 26.2777 0.0183723 23.1566 0.0183723H17.4653L14.1499 9.92565H16.248C17.4992 9.92565 18.1338 9.94173 18.8 8.11598L20.1822 3.86737H22.2938C24.0983 3.86737 23.6918 6.1754 22.7817 8.41453C21.9686 10.3896 20.5548 12.1326 18.8475 12.1326H15.3198C13.906 12.1326 13.2556 12.5299 12.9959 13.3613L12.1174 16H14.701L17.2372 15.9839C19.4798 15.9678 21.3182 15.8025 23.4637 13.8252C25.7402 11.7192 28.3758 6.3063 27.9196 3.1876ZM56.5 0H51.5744L46.9401 5.02942C46.4026 5.61045 45.8515 6.19147 45.314 6.87125H45.2643L47.5747 0H43.5592L38.1457 15.9839H42.1612L43.8844 10.9545L45.6731 9.41122L47.0869 13.9584C47.525 15.3685 47.9812 15.9839 48.9568 15.9839H52.0283L48.8755 7.05497L56.5 0Z"
                    fill="#B3A8A4"/>
              </svg>
            </a>
            <a href="#" data-tab="point" class="tabs-head">
              Пункт выдачи
              <svg xmlns="http://www.w3.org/2000/svg" width="57" height="16" viewBox="0 0 57 16"
                 fill="none">
                <path d="M9.09332 12.1165H6.65421C2.85102 12.1165 5.61308 3.86737 8.81553 3.86737H12.6684C13.285 3.86737 14.3758 3.9845 14.911 2.42285L15.7421 0H10.4597C7.59824 0 5.37143 1.02885 3.76117 2.75585C0.981042 5.7092 0.0392773 10.3252 0.705514 12.5322C1.34013 14.5738 3.06331 15.9173 5.76214 15.9518L7.86022 15.9678H10.4461L11.0807 14.025C11.5482 12.6471 10.4913 12.1165 9.09332 12.1165ZM38.7781 8.697L39.5753 6.05827H31.0723C29.6586 6.05827 29.0239 6.45558 28.78 7.28692L27.9851 9.92565H36.4881C37.9018 9.92565 38.5342 9.52835 38.7781 8.697ZM26.7158 13.3452L25.9209 15.9839H34.4216C35.8196 15.9839 36.47 15.5866 36.7139 14.7553L37.5111 12.1165H29.0081C27.6102 12.1165 26.9756 12.5161 26.7158 13.3452ZM40.7633 2.6548L41.5582 0.0160758H33.0552C31.6415 0.0160758 31.0069 0.413377 30.7629 1.24473L29.9657 3.88345H38.4687C39.8689 3.88345 40.5013 3.48615 40.7633 2.6548ZM27.9196 3.1876C27.5627 0.7303 26.2777 0.0183723 23.1566 0.0183723H17.4653L14.1499 9.92565H16.248C17.4992 9.92565 18.1338 9.94173 18.8 8.11598L20.1822 3.86737H22.2938C24.0983 3.86737 23.6918 6.1754 22.7817 8.41453C21.9686 10.3896 20.5548 12.1326 18.8475 12.1326H15.3198C13.906 12.1326 13.2556 12.5299 12.9959 13.3613L12.1174 16H14.701L17.2372 15.9839C19.4798 15.9678 21.3182 15.8025 23.4637 13.8252C25.7402 11.7192 28.3758 6.3063 27.9196 3.1876ZM56.5 0H51.5744L46.9401 5.02942C46.4026 5.61045 45.8515 6.19147 45.314 6.87125H45.2643L47.5747 0H43.5592L38.1457 15.9839H42.1612L43.8844 10.9545L45.6731 9.41122L47.0869 13.9584C47.525 15.3685 47.9812 15.9839 48.9568 15.9839H52.0283L48.8755 7.05497L56.5 0Z"
                    fill="#B3A8A4"/>
              </svg>
            </a>
          </div>
          <div class="tab-block">
            <div class="tab-content active" data-id="showroom">
              <div class="main-tab">
                <div class="card-flex">
                  <div class="card-column">
                    <div class="card-title">Как добраться</div>
                    <div class="card-text">
                      <span>г. Москва, Столешников переулок</span>
                      <span class="fw-600">ст. м. Пушкинское, ст. м. Тверская</span>
                      <span>(3 минуты и направо)</span>
                    </div>
                  </div>
                  <div class="card-column">
                    <div class="card-title">Режим работы</div>
                    <div class="card-text">
                      <span class="card-text__time">
                        <span class="fw-600">Пн-Пт: </span>
                        <span>9:00 - 19:00</span>
                      </span>
                      <span class="card-text__time">
                        <span class="fw-600">Сб-Вс: </span>
                        <span>9:00 - 18:00</span>
                      </span>
                      <span class="fw-600">Без выходных</span>
                    </div>
                  </div>
                </div>
                <div class="card-map">
                  <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/basket/map.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="tab-content" data-id="courier">
              <div class="main-tab">
                <h3>Ваш адрес</h3>
                <div class="form-item">
                  <input type="text" placeholder="Город">
                </div>
                <div class="form-item__address">
                  <div class="form-item">
                    <input type="text" placeholder="Улица ">
                  </div>
                  <div class="form-item">
                    <input type="text" placeholder="Дом">
                  </div>
                  <div class="form-item">
                    <input type="text" placeholder="Квартира">
                  </div>
                </div>
                <div class="form-item">
                  <input type="text" placeholder="подъезд, этаж, другой комментарий">
                </div>
                <div class="card-map">
                  <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/basket/map.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="tab-content" data-id="point">
              <div class="main-tab">
                <div class="select-city">
                  <div class="select-city__text">Город</div>
                  <select>
                    <option value="1">
                      Москва
                    </option>
                    <option value="2">
                      Санкт-Петербург
                    </option>
                    <option value="3">
                      Кемерово
                    </option>
                  </select>
                </div>
                <div class="point-items">
                  <div class="point-item">
                    <input type="radio" name="point" checked>
                    <div class="point-item__flex">
                      <div class="point-icon"></div>
                      <div class="point-item__address">
                        <span class="fw-600">г. Москва, </span> ул. Арбат, 1
                      </div>
                      <div class="point-item__mode">
                        <span class="card-text__time">
                          <span class="fw-600">Пн-Пт: </span>
                          <span>9:00 - 19:00</span>
                        </span>
                        <span class="card-text__time">
                          <span class="fw-600">Сб-Вс: </span>
                          <span>9:00 - 18:00</span>
                        </span>
                      </div>
                    </div>

                  </div>
                  <div class="point-item">
                    <input type="radio" name="point">
                    <div class="point-item__flex">
                      <div class="point-icon"></div>
                      <div class="point-item__address">
                        <span class="fw-600">г. Москва, </span>ул. Якиманка, 12
                      </div>
                      <div class="point-item__mode">
                        <span class="card-text__time">
                          <span class="fw-600">Пн-Пт: </span>
                          <span>9:00 - 19:00</span>
                        </span>
                        <span class="card-text__time">
                          <span class="fw-600">Сб-Вс: </span>
                          <span>9:00 - 18:00</span>
                        </span>
                      </div>
                    </div>

                  </div>
                  <div class="point-item">
                    <input type="radio" name="point">
                    <div class="point-item__flex">
                      <div class="point-icon"></div>
                      <div class="point-item__address">
                        <span class="fw-600">г. Москва, </span>  ул. Сретенка, 32
                      </div>
                      <div class="point-item__mode">
                        <span class="card-text__time">
                          <span class="fw-600">Пн-Пт: </span>
                          <span>9:00 - 19:00</span>
                        </span>
                        <span class="card-text__time">
                          <span class="fw-600">Сб-Вс: </span>
                          <span>9:00 - 18:00</span>
                        </span>
                      </div>
                    </div>

                  </div>
                  <div class="point-item">
                    <input type="radio" name="point">
                    <div class="point-item__flex">
                      <div class="point-icon"></div>
                      <div class="point-item__address">
                        <span class="fw-600">г. Москва, </span> Площадь победы, 2
                      </div>
                      <div class="point-item__mode">
                        <span class="card-text__time">
                          <span class="fw-600">Пн-Пт: </span>
                          <span>9:00 - 19:00</span>
                        </span>
                        <span class="card-text__time">
                          <span class="fw-600">Сб-Вс: </span>
                          <span>9:00 - 18:00</span>
                        </span>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="card-map">
                  <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/basket/map.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="basket-section">
          <div class="basket-section__head">
            <div class="basket-section__head-number">3</div>
            <h3>Способ оплаты</h3>
          </div>
          <div class="pay-flex">
            <div class="pay-way">
              <div class="pay-way__item pay-way__item-personally active">
                <input type="radio" name="pay" value="personally" checked>
                При получении
              </div>
              <div class="pay-way__item pay-way__item-card">
                <input type="radio" name="pay" value="card">
                Картой на сайте
              </div>
              <div class="pay-slider"></div>
            </div>
            <div class="pay-sign">+</div>
            <div class="pay-balls">
              <input type="checkbox" class="pay-bills-check">
              Списать балы
            </div>
          </div>
          <div class="balls-flex__hidden">
            <div class="balls-flex">
              <div class="balls-label">
                Укажите колличество баллов
              </div>
              <div class="balls-row">
                <div class="balls-input">
                  <input type="text" disabled max="3500" value="2000">
                  <div class="balls-max">3500</div>
                </div>
                <div class="balls-slider">
                  <div id="slider"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="basket-section">
          <div class="basket-section__head">
            <div class="basket-section__head-number">4</div>
            <h3>Комментарий к заказу</h3>
          </div>
          <div class="form-item">
            <input type="text" placeholder="Ваш комментарий...">
          </div>
        </div>
      </form>
      <div class="basket-sidebar">
        <h3>Корзина</h3>
        <div class="basket-items-product">
          <div class="basket-item">
            <a href="#" class="basket-item__pic">
              <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/basket/basket-item-1.jpg" alt="">
            </a>
            <div class="basket-item__content">
              <a href="#" class="basket-item__title">Раздельный купальник “LARA”</a>
              <div class="basket-item__info">
                <div class="basket-item__size">
                  Размер:
                  <span> xs</span>
                </div>
                <div class="basket-item__color">
                  Цвет:
                  <div class="product-slide__color-item">
                    <input type="radio" name="color-1" checked="" disabled>
                    <span class="product-slide__color-circle">
                        <span style="background: #263740"></span>
                      </span>
                  </div>
                </div>
              </div>
              <div class="basket-price"><span>10 500</span> ₽</div>
            </div>
            <div class="basket-event">
              <div class="count">
                <div class="count-sign">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                     fill="none">
                    <path d="M1.39941 6.94336L12.6568 6.99965" stroke="#263740" stroke-width="1.4"
                        stroke-linecap="square"/>
                    <path d="M6.94434 1.39893L7.00062 12.6563" stroke="#263740" stroke-width="1.4"
                        stroke-linecap="square"/>
                  </svg>
                </div>
                <input type="text" class="count-input" value="1">
                <div class="count-sign">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12"
                     fill="none">
                    <path d="M1.34326 6H12.657" stroke="#263740" stroke-width="1.4"
                        stroke-linecap="square"/>
                  </svg>
                </div>
              </div>
              <div class="basket-event__product">
                <a href="#" class="favorites">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                     fill="none">
                    <path d="M10.0002 17C10.0002 17 2.73044 11.2623 1.46561 8.69266C0.95956 7.77752 0.730235 6.73509 0.805508 5.69207C0.880781 4.64905 1.25742 3.65035 1.88963 2.81736V2.81736C2.25166 2.3275 2.70977 1.91661 3.23598 1.6098C3.76219 1.30299 4.34545 1.10671 4.95008 1.03296C5.55472 0.959204 6.16805 1.00954 6.75258 1.18086C7.33711 1.35218 7.88057 1.64089 8.34974 2.02936L10.0002 3.39577L11.6506 2.02936C12.1198 1.64089 12.6632 1.35218 13.2477 1.18086C13.8323 1.00954 14.4456 0.959204 15.0502 1.03296C15.6549 1.10671 16.2381 1.30299 16.7643 1.6098C17.2906 1.91661 17.7487 2.3275 18.1107 2.81736V2.81736C18.7429 3.65035 19.1195 4.64905 19.1948 5.69207C19.2701 6.73509 19.0408 7.77752 18.5347 8.69266C17.2691 11.2623 10.0002 17 10.0002 17Z"
                        stroke="#263740" stroke-miterlimit="10"/>
                  </svg>
                </a>
                <a href="#" class="delete">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                     fill="none">
                    <path d="M15.0969 3.82373C15.0969 3.82373 14.6706 11.2772 14.3296 14.5033C14.3296 15.8383 13.3917 16.9508 12.3686 16.9508C12.3686 16.9508 12.3686 16.9508 12.2834 16.9508C10.0666 16.9508 7.84986 17.062 5.6331 16.9508C4.60998 16.9508 3.75738 15.9495 3.67212 14.6146C3.41634 11.3885 2.90479 3.93498 2.90479 3.93498"
                        stroke="#FF8980" stroke-width="1.4" stroke-miterlimit="10"
                        stroke-linecap="square" stroke-linejoin="round"/>
                    <path d="M16.4512 3.76123H1.54883" stroke="#FF8980" stroke-width="1.4"
                        stroke-miterlimit="10" stroke-linecap="square" stroke-linejoin="round"/>
                    <path d="M13.5581 3.76093C12.8568 3.76093 12.2432 3.27371 12.1556 2.70528L11.9802 1.73084C11.8926 1.24361 11.3666 1 10.9283 1H7.15889C6.63293 1 6.19462 1.32482 6.10696 1.73084L5.84398 2.70528C5.66866 3.35492 5.14269 3.76093 4.44141 3.76093"
                        stroke="#FF8980" stroke-miterlimit="10" stroke-linecap="square"
                        stroke-linejoin="round"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="basket-item">
            <a href="#" class="basket-item__pic">
              <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/basket/basket-item-1.jpg" alt="">
            </a>
            <div class="basket-item__content">
              <a href="#" class="basket-item__title">Раздельный купальник “LARA”</a>
              <div class="basket-item__info">
                <div class="basket-item__size">
                  Размер:
                  <span> xs</span>
                </div>
                <div class="basket-item__color">
                  Цвет:
                  <div class="product-slide__color-item">
                    <input type="radio" name="color-2" checked="" disabled>
                    <span class="product-slide__color-circle">
                        <span style="background: #263740"></span>
                      </span>
                  </div>
                </div>
              </div>
              <div class="basket-price"><span>10 500</span> ₽</div>
            </div>
            <div class="basket-event">
              <div class="count">
                <div class="count-sign">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                     fill="none">
                    <path d="M1.39941 6.94336L12.6568 6.99965" stroke="#263740" stroke-width="1.4"
                        stroke-linecap="square"/>
                    <path d="M6.94434 1.39893L7.00062 12.6563" stroke="#263740" stroke-width="1.4"
                        stroke-linecap="square"/>
                  </svg>
                </div>
                <input type="text" class="count-input" value="1">
                <div class="count-sign">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12"
                     fill="none">
                    <path d="M1.34326 6H12.657" stroke="#263740" stroke-width="1.4"
                        stroke-linecap="square"/>
                  </svg>
                </div>
              </div>
              <div class="basket-event__product">
                <a href="#" class="favorites">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                     fill="none">
                    <path d="M10.0002 17C10.0002 17 2.73044 11.2623 1.46561 8.69266C0.95956 7.77752 0.730235 6.73509 0.805508 5.69207C0.880781 4.64905 1.25742 3.65035 1.88963 2.81736V2.81736C2.25166 2.3275 2.70977 1.91661 3.23598 1.6098C3.76219 1.30299 4.34545 1.10671 4.95008 1.03296C5.55472 0.959204 6.16805 1.00954 6.75258 1.18086C7.33711 1.35218 7.88057 1.64089 8.34974 2.02936L10.0002 3.39577L11.6506 2.02936C12.1198 1.64089 12.6632 1.35218 13.2477 1.18086C13.8323 1.00954 14.4456 0.959204 15.0502 1.03296C15.6549 1.10671 16.2381 1.30299 16.7643 1.6098C17.2906 1.91661 17.7487 2.3275 18.1107 2.81736V2.81736C18.7429 3.65035 19.1195 4.64905 19.1948 5.69207C19.2701 6.73509 19.0408 7.77752 18.5347 8.69266C17.2691 11.2623 10.0002 17 10.0002 17Z"
                        stroke="#263740" stroke-miterlimit="10"/>
                  </svg>
                </a>
                <a href="#" class="delete">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                     fill="none">
                    <path d="M15.0969 3.82373C15.0969 3.82373 14.6706 11.2772 14.3296 14.5033C14.3296 15.8383 13.3917 16.9508 12.3686 16.9508C12.3686 16.9508 12.3686 16.9508 12.2834 16.9508C10.0666 16.9508 7.84986 17.062 5.6331 16.9508C4.60998 16.9508 3.75738 15.9495 3.67212 14.6146C3.41634 11.3885 2.90479 3.93498 2.90479 3.93498"
                        stroke="#FF8980" stroke-width="1.4" stroke-miterlimit="10"
                        stroke-linecap="square" stroke-linejoin="round"/>
                    <path d="M16.4512 3.76123H1.54883" stroke="#FF8980" stroke-width="1.4"
                        stroke-miterlimit="10" stroke-linecap="square" stroke-linejoin="round"/>
                    <path d="M13.5581 3.76093C12.8568 3.76093 12.2432 3.27371 12.1556 2.70528L11.9802 1.73084C11.8926 1.24361 11.3666 1 10.9283 1H7.15889C6.63293 1 6.19462 1.32482 6.10696 1.73084L5.84398 2.70528C5.66866 3.35492 5.14269 3.76093 4.44141 3.76093"
                        stroke="#FF8980" stroke-miterlimit="10" stroke-linecap="square"
                        stroke-linejoin="round"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="basket-item">
            <a href="#" class="basket-item__pic">
              <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/basket/basket-item-1.jpg" alt="">
            </a>
            <div class="basket-item__content">
              <a href="#" class="basket-item__title">Раздельный купальник “LARA”</a>
              <div class="basket-item__info">
                <div class="basket-item__size">
                  Размер:
                  <span> xs</span>
                </div>
                <div class="basket-item__color">
                  Цвет:
                  <div class="product-slide__color-item">
                    <input type="radio" name="color-3" checked="" disabled>
                    <span class="product-slide__color-circle">
                        <span style="background: #263740"></span>
                      </span>
                  </div>
                </div>
              </div>
              <div class="basket-price"><span>10 500</span> ₽</div>
            </div>
            <div class="basket-event">
              <div class="count">
                <div class="count-sign">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                     fill="none">
                    <path d="M1.39941 6.94336L12.6568 6.99965" stroke="#263740" stroke-width="1.4"
                        stroke-linecap="square"/>
                    <path d="M6.94434 1.39893L7.00062 12.6563" stroke="#263740" stroke-width="1.4"
                        stroke-linecap="square"/>
                  </svg>
                </div>
                <input type="text" class="count-input" value="1">
                <div class="count-sign">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12"
                     fill="none">
                    <path d="M1.34326 6H12.657" stroke="#263740" stroke-width="1.4"
                        stroke-linecap="square"/>
                  </svg>
                </div>
              </div>
              <div class="basket-event__product">
                <a href="#" class="favorites">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                     fill="none">
                    <path d="M10.0002 17C10.0002 17 2.73044 11.2623 1.46561 8.69266C0.95956 7.77752 0.730235 6.73509 0.805508 5.69207C0.880781 4.64905 1.25742 3.65035 1.88963 2.81736V2.81736C2.25166 2.3275 2.70977 1.91661 3.23598 1.6098C3.76219 1.30299 4.34545 1.10671 4.95008 1.03296C5.55472 0.959204 6.16805 1.00954 6.75258 1.18086C7.33711 1.35218 7.88057 1.64089 8.34974 2.02936L10.0002 3.39577L11.6506 2.02936C12.1198 1.64089 12.6632 1.35218 13.2477 1.18086C13.8323 1.00954 14.4456 0.959204 15.0502 1.03296C15.6549 1.10671 16.2381 1.30299 16.7643 1.6098C17.2906 1.91661 17.7487 2.3275 18.1107 2.81736V2.81736C18.7429 3.65035 19.1195 4.64905 19.1948 5.69207C19.2701 6.73509 19.0408 7.77752 18.5347 8.69266C17.2691 11.2623 10.0002 17 10.0002 17Z"
                        stroke="#263740" stroke-miterlimit="10"/>
                  </svg>
                </a>
                <a href="#" class="delete">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                     fill="none">
                    <path d="M15.0969 3.82373C15.0969 3.82373 14.6706 11.2772 14.3296 14.5033C14.3296 15.8383 13.3917 16.9508 12.3686 16.9508C12.3686 16.9508 12.3686 16.9508 12.2834 16.9508C10.0666 16.9508 7.84986 17.062 5.6331 16.9508C4.60998 16.9508 3.75738 15.9495 3.67212 14.6146C3.41634 11.3885 2.90479 3.93498 2.90479 3.93498"
                        stroke="#FF8980" stroke-width="1.4" stroke-miterlimit="10"
                        stroke-linecap="square" stroke-linejoin="round"/>
                    <path d="M16.4512 3.76123H1.54883" stroke="#FF8980" stroke-width="1.4"
                        stroke-miterlimit="10" stroke-linecap="square" stroke-linejoin="round"/>
                    <path d="M13.5581 3.76093C12.8568 3.76093 12.2432 3.27371 12.1556 2.70528L11.9802 1.73084C11.8926 1.24361 11.3666 1 10.9283 1H7.15889C6.63293 1 6.19462 1.32482 6.10696 1.73084L5.84398 2.70528C5.66866 3.35492 5.14269 3.76093 4.44141 3.76093"
                        stroke="#FF8980" stroke-miterlimit="10" stroke-linecap="square"
                        stroke-linejoin="round"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="basket-final">
          <div class="basket-line">
            <span>Сумма заказа</span>
            <span>
              <b>10 500 </b> ₽
            </span>
          </div>
          <div class="basket-line">
            <span>Скидка</span>
            <span>
              <b>2 000 </b> ₽
            </span>
          </div>
          <div class="basket-line">
            <span>Списание балов</span>
            <span>
              <b>1 200 </b> ₽
            </span>
          </div>
          <div class="basket-line">
            <span>Доставка</span>
            <span>
              <b>0 </b> ₽
            </span>
          </div>
          <div class="basket-line__final">
            <span class="fw-600">Итого</span>
            <span>
              <b>12 500 </b> ₽
            </span>
          </div>
          <a href="#" class="btn btn_basket">Оформить заказ</a>
        </div>
      </div>
    </div>
  </div>
  <div class="new-image">
    <div class="container">
      <div class="section section-slider">
        <div class="section-top mb-60">
          <div class="section-top__flex">
            <div class="title">Дополните свой образ</div>
          </div>
          <div class="section-top__event">
            <div class="section-top__arrow">
              <div class="swiper-button-prev swiper-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31"
                   fill="none">
                  <path d="M2.82874 16.0006L32.0002 16.002" stroke="#263740" stroke-linejoin="round"/>
                  <path d="M8.10234 9.88823L2.00018 15.963L8.10076 22.0393" stroke="#263740"
                      stroke-width="2"/>
                </svg>
              </div>
              <div class="swiper-button-next swiper-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31"
                   fill="none">
                  <path d="M29.1713 16.0006L-0.000242786 16.002" stroke="#263740"
                      stroke-linejoin="round"/>
                  <path d="M23.8977 9.88823L29.9998 15.963L23.8992 22.0393" stroke="#263740"
                      stroke-width="2"/>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="slider-container">
          <div class="slider-product swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product-slide">
                  <div class="product-slide__pic">
                    <div class="product-favorite">
                      <input type="checkbox">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                         viewBox="0 0 20 18" fill="none">
                        <path fill="transparent"
                            d="M10.0002 17C10.0002 17 2.73044 11.2623 1.46561 8.69266C0.95956 7.77752 0.730235 6.73509 0.805508 5.69207C0.880781 4.64905 1.25742 3.65035 1.88963 2.81736V2.81736C2.25166 2.3275 2.70977 1.91661 3.23598 1.6098C3.76219 1.30299 4.34545 1.10671 4.95008 1.03296C5.55472 0.959204 6.16805 1.00954 6.75258 1.18086C7.33711 1.35218 7.88057 1.64089 8.34974 2.02936L10.0002 3.39577L11.6506 2.02936C12.1198 1.64089 12.6632 1.35218 13.2477 1.18086C13.8323 1.00954 14.4456 0.959204 15.0502 1.03296C15.6549 1.10671 16.2381 1.30299 16.7643 1.6098C17.2906 1.91661 17.7487 2.3275 18.1107 2.81736V2.81736C18.7429 3.65035 19.1195 4.64905 19.1948 5.69207C19.2701 6.73509 19.0408 7.77752 18.5347 8.69266C17.2691 11.2623 10.0002 17 10.0002 17Z"
                            stroke="#263740" stroke-miterlimit="10"/>
                      </svg>
                    </div>
                    <div class="product-slide__tags">
                      <div class="product-slide__tag product-slide__new">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                          <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                              stroke-width="2"/>
                        </svg>
                        <span>new</span>
                      </div>
                      <div class="product-slide__tag product-slide__hit">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                          <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                              stroke-width="2"/>
                        </svg>
                        <span>Hit</span>
                      </div>
                      <div class="product-slide__tag product-slide__sale">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                          <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                              stroke-width="2"/>
                        </svg>
                        <span>-23%</span>
                      </div>
                    </div>
                    <div class="product-slide__swiper swiper">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-1.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-1.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-1.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-1.jpg" alt="">
                        </div>
                      </div>
                      <div class="swiper-arrow swiper-arrow__left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14"
                           viewBox="0 0 9 14" fill="none">
                          <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639"
                              stroke="#263740" stroke-width="2"></path>
                        </svg>
                      </div>
                      <div class="swiper-arrow swiper-arrow__right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14"
                           viewBox="0 0 9 14" fill="none">
                          <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639"
                              stroke="#263740" stroke-width="2"></path>
                        </svg>
                      </div>
                      <div class="swiper-pagination"></div>
                    </div>
                  </div>
                  <div class="product-slide__event">
                    <div class="product-slide__color">
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-9" checked>
                        <span class="product-slide__color-circle">
                        <span style="background: #263740"></span>
                      </span>
                      </div>
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-9">
                        <span class="product-slide__color-circle">
                        <span style="background: #E6B886"></span>
                      </span>
                      </div>
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-9">
                        <span class="product-slide__color-circle">
                        <span style="background: #EDEDED"></span>
                      </span>
                      </div>
                    </div>
                    <div class="product-slide__size">
                      <div class="product-slide__size-default">
                        <div class="product-slide__size-default-text">
                          Размер
                          <span>S</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="7"
                           viewBox="0 0 13 7" fill="none">
                          <path d="M11.9899 0.988847L7.05135 5.94975L2.11147 0.990131"
                              stroke="#263740"/>
                        </svg>
                      </div>
                      <div class="product-slide__size-items">
                        <div class="product-slide__size-item active">S</div>
                        <div class="product-slide__size-item">M</div>
                        <div class="product-slide__size-item">XL</div>
                      </div>
                    </div>
                  </div>
                  <div class="product-slide__info">
                    <div class="product-slide__content">
                      <a href="#" class="product-slide__title">Слитный купальник “Daniella”</a>
                      <div class="product-slide__price">
                        <div class="product-slide__new-price"><span>10 500</span> ₽</div>
                        <div class="product-slide__old-price">10 500</div>
                      </div>
                    </div>
                    <div class="product-basket">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20"
                         viewBox="0 0 18 20" fill="none">
                        <path d="M17.0011 5.63635H1.0011V18.7273H17.0011V5.63635Z" stroke="white"
                            stroke-width="1.6" stroke-miterlimit="10"/>
                        <path d="M6.09216 10.2749V4.18181C6.09216 3.41027 6.39865 2.67032 6.94421 2.12476C7.48977 1.5792 8.22971 1.27271 9.00125 1.27271C9.77279 1.27271 10.5127 1.5792 11.0583 2.12476C11.6038 2.67032 11.9103 3.41027 11.9103 4.18181V10.2749"
                            stroke="white" stroke-miterlimit="10"/>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-slide">
                  <div class="product-slide__pic">
                    <div class="product-favorite">
                      <input type="checkbox">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                         viewBox="0 0 20 18" fill="none">
                        <path fill="transparent"
                            d="M10.0002 17C10.0002 17 2.73044 11.2623 1.46561 8.69266C0.95956 7.77752 0.730235 6.73509 0.805508 5.69207C0.880781 4.64905 1.25742 3.65035 1.88963 2.81736V2.81736C2.25166 2.3275 2.70977 1.91661 3.23598 1.6098C3.76219 1.30299 4.34545 1.10671 4.95008 1.03296C5.55472 0.959204 6.16805 1.00954 6.75258 1.18086C7.33711 1.35218 7.88057 1.64089 8.34974 2.02936L10.0002 3.39577L11.6506 2.02936C12.1198 1.64089 12.6632 1.35218 13.2477 1.18086C13.8323 1.00954 14.4456 0.959204 15.0502 1.03296C15.6549 1.10671 16.2381 1.30299 16.7643 1.6098C17.2906 1.91661 17.7487 2.3275 18.1107 2.81736V2.81736C18.7429 3.65035 19.1195 4.64905 19.1948 5.69207C19.2701 6.73509 19.0408 7.77752 18.5347 8.69266C17.2691 11.2623 10.0002 17 10.0002 17Z"
                            stroke="#263740" stroke-miterlimit="10"/>
                      </svg>
                    </div>
                    <div class="product-slide__tags">
                      <div class="product-slide__tag product-slide__new">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                          <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                              stroke-width="2"/>
                        </svg>
                        <span>new</span>
                      </div>
                    </div>
                    <div class="product-slide__swiper swiper">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-2.jpg" alt="">
                        </div>
                      </div>
                      <div class="swiper-arrow swiper-arrow__left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14"
                           viewBox="0 0 9 14" fill="none">
                          <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639"
                              stroke="#263740" stroke-width="2"></path>
                        </svg>
                      </div>
                      <div class="swiper-arrow swiper-arrow__right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14"
                           viewBox="0 0 9 14" fill="none">
                          <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639"
                              stroke="#263740" stroke-width="2"></path>
                        </svg>
                      </div>
                      <div class="swiper-pagination"></div>
                    </div>
                  </div>
                  <div class="product-slide__event">
                    <div class="product-slide__color">
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-10" checked>
                        <span class="product-slide__color-circle">
                        <span style="background: #263740"></span>
                      </span>
                      </div>
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-10">
                        <span class="product-slide__color-circle">
                        <span style="background: #E6B886"></span>
                      </span>
                      </div>
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-10">
                        <span class="product-slide__color-circle">
                        <span style="background: #EDEDED"></span>
                      </span>
                      </div>
                    </div>
                    <div class="product-slide__size">
                      <div class="product-slide__size-default">
                        <div class="product-slide__size-default-text">
                          Размер
                          <span>S</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="7"
                           viewBox="0 0 13 7" fill="none">
                          <path d="M11.9899 0.988847L7.05135 5.94975L2.11147 0.990131"
                              stroke="#263740"/>
                        </svg>
                      </div>
                      <div class="product-slide__size-items">
                        <div class="product-slide__size-item active">S</div>
                        <div class="product-slide__size-item">M</div>
                        <div class="product-slide__size-item">XL</div>
                      </div>
                    </div>
                  </div>
                  <div class="product-slide__info">
                    <div class="product-slide__content">
                      <a href="#" class="product-slide__title">Раздельный купальник “LARA”</a>
                      <div class="product-slide__price">
                        <span>10 500</span> ₽
                      </div>
                    </div>
                    <div class="product-basket">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20"
                         viewBox="0 0 18 20" fill="none">
                        <path d="M17.0011 5.63635H1.0011V18.7273H17.0011V5.63635Z" stroke="white"
                            stroke-width="1.6" stroke-miterlimit="10"/>
                        <path d="M6.09216 10.2749V4.18181C6.09216 3.41027 6.39865 2.67032 6.94421 2.12476C7.48977 1.5792 8.22971 1.27271 9.00125 1.27271C9.77279 1.27271 10.5127 1.5792 11.0583 2.12476C11.6038 2.67032 11.9103 3.41027 11.9103 4.18181V10.2749"
                            stroke="white" stroke-miterlimit="10"/>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-slide">
                  <div class="product-slide__pic">
                    <div class="product-favorite">
                      <input type="checkbox">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                         viewBox="0 0 20 18" fill="none">
                        <path fill="transparent"
                            d="M10.0002 17C10.0002 17 2.73044 11.2623 1.46561 8.69266C0.95956 7.77752 0.730235 6.73509 0.805508 5.69207C0.880781 4.64905 1.25742 3.65035 1.88963 2.81736V2.81736C2.25166 2.3275 2.70977 1.91661 3.23598 1.6098C3.76219 1.30299 4.34545 1.10671 4.95008 1.03296C5.55472 0.959204 6.16805 1.00954 6.75258 1.18086C7.33711 1.35218 7.88057 1.64089 8.34974 2.02936L10.0002 3.39577L11.6506 2.02936C12.1198 1.64089 12.6632 1.35218 13.2477 1.18086C13.8323 1.00954 14.4456 0.959204 15.0502 1.03296C15.6549 1.10671 16.2381 1.30299 16.7643 1.6098C17.2906 1.91661 17.7487 2.3275 18.1107 2.81736V2.81736C18.7429 3.65035 19.1195 4.64905 19.1948 5.69207C19.2701 6.73509 19.0408 7.77752 18.5347 8.69266C17.2691 11.2623 10.0002 17 10.0002 17Z"
                            stroke="#263740" stroke-miterlimit="10"/>
                      </svg>
                    </div>
                    <div class="product-slide__tags">
                      <div class="product-slide__tag product-slide__new">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                          <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                              stroke-width="2"/>
                        </svg>
                        <span>new</span>
                      </div>
                    </div>
                    <div class="product-slide__swiper swiper">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-3.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-3.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-3.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-3.jpg" alt="">
                        </div>
                      </div>
                      <div class="swiper-arrow swiper-arrow__left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14"
                           viewBox="0 0 9 14" fill="none">
                          <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639"
                              stroke="#263740" stroke-width="2"></path>
                        </svg>
                      </div>
                      <div class="swiper-arrow swiper-arrow__right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14"
                           viewBox="0 0 9 14" fill="none">
                          <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639"
                              stroke="#263740" stroke-width="2"></path>
                        </svg>
                      </div>
                      <div class="swiper-pagination"></div>
                    </div>
                  </div>
                  <div class="product-slide__event">
                    <div class="product-slide__color">
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-11" checked>
                        <span class="product-slide__color-circle">
                        <span style="background: #263740"></span>
                      </span>
                      </div>
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-11">
                        <span class="product-slide__color-circle">
                        <span style="background: #E6B886"></span>
                      </span>
                      </div>
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-11">
                        <span class="product-slide__color-circle">
                        <span style="background: #EDEDED"></span>
                      </span>
                      </div>
                    </div>
                    <div class="product-slide__size">
                      <div class="product-slide__size-default">
                        <div class="product-slide__size-default-text">
                          Размер
                          <span>S</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="7"
                           viewBox="0 0 13 7" fill="none">
                          <path d="M11.9899 0.988847L7.05135 5.94975L2.11147 0.990131"
                              stroke="#263740"/>
                        </svg>
                      </div>
                      <div class="product-slide__size-items">
                        <div class="product-slide__size-item active">S</div>
                        <div class="product-slide__size-item">M</div>
                        <div class="product-slide__size-item">XL</div>
                      </div>
                    </div>
                  </div>
                  <div class="product-slide__info">
                    <div class="product-slide__content">
                      <a href="#" class="product-slide__title">Раздельный купальник “LARA”</a>
                      <div class="product-slide__price">
                        <span>10 500</span> ₽
                      </div>
                    </div>
                    <div class="product-basket">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20"
                         viewBox="0 0 18 20" fill="none">
                        <path d="M17.0011 5.63635H1.0011V18.7273H17.0011V5.63635Z" stroke="white"
                            stroke-width="1.6" stroke-miterlimit="10"/>
                        <path d="M6.09216 10.2749V4.18181C6.09216 3.41027 6.39865 2.67032 6.94421 2.12476C7.48977 1.5792 8.22971 1.27271 9.00125 1.27271C9.77279 1.27271 10.5127 1.5792 11.0583 2.12476C11.6038 2.67032 11.9103 3.41027 11.9103 4.18181V10.2749"
                            stroke="white" stroke-miterlimit="10"/>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-slide">
                  <div class="product-slide__pic">
                    <div class="product-favorite">
                      <input type="checkbox">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                         viewBox="0 0 20 18" fill="none">
                        <path fill="transparent"
                            d="M10.0002 17C10.0002 17 2.73044 11.2623 1.46561 8.69266C0.95956 7.77752 0.730235 6.73509 0.805508 5.69207C0.880781 4.64905 1.25742 3.65035 1.88963 2.81736V2.81736C2.25166 2.3275 2.70977 1.91661 3.23598 1.6098C3.76219 1.30299 4.34545 1.10671 4.95008 1.03296C5.55472 0.959204 6.16805 1.00954 6.75258 1.18086C7.33711 1.35218 7.88057 1.64089 8.34974 2.02936L10.0002 3.39577L11.6506 2.02936C12.1198 1.64089 12.6632 1.35218 13.2477 1.18086C13.8323 1.00954 14.4456 0.959204 15.0502 1.03296C15.6549 1.10671 16.2381 1.30299 16.7643 1.6098C17.2906 1.91661 17.7487 2.3275 18.1107 2.81736V2.81736C18.7429 3.65035 19.1195 4.64905 19.1948 5.69207C19.2701 6.73509 19.0408 7.77752 18.5347 8.69266C17.2691 11.2623 10.0002 17 10.0002 17Z"
                            stroke="#263740" stroke-miterlimit="10"/>
                      </svg>
                    </div>
                    <div class="product-slide__tags">
                      <div class="product-slide__tag product-slide__new">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                          <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                              stroke-width="2"/>
                        </svg>
                        <span>new</span>
                      </div>
                    </div>
                    <div class="product-slide__swiper swiper">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-4.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-4.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-4.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-4.jpg" alt="">
                        </div>
                      </div>
                      <div class="swiper-arrow swiper-arrow__left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14"
                           viewBox="0 0 9 14" fill="none">
                          <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639"
                              stroke="#263740" stroke-width="2"></path>
                        </svg>
                      </div>
                      <div class="swiper-arrow swiper-arrow__right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14"
                           viewBox="0 0 9 14" fill="none">
                          <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639"
                              stroke="#263740" stroke-width="2"></path>
                        </svg>
                      </div>
                      <div class="swiper-pagination"></div>
                    </div>
                  </div>
                  <div class="product-slide__event">
                    <div class="product-slide__color">
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-12" checked>
                        <span class="product-slide__color-circle">
                        <span style="background: #263740"></span>
                      </span>
                      </div>
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-12">
                        <span class="product-slide__color-circle">
                        <span style="background: #E6B886"></span>
                      </span>
                      </div>
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-12">
                        <span class="product-slide__color-circle">
                        <span style="background: #EDEDED"></span>
                      </span>
                      </div>
                    </div>
                    <div class="product-slide__size">
                      <div class="product-slide__size-default">
                        <div class="product-slide__size-default-text">
                          Размер
                          <span>S</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="7"
                           viewBox="0 0 13 7" fill="none">
                          <path d="M11.9899 0.988847L7.05135 5.94975L2.11147 0.990131"
                              stroke="#263740"/>
                        </svg>
                      </div>
                      <div class="product-slide__size-items">
                        <div class="product-slide__size-item active">S</div>
                        <div class="product-slide__size-item">M</div>
                        <div class="product-slide__size-item">XL</div>
                      </div>
                    </div>
                  </div>
                  <div class="product-slide__info">
                    <div class="product-slide__content">
                      <a href="#" class="product-slide__title">Раздельный купальник “LARA”</a>
                      <div class="product-slide__price">
                        <span>10 500</span> ₽
                      </div>
                    </div>
                    <div class="product-basket">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20"
                         viewBox="0 0 18 20" fill="none">
                        <path d="M17.0011 5.63635H1.0011V18.7273H17.0011V5.63635Z" stroke="white"
                            stroke-width="1.6" stroke-miterlimit="10"/>
                        <path d="M6.09216 10.2749V4.18181C6.09216 3.41027 6.39865 2.67032 6.94421 2.12476C7.48977 1.5792 8.22971 1.27271 9.00125 1.27271C9.77279 1.27271 10.5127 1.5792 11.0583 2.12476C11.6038 2.67032 11.9103 3.41027 11.9103 4.18181V10.2749"
                            stroke="white" stroke-miterlimit="10"/>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-slide">
                  <div class="product-slide__pic">
                    <div class="product-favorite">
                      <input type="checkbox">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                         viewBox="0 0 20 18" fill="none">
                        <path fill="transparent"
                            d="M10.0002 17C10.0002 17 2.73044 11.2623 1.46561 8.69266C0.95956 7.77752 0.730235 6.73509 0.805508 5.69207C0.880781 4.64905 1.25742 3.65035 1.88963 2.81736V2.81736C2.25166 2.3275 2.70977 1.91661 3.23598 1.6098C3.76219 1.30299 4.34545 1.10671 4.95008 1.03296C5.55472 0.959204 6.16805 1.00954 6.75258 1.18086C7.33711 1.35218 7.88057 1.64089 8.34974 2.02936L10.0002 3.39577L11.6506 2.02936C12.1198 1.64089 12.6632 1.35218 13.2477 1.18086C13.8323 1.00954 14.4456 0.959204 15.0502 1.03296C15.6549 1.10671 16.2381 1.30299 16.7643 1.6098C17.2906 1.91661 17.7487 2.3275 18.1107 2.81736V2.81736C18.7429 3.65035 19.1195 4.64905 19.1948 5.69207C19.2701 6.73509 19.0408 7.77752 18.5347 8.69266C17.2691 11.2623 10.0002 17 10.0002 17Z"
                            stroke="#263740" stroke-miterlimit="10"/>
                      </svg>
                    </div>
                    <div class="product-slide__tags">
                      <div class="product-slide__tag product-slide__new">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                          <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                              stroke-width="2"/>
                        </svg>
                        <span>new</span>
                      </div>
                      <div class="product-slide__tag product-slide__hit">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                          <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                              stroke-width="2"/>
                        </svg>
                        <span>Hit</span>
                      </div>
                      <div class="product-slide__tag product-slide__sale">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                          <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                              stroke-width="2"/>
                        </svg>
                        <span>-23%</span>
                      </div>
                    </div>
                    <div class="product-slide__swiper swiper">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-1.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-1.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-1.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-1.jpg" alt="">
                        </div>
                      </div>
                      <div class="swiper-arrow swiper-arrow__left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14"
                           viewBox="0 0 9 14" fill="none">
                          <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639"
                              stroke="#263740" stroke-width="2"></path>
                        </svg>
                      </div>
                      <div class="swiper-arrow swiper-arrow__right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14"
                           viewBox="0 0 9 14" fill="none">
                          <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639"
                              stroke="#263740" stroke-width="2"></path>
                        </svg>
                      </div>
                      <div class="swiper-pagination"></div>
                    </div>
                  </div>
                  <div class="product-slide__event">
                    <div class="product-slide__color">
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-13" checked>
                        <span class="product-slide__color-circle">
                        <span style="background: #263740"></span>
                      </span>
                      </div>
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-13">
                        <span class="product-slide__color-circle">
                        <span style="background: #E6B886"></span>
                      </span>
                      </div>
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-13">
                        <span class="product-slide__color-circle">
                        <span style="background: #EDEDED"></span>
                      </span>
                      </div>
                    </div>
                    <div class="product-slide__size">
                      <div class="product-slide__size-default">
                        <div class="product-slide__size-default-text">
                          Размер
                          <span>S</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="7"
                           viewBox="0 0 13 7" fill="none">
                          <path d="M11.9899 0.988847L7.05135 5.94975L2.11147 0.990131"
                              stroke="#263740"/>
                        </svg>
                      </div>
                      <div class="product-slide__size-items">
                        <div class="product-slide__size-item active">S</div>
                        <div class="product-slide__size-item">M</div>
                        <div class="product-slide__size-item">XL</div>
                      </div>
                    </div>
                  </div>
                  <div class="product-slide__info">
                    <div class="product-slide__content">
                      <a href="#" class="product-slide__title">Слитный купальник “Daniella”</a>
                      <div class="product-slide__price">
                        <div class="product-slide__new-price"><span>10 500</span> ₽</div>
                        <div class="product-slide__old-price">10 500</div>
                      </div>
                    </div>
                    <div class="product-basket">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20"
                         viewBox="0 0 18 20" fill="none">
                        <path d="M17.0011 5.63635H1.0011V18.7273H17.0011V5.63635Z" stroke="white"
                            stroke-width="1.6" stroke-miterlimit="10"/>
                        <path d="M6.09216 10.2749V4.18181C6.09216 3.41027 6.39865 2.67032 6.94421 2.12476C7.48977 1.5792 8.22971 1.27271 9.00125 1.27271C9.77279 1.27271 10.5127 1.5792 11.0583 2.12476C11.6038 2.67032 11.9103 3.41027 11.9103 4.18181V10.2749"
                            stroke="white" stroke-miterlimit="10"/>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-slide">
                  <div class="product-slide__pic">
                    <div class="product-favorite">
                      <input type="checkbox">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                         viewBox="0 0 20 18" fill="none">
                        <path fill="transparent"
                            d="M10.0002 17C10.0002 17 2.73044 11.2623 1.46561 8.69266C0.95956 7.77752 0.730235 6.73509 0.805508 5.69207C0.880781 4.64905 1.25742 3.65035 1.88963 2.81736V2.81736C2.25166 2.3275 2.70977 1.91661 3.23598 1.6098C3.76219 1.30299 4.34545 1.10671 4.95008 1.03296C5.55472 0.959204 6.16805 1.00954 6.75258 1.18086C7.33711 1.35218 7.88057 1.64089 8.34974 2.02936L10.0002 3.39577L11.6506 2.02936C12.1198 1.64089 12.6632 1.35218 13.2477 1.18086C13.8323 1.00954 14.4456 0.959204 15.0502 1.03296C15.6549 1.10671 16.2381 1.30299 16.7643 1.6098C17.2906 1.91661 17.7487 2.3275 18.1107 2.81736V2.81736C18.7429 3.65035 19.1195 4.64905 19.1948 5.69207C19.2701 6.73509 19.0408 7.77752 18.5347 8.69266C17.2691 11.2623 10.0002 17 10.0002 17Z"
                            stroke="#263740" stroke-miterlimit="10"/>
                      </svg>
                    </div>
                    <div class="product-slide__tags">
                      <div class="product-slide__tag product-slide__new">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                          <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                              stroke-width="2"/>
                        </svg>
                        <span>new</span>
                      </div>
                    </div>
                    <div class="product-slide__swiper swiper">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-2.jpg" alt="">
                        </div>
                      </div>
                      <div class="swiper-arrow swiper-arrow__left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14"
                           viewBox="0 0 9 14" fill="none">
                          <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639"
                              stroke="#263740" stroke-width="2"></path>
                        </svg>
                      </div>
                      <div class="swiper-arrow swiper-arrow__right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14"
                           viewBox="0 0 9 14" fill="none">
                          <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639"
                              stroke="#263740" stroke-width="2"></path>
                        </svg>
                      </div>
                      <div class="swiper-pagination"></div>
                    </div>
                  </div>
                  <div class="product-slide__event">
                    <div class="product-slide__color">
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-14" checked>
                        <span class="product-slide__color-circle">
                        <span style="background: #263740"></span>
                      </span>
                      </div>
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-14">
                        <span class="product-slide__color-circle">
                        <span style="background: #E6B886"></span>
                      </span>
                      </div>
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-14">
                        <span class="product-slide__color-circle">
                        <span style="background: #EDEDED"></span>
                      </span>
                      </div>
                    </div>
                    <div class="product-slide__size">
                      <div class="product-slide__size-default">
                        <div class="product-slide__size-default-text">
                          Размер
                          <span>S</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="7"
                           viewBox="0 0 13 7" fill="none">
                          <path d="M11.9899 0.988847L7.05135 5.94975L2.11147 0.990131"
                              stroke="#263740"/>
                        </svg>
                      </div>
                      <div class="product-slide__size-items">
                        <div class="product-slide__size-item active">S</div>
                        <div class="product-slide__size-item">M</div>
                        <div class="product-slide__size-item">XL</div>
                      </div>
                    </div>
                  </div>
                  <div class="product-slide__info">
                    <div class="product-slide__content">
                      <a href="#" class="product-slide__title">Раздельный купальник “LARA”</a>
                      <div class="product-slide__price">
                        <span>10 500</span> ₽
                      </div>
                    </div>
                    <div class="product-basket">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20"
                         viewBox="0 0 18 20" fill="none">
                        <path d="M17.0011 5.63635H1.0011V18.7273H17.0011V5.63635Z" stroke="white"
                            stroke-width="1.6" stroke-miterlimit="10"/>
                        <path d="M6.09216 10.2749V4.18181C6.09216 3.41027 6.39865 2.67032 6.94421 2.12476C7.48977 1.5792 8.22971 1.27271 9.00125 1.27271C9.77279 1.27271 10.5127 1.5792 11.0583 2.12476C11.6038 2.67032 11.9103 3.41027 11.9103 4.18181V10.2749"
                            stroke="white" stroke-miterlimit="10"/>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-slide">
                  <div class="product-slide__pic">
                    <div class="product-favorite">
                      <input type="checkbox">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                         viewBox="0 0 20 18" fill="none">
                        <path fill="transparent"
                            d="M10.0002 17C10.0002 17 2.73044 11.2623 1.46561 8.69266C0.95956 7.77752 0.730235 6.73509 0.805508 5.69207C0.880781 4.64905 1.25742 3.65035 1.88963 2.81736V2.81736C2.25166 2.3275 2.70977 1.91661 3.23598 1.6098C3.76219 1.30299 4.34545 1.10671 4.95008 1.03296C5.55472 0.959204 6.16805 1.00954 6.75258 1.18086C7.33711 1.35218 7.88057 1.64089 8.34974 2.02936L10.0002 3.39577L11.6506 2.02936C12.1198 1.64089 12.6632 1.35218 13.2477 1.18086C13.8323 1.00954 14.4456 0.959204 15.0502 1.03296C15.6549 1.10671 16.2381 1.30299 16.7643 1.6098C17.2906 1.91661 17.7487 2.3275 18.1107 2.81736V2.81736C18.7429 3.65035 19.1195 4.64905 19.1948 5.69207C19.2701 6.73509 19.0408 7.77752 18.5347 8.69266C17.2691 11.2623 10.0002 17 10.0002 17Z"
                            stroke="#263740" stroke-miterlimit="10"/>
                      </svg>
                    </div>
                    <div class="product-slide__tags">
                      <div class="product-slide__tag product-slide__new">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                          <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                              stroke-width="2"/>
                        </svg>
                        <span>new</span>
                      </div>
                    </div>
                    <div class="product-slide__swiper swiper">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-3.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-3.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-3.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-3.jpg" alt="">
                        </div>
                      </div>
                      <div class="swiper-arrow swiper-arrow__left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14"
                           viewBox="0 0 9 14" fill="none">
                          <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639"
                              stroke="#263740" stroke-width="2"></path>
                        </svg>
                      </div>
                      <div class="swiper-arrow swiper-arrow__right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14"
                           viewBox="0 0 9 14" fill="none">
                          <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639"
                              stroke="#263740" stroke-width="2"></path>
                        </svg>
                      </div>
                      <div class="swiper-pagination"></div>
                    </div>
                  </div>
                  <div class="product-slide__event">
                    <div class="product-slide__color">
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-15" checked>
                        <span class="product-slide__color-circle">
                        <span style="background: #263740"></span>
                      </span>
                      </div>
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-15">
                        <span class="product-slide__color-circle">
                        <span style="background: #E6B886"></span>
                      </span>
                      </div>
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-15">
                        <span class="product-slide__color-circle">
                        <span style="background: #EDEDED"></span>
                      </span>
                      </div>
                    </div>
                    <div class="product-slide__size">
                      <div class="product-slide__size-default">
                        <div class="product-slide__size-default-text">
                          Размер
                          <span>S</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="7"
                           viewBox="0 0 13 7" fill="none">
                          <path d="M11.9899 0.988847L7.05135 5.94975L2.11147 0.990131"
                              stroke="#263740"/>
                        </svg>
                      </div>
                      <div class="product-slide__size-items">
                        <div class="product-slide__size-item active">S</div>
                        <div class="product-slide__size-item">M</div>
                        <div class="product-slide__size-item">XL</div>
                      </div>
                    </div>
                  </div>
                  <div class="product-slide__info">
                    <div class="product-slide__content">
                      <a href="#" class="product-slide__title">Раздельный купальник “LARA”</a>
                      <div class="product-slide__price">
                        <span>10 500</span> ₽
                      </div>
                    </div>
                    <div class="product-basket">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20"
                         viewBox="0 0 18 20" fill="none">
                        <path d="M17.0011 5.63635H1.0011V18.7273H17.0011V5.63635Z" stroke="white"
                            stroke-width="1.6" stroke-miterlimit="10"/>
                        <path d="M6.09216 10.2749V4.18181C6.09216 3.41027 6.39865 2.67032 6.94421 2.12476C7.48977 1.5792 8.22971 1.27271 9.00125 1.27271C9.77279 1.27271 10.5127 1.5792 11.0583 2.12476C11.6038 2.67032 11.9103 3.41027 11.9103 4.18181V10.2749"
                            stroke="white" stroke-miterlimit="10"/>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-slide">
                  <div class="product-slide__pic">
                    <div class="product-favorite">
                      <input type="checkbox">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                         viewBox="0 0 20 18" fill="none">
                        <path fill="transparent"
                            d="M10.0002 17C10.0002 17 2.73044 11.2623 1.46561 8.69266C0.95956 7.77752 0.730235 6.73509 0.805508 5.69207C0.880781 4.64905 1.25742 3.65035 1.88963 2.81736V2.81736C2.25166 2.3275 2.70977 1.91661 3.23598 1.6098C3.76219 1.30299 4.34545 1.10671 4.95008 1.03296C5.55472 0.959204 6.16805 1.00954 6.75258 1.18086C7.33711 1.35218 7.88057 1.64089 8.34974 2.02936L10.0002 3.39577L11.6506 2.02936C12.1198 1.64089 12.6632 1.35218 13.2477 1.18086C13.8323 1.00954 14.4456 0.959204 15.0502 1.03296C15.6549 1.10671 16.2381 1.30299 16.7643 1.6098C17.2906 1.91661 17.7487 2.3275 18.1107 2.81736V2.81736C18.7429 3.65035 19.1195 4.64905 19.1948 5.69207C19.2701 6.73509 19.0408 7.77752 18.5347 8.69266C17.2691 11.2623 10.0002 17 10.0002 17Z"
                            stroke="#263740" stroke-miterlimit="10"/>
                      </svg>
                    </div>
                    <div class="product-slide__tags">
                      <div class="product-slide__tag product-slide__new">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                          <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                              stroke-width="2"/>
                        </svg>
                        <span>new</span>
                      </div>
                    </div>
                    <div class="product-slide__swiper swiper">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-4.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-4.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-4.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/main/product-4.jpg" alt="">
                        </div>
                      </div>
                      <div class="swiper-arrow swiper-arrow__left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14"
                           viewBox="0 0 9 14" fill="none">
                          <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639"
                              stroke="#263740" stroke-width="2"></path>
                        </svg>
                      </div>
                      <div class="swiper-arrow swiper-arrow__right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14"
                           viewBox="0 0 9 14" fill="none">
                          <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639"
                              stroke="#263740" stroke-width="2"></path>
                        </svg>
                      </div>
                      <div class="swiper-pagination"></div>
                    </div>
                  </div>
                  <div class="product-slide__event">
                    <div class="product-slide__color">
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-16" checked>
                        <span class="product-slide__color-circle">
                        <span style="background: #263740"></span>
                      </span>
                      </div>
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-16">
                        <span class="product-slide__color-circle">
                        <span style="background: #E6B886"></span>
                      </span>
                      </div>
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-16">
                        <span class="product-slide__color-circle">
                        <span style="background: #EDEDED"></span>
                      </span>
                      </div>
                    </div>
                    <div class="product-slide__size">
                      <div class="product-slide__size-default">
                        <div class="product-slide__size-default-text">
                          Размер
                          <span>S</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="7"
                           viewBox="0 0 13 7" fill="none">
                          <path d="M11.9899 0.988847L7.05135 5.94975L2.11147 0.990131"
                              stroke="#263740"/>
                        </svg>
                      </div>
                      <div class="product-slide__size-items">
                        <div class="product-slide__size-item active">S</div>
                        <div class="product-slide__size-item">M</div>
                        <div class="product-slide__size-item">XL</div>
                      </div>
                    </div>
                  </div>
                  <div class="product-slide__info">
                    <div class="product-slide__content">
                      <a href="#" class="product-slide__title">Раздельный купальник “LARA”</a>
                      <div class="product-slide__price">
                        <span>10 500</span> ₽
                      </div>
                    </div>
                    <div class="product-basket">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20"
                         viewBox="0 0 18 20" fill="none">
                        <path d="M17.0011 5.63635H1.0011V18.7273H17.0011V5.63635Z" stroke="white"
                            stroke-width="1.6" stroke-miterlimit="10"/>
                        <path d="M6.09216 10.2749V4.18181C6.09216 3.41027 6.39865 2.67032 6.94421 2.12476C7.48977 1.5792 8.22971 1.27271 9.00125 1.27271C9.77279 1.27271 10.5127 1.5792 11.0583 2.12476C11.6038 2.67032 11.9103 3.41027 11.9103 4.18181V10.2749"
                            stroke="white" stroke-miterlimit="10"/>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
              <a href="#" class="swiper-slide swiper-slide__all-slider">
               <span class="link-circle">
                <span class="link-circle__text">
                  все модели
                </span>
                <span class="link-circle__arrow">
                   <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31"
                      fill="none">
                    <path d="M29.1713 16.0006L-0.000242786 16.002" stroke="#263740"
                        stroke-linejoin="round"></path>
                    <path d="M23.8977 9.88823L29.9998 15.963L23.8992 22.0393" stroke="#263740"
                        stroke-width="2"></path>
                  </svg>
                </span>
              </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>