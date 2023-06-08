<template>
  <div>

    <main class="overflow-hidden ">
      <!--Start Breadcrumb Style2-->
      <div class="breadcrumb-area" style="background-image: url(src/assets/images/inner-pages/breadcum-bg.png);">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="breadcrumb-content pb-60 text-center wow fadeInUp animated">
                <h2>Ürünler Listesi</h2>
                <div class="breadcrumb-menu">
                  <ul>
                    <li>
                      <router-link to="/"><i class="flaticon-home pe-2"></i><span>Anasayfa</span> <span
                          class="menuarrow"> </span></router-link>
                    </li>
                    <li><i class="flaticon-next"></i></li>
                    <li class="active">
                      Ürünler
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End Breadcrumb Style2-->
      <!--Start Product Categories One-->
      <section class="product-categories-one pb-60">
        <div class="container">
          <div class="row wow fadeInUp animated">
            <div class="col-xl-12">
              <div class="product-categories-one__inner">
                <ul >
                  <li v-for="category in filterList.categories">
                    <a  v-if="category.id < 7" href="#0" class="img-box">
                      <div class="inner">
                        <img v-if="category.id == 1" src="http://localhost:5173/src/assets/images/shop/product-categories-v1-img1.png"/>
                        <img v-if="category.id == 2" src="http://localhost:5173/src/assets/images/shop/product-categories-v1-img2.png"/>
                        <img v-if="category.id == 3" src="http://localhost:5173/src/assets/images/shop/product-categories-v1-img3.png"/>
                        <img v-if="category.id == 4" src="http://localhost:5173/src/assets/images/shop/product-categories-v1-img4.png"/>
                        <img v-if="category.id == 5" src="http://localhost:5173/src/assets/images/shop/product-categories-v1-img5.png"/>
                        <img v-if="category.id == 6" src="http://localhost:5173/src/assets/images/shop/product-categories-v1-img6.png"/>
                      </div>
                    </a>
                    <div  v-if="category.id < 7" class="title">
                      <a href="#0">
                        <h6>{{  category.title }}</h6>
                      </a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--End Product Categories One-->
      <!--Start product-grid-->
      <div class="product-grid pt-60 pb-120">
        <div class="container">
          <div class="row gx-4">
            <div class="col-xl-3 col-lg-4">
              <div class="shop-grid-sidebar">
                <button class="remove-sidebar d-lg-none d-block"><i
                    class="flaticon-cross"> </i></button>
                <div class="sidebar-holder">
                  <form action="#0" class="footer-default__subscrib-form m-0 p-0 wow fadeInUp animated">
                    <div class="footer-input-box p-0 "><input type="email" placeholder="Email address"
                                                              name="email">
                      <button type="submit" class="subscribe_btn"><i
                          class="flaticon-magnifying-glass"></i></button>
                    </div>
                  </form>


                  <div class="single-sidebar-box mt-30 wow fadeInUp animated ">
                    <h4>Kategoriler</h4>
                    <div class="checkbox-item">
                      <form>
                        <div v-for="category in filterList.categories" class="form-group">
                          <input :value="category.id" v-model="categories" type="checkbox" :id="category.id">
                          <label :for="category.id">{{ category.title }}</label>
                        </div>
                      </form>
                    </div>
                  </div>

                  <div class="single-sidebar-box mt-30 wow fadeInUp animated pb-0 border-bottom-0 ">
                    <h4>Tedarikçiler </h4>
                    <ul class="popular-tag">
                      <li v-for="seller in filterList.sellers">
                        <a @click.prevent="addSeller(seller.id)" href="#0">{{ seller.name }}</a>
                      </li>
                    </ul>
                  </div>

                  <div class="single-sidebar-box mt-30 wow fadeInUp animated pb-0 border-bottom-0 ">
                    <h4>Etiketler </h4>
                    <ul class="popular-tag">
                      <li v-for="tag in filterList.tags">
                        <a @click.prevent="addTag(tag.id)" href="#0">{{ tag.title }}</a>
                      </li>
                    </ul>
                  </div>

                  <div class="single-sidebar-box mt-30 wow fadeInUp animated">
                    <h4>Fiyata göre sırala</h4>
                    <div class="slider-box">

                      <div id="price-range" class="slider"></div>
                      <div class="output-price">
                        <label for="priceRange">Fiyat:</label>
                        <input type="text" id="priceRange" readonly>
                      </div>


                      <button @click.prevent="filterProducts()" class="filterbtn" type="submit">
                        Filter
                      </button>
                    </div>
                  </div>


                </div>
              </div>
            </div>
            <div class="col-xl-9 col-lg-8">
              <div class="row">
                <div class="col-xl-12">
                  <div
                      class="shop-grid-page-top-info p-0 justify-content-md-between justify-content-center">
                    <div class="left-box wow fadeInUp animated">
                      <p>{{ pagination.total }} üründen {{ pagination.from }}–{{ pagination.to }} arası listeleniyor</p>
                    </div>
                    <div
                        class="right-box justify-content-md-between justify-content-center wow fadeInUp animated">
                      <div class="short-by">
                        <div class="select-box">
                          <select class="wide">
                            <option data-display="Short by latest">Featured</option>
                            <option value="1">Best selling</option>
                            <option value="2">Alphabetically, A-Z</option>
                            <option value="3">Alphabetically, Z-A</option>
                            <option value="3">Price, low to high</option>
                            <option value="3">Price, high to low</option>
                            <option value="3">Date, old to new</option>
                          </select>
                        </div>
                      </div>
                      <div class="product-view-style d-flex justify-content-md-between justify-content-center">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-grid-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-grid" type="button"
                                    role="tab" aria-selected="true">
                              <i class="flaticon-grid"></i>
                            </button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-list-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-list" type="button" role="tab"
                                    aria-selected="false">
                              <i class="flaticon-list"></i>
                            </button>
                          </li>
                        </ul>
                        <button class="slidebarfilter d-lg-none d-flex"><i class="flaticon-edit"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-grid" role="tabpanel"
                         aria-labelledby="pills-grid-tab">
                      <div class="row">
                        <div v-for="item in items" class="col-xl-4 col-lg-6 col-6">
                          <div class="products-three-single w-100 mt-30">
                            <div class="products-three-single-img">
                              <router-link :to="{name: 'items.show', params: {id: item.id}}" class="d-block">
                                <img :src="item.images[0].path" class="first-img" alt=""/>
                                <img :src="item.images[1].path" alt="" class="hover-img"/></router-link>
                              <div class="products-grid-one__badge-box"><span class="bg_base badge new">New</span></div>
                              <a @click.prevent="addToCart(item, true)" href="cart.html"
                                 class="addcart btn--primary style2"> Sepete Ekle </a>
                              <div class="products-grid__usefull-links">
                                <ul>
                                  <li>
                                    <a href="wishlist.html"> <i class="flaticon-heart"> </i> <span> wishlist</span> </a>
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
                              <div v-if="popupItem" class="container">
                                <div class="row justify-content-between align-items-center">
                                  <div class="col-lg-6">
                                    <div class="quick-view__left-content">
                                      <div class="tabs">
                                        <div class="popup-product-thumb-box">
                                          <ul>
                                            <li v-for="image in popupItem.images" class="tab-nav popup-product-thumb">
                                              <a :href="`#tabb${image.id}`">
                                                <p class="text">{{ image.id }}</p>
                                                <img :src="image.path" alt=""/>
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                        <div class="popup-product-main-image-box">
                                          <div v-for="image in popupItem.images" :id="`tabb${image.id}`"
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
                                      <h3>{{ popupItem.title }}</h3>
                                      <div class="ratting">
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <span>(112)</span>
                                      </div>
                                      <p class="text">{{ popupItem.description }}</p>
                                      <div class="price">
                                        <h2>{{ popupItem.price }} TL</h2>
                                        <h6>{{ popupItem.quantity > 0 ? 'Stokta var' : 'Stokta yok' }}</h6>
                                      </div>

                                      <div class="add-product">
                                        <h6>Qty:</h6>
                                        <div class="button-group">
                                          <div class="qtySelector text-center">
                                            <span class="decreaseQty"><i class="flaticon-minus"></i> </span> <input
                                              type="number" class="qtyValue" value="1"/>
                                            <span class="increaseQty"> <i class="flaticon-plus"></i> </span>
                                          </div>
                                          <button  @click.prevent="addToCart(popupItem)" class="btn--primary">Sepete Ekle</button>
                                        </div>
                                      </div>

                                      <div class="payment-method">
                                        <a href="#0"> <img
                                            src="http://localhost:5173/src/assets/images/payment_method/method_1.png"
                                            alt=""/> </a>
                                        <a href="#0"> <img
                                            src="http://localhost:5173/src/assets/images/payment_method/method_2.png"
                                            alt=""/> </a>
                                        <a href="#0"> <img
                                            src="http://localhost:5173/src/assets/images/payment_method/method_3.png"
                                            alt=""/> </a>
                                        <a href="#0"> <img
                                            src="http://localhost:5173/src/assets/images/payment_method/method_4.png"
                                            alt=""/> </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>


                            <div class="products-three-single-content text-center">
                              <span>{{ item.category.title }}</span>
                              <h5>
                                <router-link :to="{name: 'items.show', params: {id: item.id}}"> {{
                                    item.title
                                  }}
                                </router-link>
                              </h5>
                              <p>
                                {{ item.price }} TL
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row" v-if="pagination.last_page > 1">
                <div class="col-12 d-flex justify-content-center wow fadeInUp animated">
                  <ul class="pagination text-center">
                    <li v-if="pagination.current_page !== 1" class="next">
                      <a @click.prevent="getItems(pagination.current_page - 1)" href="#0"><i
                          class="flaticon-left-arrows" aria-hidden="true"></i> </a>
                    </li>

                    <li v-for="link in pagination.links">
                      <template
                          v-if="Number(link.label) &&
                                      (pagination.current_page - link.label < 2 &&
                                      pagination.current_page - link.label > -2) ||
                                      Number(link.label) === 1 || Number(link.label) === pagination.last_page"
                      >
                        <a @click.prevent="getItems(link.label)" :class="link.active ? 'active' : ''" href="#0">
                          {{ link.label }}
                        </a>
                      </template>

                      <template
                          v-if="Number(link.label) && (pagination.current_page !== 3 && pagination.current_page - link.label === 2) ||
                                                            (pagination.current_page !== pagination.last_page - 2 && pagination.current_page - link.label === -2)  "
                      >
                        <a>...</a>
                      </template>
                    </li>

                    <li v-if="pagination.current_page !== pagination.last_page" class="next">
                      <a @click.prevent="getItems(pagination.current_page + 1)" href="#0"><i class="flaticon-next-1"
                                                                                             aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!--End product-grid-->
    </main>

  </div>
</template>

<script>
export default {
  name: "Index",
  mounted() {
    $(document).trigger('changed')
    this.getItems()
    this.getFilterList()
  },

  data() {
    return {
      items: [],
      popupItem: null,
      filterList: [],
      categories: [],
      sellers: [],
      tags: [],
      prices: [],
      pagination: [],
    }
  },

  methods: {

    addToCart(item, isSingle) {

      let count = isSingle ? 1 : $('.qtyValue').val()

      let cart = localStorage.getItem('cart')
      $('.qtyValue').val(1)


      let newItem = [
        {
          'id': item.id,
          'count': count,
          'title': item.title,
          'price': item.price,
          'path': item.images[0].path,
        }
      ]

      if (!cart) {
        localStorage.setItem('cart', JSON.stringify(newItem))
      } else {
        cart = JSON.parse(cart)
        cart.forEach(itemInCart => {
          if(itemInCart.id === item.id) {
            itemInCart.count = Number(itemInCart.count) + Number(count)
            newItem = null
          }
        })
        Array.prototype.push.apply(cart, newItem)
        localStorage.setItem('cart', JSON.stringify(cart))
      }

    },

    filterProducts() {
      let prices = $(`#priceRange`).val()
      this.prices = prices.replace(/[TL\s+]/g, '').split('-')
      this.getItems()
    },

    addTag(id) {
      if (!this.tags.includes(id)) {
        this.tags.push(id);
      } else {
        this.tags = this.tags.filter(elem => {
          return elem !== id
        })
      }
    },

    addSeller(id) {
      if (!this.sellers.includes(id)) {
        this.sellers.push(id);
      } else {
        this.sellers = this.sellers.filter(elem => {
          return elem !== id
        })
      }
    },

    getItem(id) {
      this.axios.get(`http://localhost:8876/api/items/${id}`)
          .then(res => {

            this.popupItem = res.data.data
            console.log(res);
          })
          .finally(y => {
            $(document).trigger('changed');
            $('.tabs').tabs('destroy');
            $('.tabs').tabs();
          })
    },

    getItems(page = 1) {
      this.axios.post('http://localhost:8876/api/items', {

        'categories': this.categories,
        'sellers': this.sellers,
        'tags': this.tags,
        'prices': this.prices,
        'page': page,

      })
          .then(res => {
            this.items = res.data.data
            this.pagination = res.data.meta

          })
          .finally(y => {
            $(document).trigger('changed')
          })
    },

    getFilterList() {
      this.axios.get('http://localhost:8876/api/items/filters')
          .then(res => {
            this.filterList = res.data

            //  Price Filter
            if ($("#price-range").length) {
              $("#price-range").slider({
                range: true,
                min: +this.filterList.price.min,
                max: +this.filterList.price.max,
                values: [this.filterList.price.min, this.filterList.price.max],
                slide: function (event, ui) {
                  $("#priceRange").val(ui.values[0] + "TL" + " - " + ui.values[1] + "TL");
                }
              });
              $("#priceRange").val($("#price-range").slider("values", 0) + " TL" + " - " + $("#price-range").slider("values", 1) + " TL");
            }
            ;

          })
          .finally(y => {
            $(document).trigger('changed')
          })
    }
  }
}
</script>

<style scoped>

</style>