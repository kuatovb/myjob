<template>
  <div id="home"> 
    <div class="container">
      <Header />
      <transition name="view">
        <router-view></router-view>
      </transition>
      <Footer />
    </div>
  </div>
</template>

<script>

import Header from '../partials/Header'
import Footer from '../partials/Footer'

export default {
  components: {
    Header,
    Footer
  }
}
</script>

<style>
.view-enter-active, .view-leave-active {
  transition: opacity 0.5s ease-in-out, transform 0.5s ease;
}
.view-enter-active {
  transition-delay: 0.5s;
}

.view-enter, .view-leave-to{
    opacity: 0;
    transform: translateY(-100px);
}
.view-enter-to, .view-leave{
  opacity: 1;
  transform: translateY(0px);
}
</style>