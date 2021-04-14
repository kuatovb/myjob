<template>
  <div style="padding: 10px;">
      <a href="#" @click.prevent="setLocale('ru')" style="color: #181818; text-decoration: none">RU</a>
      <span style="margin-right: 10px; margin-left: 10px;">|</span>
      <a href="#" @click.prevent="setLocale('en')" style="color: #181818; text-decoration: none">EN</a>
  </div>
</template>

<script>
export default {
    methods: {
        setLocale(locale) {
            this.$i18n.locale = locale
            this.$router.push({
                params: { lang: locale }
            });
        },
    }
}
</script>

<style>

</style>