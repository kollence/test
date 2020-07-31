<template>
  <div id="app">
    <router-link style="color: green" to="/"><h1>Index</h1></router-link>

    <router-view></router-view>
  </div>
</template>

<script>

export default {
  name: 'App',
  
}
</script>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  // text-align: center;
  color: aquamarine;
  background-color: #2c3e50;
  margin-top: 60px;
  padding: 20px;
}
.link {
  color: aliceblue;
  text-decoration: none;
}
</style>
