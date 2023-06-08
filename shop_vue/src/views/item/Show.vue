<template>
  <div>

    <main>
      <!--Start Shop Details Breadcrumb-->
      <div class="shop-details-breadcrumb wow fadeInUp animated overflow-hidden ">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="shop-details-inner">
                <ul class="shop-details-menu">
                  <li>
                    <router-link to="/">Anasayfa</router-link>
                  </li>
                  <li class="active">Ürün Detayları</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End Shop Details Breadcrumb-->
      <!--Start Shop Details Top-->
      <section class="shop-details-top three">
        <div v-if="item" class="container">
          <div class="row mt--30">
            <div class="col-xl-6 col-lg-6 mt-30 wow fadeInUp animated">
              <div class="single-product-box">
                <div class="big-product single-product-one slider-for">
                  <div v-for="image in item.images">
                    <div class="single-item">
                      <img :src="image.path" alt=""/>
                      <a href="#0" class="love"> <i class="flaticon-like"></i> </a>
                      <a :href="image.path" class="zoom">
                        <i class="flaticon-zoom-1"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-slicknav single-product-three-nav slider-nav">
                  <div v-for="image in item.images">
                    <span class="single-item"> <img :src="image.path" alt=""></span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 mt-30 wow fadeInUp animated">
              <div class="shop-details-top-right">
                <div class="shop-details-top-right-content-box">
                  <div class="shop-details-top-review-box">
                    <div class="shop-details-top-review">
                      <ul>
                        <li><i class="flaticon-star-1"></i></li>
                        <li><i class="flaticon-star-1"></i></li>
                        <li><i class="flaticon-star-1"></i></li>
                        <li><i class="flaticon-star-1"></i></li>
                        <li><i class="flaticon-star-1"></i></li>
                      </ul>
                      <p>(2 Reviews)</p>
                    </div>
                  </div>
                  <div class="shop-details-top-title">
                    <h3>{{ item.title }}</h3>
                  </div>
                  <ul class="shop-details-top-info">
                    <li><span>Tedarikçi:</span> {{ item.seller.name }}</li>
                    <li><span>ID:</span> {{ item.id }}</li>
                  </ul>
                  <div class="shop-details-top-price-box">
                    <h3>{{ item.price }} TL</h3>
                    <p>(+14% KDV Dahildir)</p>
                  </div>
                  <p class="shop-details-top-product-sale">Bu üründen son 2 ayda <span>20</span> tane satıldı</p>
                  <ul class="shop-details-top-ask-question">
                    <li>
                      <a href="#0">
                        <div class="icon"><i class="flaticon-left-and-right-arrows"></i></div>
                        <div class="text">
                          <p>Karşılaştır</p>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#0">
                        <div class="icon"><i class="flaticon-chat-bubble"></i></div>
                        <div class="text">
                          <p>Ürün Soruları</p>
                        </div>
                      </a>
                    </li>
                  </ul>
                  <div class="timer-box">

                  </div>
                  <p class="shop-details-top-product-sale">Bu üründen stokta <span>14</span> tane kalmıştır</p>
                  <div class="product-quantity">
                    <h4>Adet</h4>
                    <div class="product-quantity-box d-flex align-items-center flex-wrap">
                      <div class="qty mr-2">
                        <div class="qtySelector text-center">
                          <span class="decreaseQty"><i class="flaticon-minus"></i> </span> <input type="number"
                                                                                                  class="qtyValue"
                                                                                                  value="1"/> <span
                            class="increaseQty"> <i class="flaticon-plus"></i> </span>
                        </div>
                      </div>
                      <div :class="item.quantity > 0 ? 'product-quantity-check' : 'product-quantity-dont'">
                        <i :class="item.quantity > 0 ? 'flaticon-select' : 'flaticon-clock'"></i>
                        <p>{{ item.quantity > 0 ? 'Stokta var' : 'Stokta yok' }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="shop-details-top-order-now"></div>
                  <div class="shop-details-top-cart-box-btn">
                    <button class="btn--primary style2" type="submit">Sepete Ekle</button>
                  </div>
                  <div class="mt-3 shop-details-top-social-box">
                    <p>Paylaş:</p>
                    <ul class="ps-1 social_link d-flex align-items-center">
                      <li>
                        <a href="https://www.facebook.com/" class="active" target="_blank"><i
                            class="flaticon-facebook-app-symbol"></i></a>
                      </li>
                      <li>
                        <a href="https://www.youtube.com/" target="_blank"><i class="flaticon-youtube"></i></a>
                      </li>
                      <li>
                        <a href="https://twitter.com/" target="_blank"><i class="flaticon-twitter"></i></a>
                      </li>
                      <li>
                        <a href="https://www.instagram.com/" target="_blank"><i class="flaticon-instagram"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="checked-box">
                    <form>
                      <div class="form-group"><input type="checkbox" id="html"/> <label for="html">Ön Bigilendirme
                        Koşullarını ve Mesafeli satış Sözleşmesini okudum, ve onaylıyorum.</label></div>
                    </form>
                  </div>
                  <div class="shop-details-top-buy-now-btn"><a href="#" class="btn--primary">Şimdi Satın Al</a></div>
                  <div class="shop-details-top-free-shipping">
                    <i class="flaticon-shipping"></i>
                    <p><span>2</span> gün içinde kargoda</p>
                    <p> - </p>
                    <p>Ücretsiz gönderim için <span>399.00 TL</span> tutarında ürün ekleyin</p>
                  </div>
                  <ul class="shop-details-top-category-tags">
                    <li>Kategori: <span>{{ item.category.title }}</span></li>
                    <li>Etiketler:
                      <span v-for="(tag, index) in item.tags">{{ tag.title }}<span
                          v-if="index !== item.tags.length - 1">,&nbsp;</span></span>
                    </li>
                  </ul>
                  <ul class="shop-details-top-feature">
                    <li>
                      <div class="icon"><i class="flaticon-portfolio"></i></div>
                      <div class="text">
                        <p>Para İade Garantisi</p>
                      </div>
                    </li>
                    <li>
                      <div class="icon"><i class="flaticon-truck"></i></div>
                      <div class="text">
                        <p>Ücretsiz Kargo ve İade</p>
                      </div>
                    </li>
                    <li>
                      <div class="icon"><i class="flaticon-security"></i></div>
                      <div class="text">
                        <p>Konforlu Müşteri Desteği</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
      <!--End Shop Details Top-->
      <!-- productdrescription-tabStart -->
      <section class="product pt-60 pb-60 wow fadeInUp overflow-hidden">
        <div v-if="item" class="container">
          <div class="row wow fadeInUp animated">
            <div class="col-12">
              <ul class="nav product-details-nav nav-one nav-pills justify-content-center" id="pills-tab-two"
                  role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-description-tab" data-bs-toggle="pill"
                          data-bs-target="#pills-description" type="button" role="tab" aria-controls="pills-description"
                          aria-selected="true">Ürün Bilgileri
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-additional-tab" data-bs-toggle="pill"
                          data-bs-target="#pills-additional" type="button" role="tab" aria-controls="pills-additional"
                          aria-selected="false">Ürün Özellikleri
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-review-tab" data-bs-toggle="pill" data-bs-target="#pills-review"
                          type="button" role="tab" aria-controls="pills-review" aria-selected="false">Değerlendirmeler
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-seller-tab" data-bs-toggle="pill"
                          data-bs-target="#pills-seller" type="button" role="tab" aria-controls="pills-seller"
                          aria-selected="true">Tedarikçi Bilgileri
                  </button>
                </li>
              </ul>
            </div>
          </div>
          <div class="row wow fadeInUp animated">
            <div class="tab-content" id="pills-tabContent-two">
              <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                   aria-labelledby="pills-description-tab">
                <div class="product-drescription">
                  <h3>Ürün Bilgileri:</h3>
                  <p>{{ item.description }}</p>
                </div>
              </div>
              <div class="tab-pane fade " id="pills-additional" role="tabpanel" aria-labelledby="pills-additional-tab">
                <div class="product-drescription">
                  <h3>Ürün Özellikleri:</h3>
                  <p class="pt-0">{{ item.content }}</p>
                  <ul class="drescription-list">
                    <li>1. Adipiscing hac cubilia, fermentum ipsum auctor parturient tempus lobortis fermentum.</li>
                    <li>2. Euismod disagree soler imperdiet vehicula pede eros ipsum cras mi feugiat.</li>
                    <li>3. Rhoncus consequat phasellus donec suspendisse scelerisque facilisis gravida porttitor
                      turpis.
                    </li>
                    <li>4. Consequat phasellus donec suspendisse scelerisque facilisis gravida porttitor turpis.</li>
                    <li>5. Consequat phasellus donec suspendisse scelerisque facilisis gravida porttitor</li>
                  </ul>
                </div>
              </div>
              <div class="tab-pane fade " id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                <div class="product-drescription">
                  <h3>Değerlendirmeler:</h3>
                  <div class="review-single pt-0 hed">
                    <div class="ratting">
                      <i class="flaticon-star-1"></i> <i class="flaticon-star-1"></i> <i class="flaticon-star-1"></i> <i
                        class="flaticon-star-1"></i> <i class="flaticon-star-1"></i>
                      <span class="ps-2">BASED ON 100 REVIEW</span>
                    </div>
                  </div>
                  <div class="review-single">
                    <div class="left">
                      <div class="ratting"><i class="flaticon-star-1"></i> <i class="flaticon-star-1"></i> <i
                          class="flaticon-star-1"></i> <i class="flaticon-star-1"></i> <i class="flaticon-star-1"></i>
                      </div>
                      <h6>Vary Good quality Theme <span>Raul Bates on January 28, 2022</span></h6>
                      <p>
                        Assertively conceptualize parallel process improvements through user friendly colighue to action
                        items. Interactively antidos cultivate interdependent customer service without clicks-and-mortar
                        e-services.
                      </p>
                    </div>
                    <a href="#0" class="right-box"> Report this Comments </a>
                  </div>
                  <div class="review-single">
                    <div class="left">
                      <div class="ratting"><i class="flaticon-star-1"></i> <i class="flaticon-star-1"></i> <i
                          class="flaticon-star-1"></i> <i class="flaticon-star-1"></i> <i class="flaticon-star-1"></i>
                      </div>
                      <h6>Amazing Theme <span>Kurt Morgan on January 28, 2022</span></h6>
                      <p>
                        Assertively conceptualize parallel process improvements through user friendly colighue to action
                        items. Interactively antidos cultivate interdependent customer service without clicks-and-mortar
                        e-services.
                      </p>
                    </div>
                    <a href="#0" class="right-box">Report this Comments </a>
                  </div>
                  <div class="review-from-box mt-30">
                    <h6>Write a Review</h6>
                    <form action="#" class="review-from">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="ratting-box">
                            <p>RATING</p>
                            <div class="ratting"><i class="flaticon-star-1"></i> <i class="flaticon-star-1"></i> <i
                                class="flaticon-star-1"></i> <i class="flaticon-star-1"></i> <i
                                class="flaticon-star-1"></i></div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group"><label for="name">NAME</label> <input type="text" id="name"
                                                                                        class="form-control"
                                                                                        placeholder="David Warner"/>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group"><label for="number">Number</label> <input type="text" id="number"
                                                                                            class="form-control"
                                                                                            placeholder="Phone Number"/>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group"><label for="email"> Email </label> <input type="text" id="email"
                                                                                            class="form-control"
                                                                                            placeholder="support@gmail.com"/>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group"><label for="namee"> REVIEW TITLE</label> <input type="text" id="namee"
                                                                                                  class="form-control"
                                                                                                  placeholder="Give your review title"/>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group m-0"><label for="email">BODY OF REVIEW (1500) </label> <textarea
                              placeholder="Write Your Comments Here"></textarea></div>
                        </div>
                      </div>
                      <button type="submit" class="btn--primary style2">Submit Review</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="tab-pane fadeseller" id="pills-seller" role="tabpanel" aria-labelledby="pills-seller-tab">
                <div class="product-drescription">
                  <h3>Tedarikçi Bilgileri:</h3>
                  <ul class="drescription-list">
                    <li><strong> İsim: </strong> {{ item.seller.name }}</li>
                    <li><strong> Kargo Detayları: </strong>{{ item.seller.delivery_info }}</li>
                    <li><strong> Iletisim Numarası: </strong>{{ item.seller.phone }}</li>
                    <li><strong> İletişim Adresi: </strong>{{ item.seller.address }}</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- productdrescription-tab End -->
      <!-- recent-products Start -->
      <section class="recent-products pt-60 pb-120 overflow-hidden wow fadeInUp">
        <div v-if="item" class="container">
          <div class="row">
            <div class="col-12 wow fadeInUp animated">
              <div class="section-head text-center">
                <h2>Benzer Ürünler</h2>
              </div>
            </div>
          </div>
          <div class="row mt-30 wow fadeInUp animated">
            <div class="catagory-slider">
              <div v-for="relatedItem in item.relatedItems" class="products-grid-one">
                <div class="products-grid-one__product-image">
                  <router-link :to="{name: 'items.show', params: {id: relatedItem.id}}"
                               class="d-block products-grid__image_holder"><img
                      :src="relatedItem.images[0].path" alt="Alt"/></router-link>
                  <div class="products-grid__usefull-links">
                    <ul>
                      <li>
                        <a href="wishlist.html"> <i class="flaticon-heart"> </i> <span> beğen</span> </a>
                      </li>
                      <li>
                        <a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i> <span> karşılaştır</span>
                        </a>
                      </li>
                      <li>
                        <a @click="getItem(item.id)" :href="`#popup${item.id}`" class="popup_link">
                          <i class="flaticon-visibility"></i>
                          <span> gözat</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>

                <div :id="`popup${item.id}`" class="product-gird__quick-view-popup mfp-hide">
                  <div v-if="relatedItem" class="container">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-lg-6">
                        <div class="quick-view__left-content">
                          <div class="tabs">
                            <div class="popup-product-thumb-box">
                              <ul>
                                <li v-for="image in relatedItem.images" class="tab-nav popup-product-thumb">
                                  <a :href="`#tabb${image.id}`">
                                    <p class="text">{{ image.id }}</p>
                                    <img :src="image.path" alt=""/>
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div class="popup-product-main-image-box">
                              <div v-for="image in relatedItem.images" :id="`tabb${image.id}`"
                                   class="tab-item popup-product-image">
                                <div class="popup-product-single-image">
                                  <p class="text">{{ image.id }}</p>
                                  <img :src="image.path" alt=""/>
                                </div>
                              </div>

                              <button class="prev">
                                <i class="flaticon-back"></i>
                              </button>
                              <button class="next">
                                <i class="flaticon-next"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="popup-right-content">
                          <h3>{{ relatedItem.title }}</h3>
                          <div class="ratting">
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <i class="flaticon-star"></i>
                            <span>(112)</span>
                          </div>
                          <p class="text">{{ relatedItem.description }}</p>
                          <div class="price">
                            <h2>{{ relatedItem.price }} TL</h2>
                            <h6>{{ relatedItem.quantity > 0 ? 'Stokta var' : 'Stokta yok' }}</h6>
                          </div>

                          <div class="add-product">
                            <h6>Qty:</h6>
                            <div class="button-group">
                              <div class="qtySelector text-center">
                                <span class="decreaseQty"><i class="flaticon-minus"></i> </span> <input type="number"
                                                                                                        class="qtyValue"
                                                                                                        value="1"/>
                                <span class="increaseQty"> <i class="flaticon-plus"></i> </span>
                              </div>
                              <button class="btn--primary">Add to Cart</button>
                            </div>
                          </div>

                          <div class="payment-method">
                            <a href="#0"> <img src="http://localhost:5173/src/assets/images/payment_method/method_1.png"
                                               alt=""/> </a>
                            <a href="#0"> <img src="http://localhost:5173/src/assets/images/payment_method/method_2.png"
                                               alt=""/> </a>
                            <a href="#0"> <img src="http://localhost:5173/src/assets/images/payment_method/method_3.png"
                                               alt=""/> </a>
                            <a href="#0"> <img src="http://localhost:5173/src/assets/images/payment_method/method_4.png"
                                               alt=""/> </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="products-grid__content">
                  <a href="cart.html" class="products-grid__cart-btn btn--primary">
                    <span class="one"> Sepete Ekle </span> <span class="two"> <i
                      class="flaticon-shopping-cart"> </i> </span>
                  </a>
                  <div class="ratting"><i class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                      class="flaticon-star"></i> <i class="flaticon-star"></i> <i class="flaticon-star"></i></div>
                  <h5 class="product_name">
                    <router-link :to="{name: 'items.show', params: {id: relatedItem.id}}"> {{
                        relatedItem.title
                      }}
                    </router-link>
                  </h5>
                  <div class="price d-flex align-content-center justify-content-center">
                    <p>{{ relatedItem.price }} TL</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- recent-products End -->
    </main>

  </div>
</template>

<script>
export default {
  name: "Index",
  mounted() {
    $(document).trigger('changed')
    this.getItem()

  },

  data() {
    return {
      item: null,

    }
  },

  watch: {
    '$route.params.id': {
      immediate: true,
      handler: function (newId) {
        this.getItem(newId);
      }
    }
  },

  methods: {
    getItem(id) {
      this.axios.get(`http://localhost:8876/api/items/${this.$route.params.id}`)
          .then(res => {

            this.item = res.data.data
            console.log(res);
          })
          .finally(y => {
            $(document).trigger('changed');

          })
    },
  }
}
</script>

<style scoped>

</style>