<template>
  <!-- Logo & Site Name -->
    <div>
        <lang-switcher></lang-switcher>
        <div class="placeholder">
            <div class="parallax-window" data-parallax="scroll" data-image-src="http://127.0.0.1:8000/img/simple-house-01.jpg">
                <div class="tm-header">
                    <div class="row tm-header-inner">
                        <div class="col-md-6 col-12">
                            <img src="http://127.0.0.1:8000/img/simple-house-logo.png" alt="Logo" class="tm-site-logo" /> 
                            <div class="tm-site-text-box">
                                <h1 class="tm-site-title">{{ $t('header.title') }}</h1>
                                <h6 class="tm-site-description">{{ $t('header.description') }}</h6>	
                            </div>
                        </div>
                        <nav class="col-md-6 col-12 tm-nav">
                            <ul class="tm-nav-ul">
                                <li class="tm-nav-li"><a href="#" class="tm-nav-link active">Home</a></li>
                                <li class="tm-nav-li"><a href="#" class="tm-nav-link">About</a></li>
                                <li class="tm-nav-li"><a href="#" class="tm-nav-link">Contact</a></li>
                            </ul>
                        </nav>	
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import LangSwitcher from '../../LangSwitcher.vue'

export default {
    components: {
        LangSwitcher
    }
}
</script>

<style>

</style>