<template>
  <div>
    <main>
      <!--Start Breadcrumb Style2-->
      <section class="breadcrumb-area" style="background-image: url(src/assets/images/inner-pages/breadcum-bg.png);">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="breadcrumb-content text-center wow fadeInUp animated">
                <h2>Sepet</h2>
                <div class="breadcrumb-menu">
                  <ul>
                    <li>
                      <router-link to="/"><i class="flaticon-home pe-2"></i>Anasayfa</router-link>
                    </li>
                    <li><i class="flaticon-next"></i></li>
                    <li class="active">
                      <router-link to="/items">
                        Ürünler
                      </router-link>
                    </li>
                    <li><i class="flaticon-next"></i></li>
                    <li class="active">Sepet</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Breadcrumb Style2-->
      <!--Start cart area-->
      <section class="cart-area pt-60 pb-120">
        <div class="container">

          <div class="row wow fadeInUp animated">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="cart-table-box">
                  <div class="table-outer">
                    <table class="cart-table">
                      <thead class="cart-header">
                      <tr>
                        <th class="">Ürün İsmi</th>
                        <th class="price">Fiyat</th>
                        <th>Adet</th>
                        <th>Toplam Fiyat</th>
                        <th class="hide-me"></th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr v-for="item in items">
                        <td>
                          <div class="thumb-box">
                            <router-link :to="{name: 'items.show', params: {id: item.id}}" class="thumb">
                              <img :src="item.path" :alt="item.title">
                            </router-link>
                            <router-link :to="{name: 'items.show', params: {id: item.id}}" class="title">
                              <h5> {{ item.title }} </h5>
                            </router-link>
                          </div>
                        </td>
                        <td>{{ item.price }} TL</td>
                        <td class="qty">
                          <div class="qtySelector text-center">
                            <span @click.prevent="decreaseCount(item)" class="decreaseQty"><i
                                class="flaticon-minus"></i> </span>
                            <input type="number" class="qtyValue" :value="item.count"/>
                            <span @click.prevent="increaseCount(item)" class="increaseQty"> <i
                                class="flaticon-plus"></i> </span>
                          </div>
                        </td>
                        <td class="sub-total">{{ item.count * item.price }} TL</td>
                        <td>
                          <div @click.prevent="removeItem(item.id)" class="remove"><i class="flaticon-cross"></i></div>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

            </div>
          </div>





          <div class="row mt-10">
            <div v-if="isLoggedIn" class="col-xl-6 col-lg-6 mt-30 col-md-9 wow fadeInUp animated">
              <div class="row wow fadeInUp animated">
                <div class="col-12">
                  <ul class="nav product-details-nav nav-one nav-pills justify-content-center" id="pills-tab-two"
                      role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-register-tab" data-bs-toggle="pill"
                              data-bs-target="#pills-register" type="button" role="tab" aria-controls="pills-register"
                              aria-selected="true">Kayıt Ol
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-login-tab" data-bs-toggle="pill"
                              data-bs-target="#pills-login" type="button" role="tab" aria-controls="pills-login"
                              aria-selected="false">Giriş Yap
                      </button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row wow fadeInUp animated mt--30">
                <div class="tab-content" id="pills-tabContent-two">
                  <div class="tab-pane fade show active" id="pills-register" role="tabpanel"
                       aria-labelledby="pills-register-tab">
                    <div class="product-register">
                      <div class="login-register-form"
                           style="background-image: url('src/assets/images/inner-pages/login-bg.png');">
                        <div class="top-title text-center ">
                          <h2>Register</h2>
                        </div>
                        <form class="common-form">

                          <div class="form-group"><input type="email" class="form-control"
                                                         placeholder="Your Email"></div>
                          <div class="form-group eye">
                            <div class="icon icon-1"><i class="flaticon-hidden"></i></div>
                            <input
                                type="password" id="password-field" class="form-control" placeholder="Password">
                            <div class="icon icon-2 "><i class="flaticon-visibility"></i></div>
                          </div>
                          <div class="form-group eye">
                            <div class="icon icon-1"><i class="flaticon-hidden"></i></div>
                            <input
                                type="password" id="password-field" class="form-control" placeholder="Confirm Password">
                            <div class="icon icon-2 "><i class="flaticon-visibility"></i></div>
                          </div>                          <div class="checkk">
                            <div class="form-check p-0 m-0"><input type="checkbox" id="remember"> <label
                                class="p-0" for="remember"> Accept the Terms and Privacy Policy </label>
                            </div>
                          </div>
                          <button type="submit" class="btn--primary style2">Register</button>
                        </form>
                      </div>

                    </div>
                  </div>
                  <div class="tab-pane fade " id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                    <div class="product-login">
                      <div class="login-register-form"
                           style="background-image: url('src/assets/images/inner-pages/login-bg.png');">
                        <div class="top-title text-center ">
                          <h2>Login</h2>
                        </div>
                        <form class="common-form">
                          <div class="form-group"> <input type="text" class="form-control"
                                                          placeholder="Your User Name (Or) Email Address"> </div>
                          <div class="form-group eye">
                            <div class="icon icon-1"> <i class="flaticon-hidden"></i></div> <input
                              type="password" id="password-field" class="form-control" placeholder="Password">
                            <div class="icon icon-2 "><i class="flaticon-visibility"></i> </div>
                          </div>
                          <div class="checkk ">
                            <div class="form-check p-0 m-0"> <input type="checkbox" id="remember"> <label
                                class="p-0" for="remember"> Remember Me</label> </div> <a href="#0"
                                                                                          class="forgot"> Forgot Password?</a>
                          </div> <button type="submit" class="btn--primary style2">Login </button>
                        </form>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div v-else class="contact-box col-xl-6 col-lg-6 mt-30 wow fadeInUp animated">

              <div class="contact-form">
                <h3>Adres Bilgileri</h3>
                <form action="#" class="common-form">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group"> <input type="text" v-model="name" id="name" class="form-control" placeholder="Ad" /></div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group"> <input type="text" v-model="surname" id="surname" class="form-control" placeholder="Soyad" /></div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group"> <input type="text" v-model="email" id="email" class="form-control" placeholder="Email" /></div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group"> <input type="text" v-model="phone" id="phone" class="form-control" placeholder="Telefon" /></div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group"> <input type="text" v-model="country" id="city" class="form-control" placeholder="İlçe" /></div>
                    </div>


                    <div class="col-lg-6">
                      <div class="form-group"><input type="text" v-model="address" id="address" class="form-control" placeholder="Adres" /></div>
                    </div>
                  </div>
                </form>
              </div>

            </div>

            <div class="col-xl-6 col-lg-6 wow mt-4 fadeInUp animated">
              <div class="single-product-box">
                <h3>Sipariş Ücreti</h3>

                <div class="cart-check-out mt-30">
                  <ul class="cart-check-out-list">
                    <li>
                      <div class="left">
                        <p>Ürünün Toplamı</p>
                      </div>
                      <div class="right">
                        <p>{{ total_price }} TL</p>
                      </div>
                    </li>
                    <li>
                      <div class="left">
                        <p>Kargo</p>
                      </div>
                      <div class="right">
                        <p>50 TL</p>
                      </div>
                    </li>
                    <li>
                      <div class="left">
                        <p>Toplam (KDV Dahil)</p>
                      </div>
                      <div class="right">
                        <p>{{ total_price}} TL</p>
                      </div>
                    </li>
                  </ul>
                </div>
                <button  @click.prevent="storeBuyer"  type="submit" class="btn--primary mt-4">Siparişi Tamamla</button>

              </div>
            </div>
          </div>


        </div>
      </section>
      <!--End cart area-->
    </main>
  </div>
</template>

<script>
export default {
  name: "Index",
  mounted() {
    $(document).trigger('changed')
    this.getCartItems()

  },

  data() {
    return {
      items: [],
      name: '',
      surname: '',
      email: '',
      country: '',
      address: '',
      phone: '',


      isLoggedIn: false
    }
  },

  computed: {
    total_price() {
      let total = 0
      for (let i = 0; i < this.items.length; i++) {
        total += this.items[i].count * this.items[i].price;
      }
      return total
    }
  },


  methods: {
    storeBuyer() {
      this.axios.post('http://localhost:8876/api/orders', {

        'email': this.email,
        'address': this.address,
        'name': this.name,
        'surname': this.surname,
        'country': this.country,
        'items': this.items,
        'total_price': this.total_price,
        'phone': this.phone,

      })
          .then(res => {
            console.log(res)
          })
          .finally(y => {
            $(document).trigger('changed')
          })

    },

    getCartItems() {
      this.items = JSON.parse(localStorage.getItem('cart'))
    },
    increaseCount(item) {
      item.count++
      this.updateCart()
    },
    decreaseCount(item) {
      if (item.count === 1) return
      item.count--
      this.updateCart()
    },
    removeItem(id) {
      this.items = this.items.filter(item => {
        return item.id !== id
      })
      this.updateCart()
    },
    updateCart() {
      localStorage.setItem('cart', JSON.stringify(this.items))
    },

  }
}
</script>

<style scoped>

</style>