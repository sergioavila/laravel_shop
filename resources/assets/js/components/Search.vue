<template>
  <div>
    <h2>Tienda</h2>
    <div class="well">
      <h4>Qué buscas</h4>
      <form v-on:submit.prevent="createProduct">
        <meta name="csrf-token" content="">
        <div class="input-group">
          <input type="text" v-model="newProduct" class="form-control input-sm" maxlength="256">
          <span class="input-groun-btn">
            <button type="submit" class="btn btn-primary btn-sm">Buscar</button>
          </span>
        </div>
      </form>
      <hr>
      <ul class="list-unstyled">
        <li v-for="product in products">
          <p>
            {{ product.title }}
          -
            ${{ product.price }}
          </p>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
  import axios from 'axios'
  import toastr from 'toastr'
  import moment from 'moment'

  moment.locale('es')

  export default {
    data () {
      return {
        products: [],
        newProduct: '',
      }
    },
    mounted () {
      this.getProducts()
    },
    methods: {
      createProduct: function(){
        window.axios.defaults.headers.common = {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
        let url = 'add-product'
        let errors = this.errors;
        axios
        .post(url,{
          title: this.newProduct
        })
        .then(response => {
          this.getProducts()
          this.newProduct = ''
          toastr.success('Producto agregado con éxito')
        }).catch(
          erro => {
            toastr.error('Error al guardar')
          }
        )
      },
      since: function(d) {
        return moment(d).fromNow()
      },
      getProducts: function() {
      var urlProducts = 'products'
      axios
        .get(urlProducts)
        .then(response => (this.products = response.data))
      }
    }
  }
</script>
