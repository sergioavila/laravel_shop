<template>
  <div>
    <h2>Tienda</h2>
    <div class="well">
      <h4>Qué buscas</h4>
      <form>
        <div class="input-group">
          <input type="text" name="" class="form-control input-sm" maxlength="256" value="">
          <span class="input-groun-btn">
            <button type="button" name="button" class="btn btn-primary btn-sm">Buscar</button>
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

  export default {
    data () {
      return {
        products: [],
      }
    },
    mounted () {
      this.getProducts()
    },
    methods: {
      getProducts: function() {
      var urlProducts = 'products'
      axios
        .get(urlProducts)
        .then(response => (this.products = response.data))
      }
    }
  }
</script>
