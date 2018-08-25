<template>
  <div class="row h-100 justify-content-center align-items-center">
    <form class="form-signin">
      <img class="mb-4" src="https://sergio-avila.com/bartenderapp/logo-bartender.png" alt="" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <div class="form-group">
        <label for="inputName" class="sr-only">Name</label>
        <input type="text" v-model="name" id="inputName" class="form-control" placeholder="Name" required="" autofocus="">
      </div>
      <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" v-model="email" id="inputEmail" class="form-control" placeholder="Email address" required="">
      </div>
      <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" v-model="password" id="inputPassword" class="form-control" placeholder="Password" required="">
      </div>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" v-model="remember" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
  </div>
</template>

<script>
export default {
  data () {
    return {
      name: '',
      email: '',
      password: '',
      remember: ''
    }
  }
}
</script>
