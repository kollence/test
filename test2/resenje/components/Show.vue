<template>
  <div>
      <h1>Show</h1>
      <div>
          <h3>{{user.name}}</h3>
            <p>Username: {{user.username}}</p>
            <p>Email: {{user.email}}</p>
            <p>Phone: {{user.phone}}</p>
            <p>Website: {{user.website}}</p>
            <div>street: <i>{{user.address.street}}</i></div>
            <div>suite: <i>{{user.address.suite}}</i></div>
            <div>city: <i>{{user.address.city}}</i></div>
            <div>zip: <i>{{user.address.zipcode}}</i></div>
            <div v-for="(comp, i) in user.company" :key="i">
                {{i}}: {{comp}}
            </div>
            <small>geo: </small>
            <div v-for="(geo, i) in user.address.geo" :key="i">
                {{i}}: {{geo}}
            </div>
            <hr>

      </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
    name: 'Show',
    data() {
        return {
            user: []
        }
    },
    created() {
        axios.get(`https://jsonplaceholder.typicode.com/users/${this.$route.params.id}`)
        .then(res => this.user = res.data)
        .catch(err => console.log(err))
    }
}
</script>

<style>

</style>