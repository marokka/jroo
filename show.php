<?php  include "./head.php";
?>

      <!-- End header-->
      <div class="ogami-breadcrumb">
        <div class="container">
          <ul>
            <li> <a class="breadcrumb-link" href="index.html"> <i class="fas fa-home"></i>Главная</a></li>
            <li> <a class="breadcrumb-link" href="shop_grid+list_3col.html">Доставка</a></li>
            <li> <a class="breadcrumb-link active" href="shop_detail.html">Бургер из говядиной</a></li>
          </ul>
        </div>
      </div>
      <!-- End breadcrumb-->
      <div class="shop-layout">
        <div class="container">
          <div class="row">
            <div class="col-xl-3">
              <div class="shop-sidebar">
                <button class="no-round-btn" id="filter-sidebar--closebtn">Закрыть меню</button>
                <div class="shop-sidebar_department">
                  <div class="department_top mini-tab-title underline">
                    <h2 class="title">Категории</h2>
                  </div>
                  <div class="department_bottom">
                    <ul>
                      <li> <a class="department-link" href="shop_grid+list_3col.html">Бургеры</a></li>
                      <li> <a class="department-link" href="shop_grid+list_3col.html">Стейки</a></li>
                      <li> <a class="department-link" href="shop_grid+list_3col.html">Салаты</a></li>
                      <li> <a class="department-link" href="shop_grid+list_3col.html">Удон</a></li>
                      <li> <a class="department-link" href="shop_grid+list_3col.html">Пицца</a></li>
                      <li> <a class="department-link" href="shop_grid+list_3col.html">Напитки Б/А</a></li>
                      <li> <a class="department-link" href="shop_grid+list_3col.html">Превые блюда</a></li>
                    </ul>
                  </div>
                </div>
                <div class="shop-sidebar_tag">
                  <div class="tag_top mini-tab-title underline">
                    <h2 class="title">
                        Тег продукта</h2>
                  </div>
                  <div class="tag_bottom"><a class="tag-btn" href="shop_grid+list_3col.html">organic</a><a class="tag-btn" href="shop_grid+list_3col.html">vegatable</a><a class="tag-btn" href="shop_grid+list_3col.html">fruits</a><a class="tag-btn" href="shop_grid+list_3col.html">fresh meat</a><a class="tag-btn" href="shop_grid+list_3col.html">fastfood</a><a class="tag-btn" href="shop_grid+list_3col.html">natural</a></div>
                </div>
              </div>
              <div class="filter-sidebar--background" style="display: none"></div>
            </div>
            <div class="col-xl-9">
              <div class="shop-detail">
                <div class="row">
                  <div class="col-12"> 
                    <div id="show-filter-sidebar">
                      <h5> <i class="fas fa-bars"></i>Показать категории</h5>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="shop-detail_img">
                      <button class="round-icon-btn" id="zoom-btn"> <i class="icon_zoom-in_alt"></i></button>
                      <div class="big-img">
                        <div class="big-img_block"><img src="assets/images/product/SAV_0148.JPG" alt="product image"></div>
                        <div class="big-img_block"><img src="assets/images/product/SAV_0150.JPG" alt="product image"></div>
                        <div class="big-img_block"><img src="assets/images/product/SAV_0155.JPG" alt="product image"></div>
                      </div>
                      <div class="slide-img">
                        <div class="slide-img_block"><img src="assets/images/product/SAV_0148.JPG" alt="product image"></div>
                        <div class="slide-img_block"><img src="assets/images/product/SAV_0150.JPG" alt="product image"></div>
                        <div class="slide-img_block"><img src="assets/images/product/SAV_0155.JPG" alt="product image"></div>
                      </div>
                    </div>
                    <div class="img_control"></div>
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="shop-detail_info">
                      <h5 class="product-type color-type">БУРГЕР</h5>
                      <h2 class="product-name">Бургер из говядины</h2>
                      <p class="product-describe">Булочка с кунжутом, котлета куриная, свежий помидор, сыр чеддер, лист салата, два вида соуса.  </p><a class="product-more" href="#">Далее <i class="arrow_carrot-2right"></i></a>
                      <p class="delivery-status">Бесплатная доставка</p>
                      <div class="price-rate">
                        <h3 class="product-price"> 
                          <del>₽700.00</del>₽450.00
                        </h3>
                        <h5 class="product-rated"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"></i><span>(15)</span></h5>
                      </div>
                      <div class="color-select">
                        <h5>Острота:</h5><a class="color bg-danger" href="#"></a><a class="color bg-success" href="#"></a>
                      </div>
                      <div class="quantity-select">
                        <label for="quantity">Количество:</label>
                        <input class="no-round-input" id="quantity" type="number" min="0" value="1">
                      </div>
                      <div class="product-select">
                        <button class="add-to-cart normal-btn outline">Добавить в корзину</button>
                        <button class="add-to-compare normal-btn outline">+ Добавить в избранное</button>
                      </div>
                      <div class="product-share">
                        <h5>Поделиться:</h5><a href=""><i class="fab fa-facebook-f"> </i></a><a href=""><i class="fab fa-twitter"></i></a><a href=""><i class="fab fa-invision"> </i></a><a href=""><i class="fab fa-pinterest-p"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="shop-detail_more-info">
                      <div id="tab-so3">
                        <ul class="mb-0">
                          <li class="active"><a href="#tab-1">Описание</a></li>
                          <li><a href="#tab-2">Пищевая ценность на 100 г:</a></li>
                          <li> <a href="#tab-3">Отзывы (02)</a></li>
                        </ul>
                        <div id="tab-1">
                          <div class="description-block">
                            <div class="description-item_block">
                              <div class="row align-items-center">

                                <div class="col-12 col-md-12">
                                  <div class="description-item_text">
                                    <h2>Состав:</h2>

                                    <p>куриная котлета, сыр моцарелла, салат айсберг, бекон, помидор, соленый огурец, ялтинский лук </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="tab-2">
                          <div class="specifications_block">
                            <table class="shop_attributes table-bordered">
                              <tbody>
                                <tr>
                                  <th>Энергетическая ценность </th>
                                  <td class="product_weight">856 ккал</td>
                                </tr>
                                <tr>
                                  <th>Углеводы</th>
                                  <td class="product_dimensions">72,9 г.</td>
                                </tr>
                                <tr>
                                  <th>Белки </th>
                                  <td class="product_color">39,5 г.</td>
                                </tr>
                                <tr>
                                  <th>Жиры </th>
                                  <td class="product_size">44,6 г.</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div id="tab-3"> 
                          <div class="customer-reviews_block">
                            <div class="customer-review">
                              <div class="row">
                                <div class="col-12 col-sm-3 col-lg-2">
                                  <div class="customer-review_left">
                                    <div class="customer-review_img text-center"><img class="img-fluid" src="assets/images/shop/reviewer_01.png" alt="customer image"></div>
                                    <div class="customer-rate"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"></i></div>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-9 col-lg-10">
                                  <div class="customer-comment"> 
                                    <h5 class="comment-date">27 Авг 2019</h5>
                                    <h3 class="customer-name">Жмишенко Валерий</h3>
                                    <p class="customer-commented">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna alation uidem dolore eu fugiat nulla pariatur. </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="customer-review">
                              <div class="row">
                                <div class="col-12 col-sm-3 col-lg-2">
                                  <div class="customer-review_left">
                                    <div class="customer-review_img text-center"><img class="img-fluid" src="assets/images/shop/reviewer_02.png" alt="customer image"></div>
                                    <div class="customer-rate"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"></i></div>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-9 col-lg-10">
                                  <div class="customer-comment"> 
                                    <h5 class="comment-date">27 Авг 2019</h5>
                                    <h3 class="customer-name">Денис Петров</h3>
                                    <p class="customer-commented">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna alation uidem dolore eu fugiat nulla pariatur. </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="add-review">
                              <div class="add-review_top">
                                <h2>Добавить Комментарий</h2>
                              </div>
                              <div class="add-review_bottom">
                                <form action="" method="post">
                                  <div class="row">
                                    <div class="col-12 col-md-6">
                                      <input class="no-round-input" type="text" placeholder="Имя*">
                                    </div>
                                    <div class="col-12 col-md-6">
                                      <input class="no-round-input" type="text" placeholder="Email*">
                                    </div>
                                    <div class="col-12">
                                      <div class="rating">
                                        <h5>Ваша оценка:</h5><span><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></span>
                                      </div>
                                    </div>
                                    <div class="col-12">
                                      <textarea class="textarea-form" id="review" name="" cols="30" rows="4" placeholder="Сообщение"></textarea>
                                    </div>
                                    <div class="col-12">
                                      <button class="normal-btn">Отправить Отзыв</button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End shop layout-->
      <div class="partner">
        <div class="container">
          <div class="partner_block d-flex justify-content-between" data-slick="{&quot;slidesToShow&quot;: 6}">
            <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_01.png" alt="partner logo"></a></div>
            <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_02.png" alt="partner logo"></a></div>
            <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_01.png" alt="partner logo"></a></div>
            <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_02.png" alt="partner logo"></a></div>
            <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_01.png" alt="partner logo"></a></div>
            <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_02.png" alt="partner logo"></a></div>
            <div class="partner--logo" href=""> <a href=""><img src="assets/images/partner/partner_01.png" alt="partner logo"></a></div>
          </div>
        </div>
      </div>
      <!-- End partner-->



<?php  include "./footer.php";
?>
