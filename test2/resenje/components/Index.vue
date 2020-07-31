<template>
  <div>
      <h1>Index</h1>

      <div v-for="user in users" :key="user.id" style="padding: 10px;">
          <router-link class="link" :to="'show/' + user.id">{{user.name}}</router-link>
      </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
    name: 'Index',
    data(){
    return {
      users: []
    }
  },
  created(){
    axios.get('https://jsonplaceholder.typicode.com/users')
    .then(res => this.users = res.data)
    .catch(err => console.log(err))
  }
}
</script>

<style>

</style>