<template>
      <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Date In</th>
              <th scope="col">Date Out</th>
              <th scope="col">Amount</th>
              <th scope="col">Payment</th>
              <th scope="col">Option</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="otrm in otrms">
              <th scope="row">1</th>
              <td>{{ otrm.date_in }}</td>
              <td>{{ otrm.date_out }}</td>
              <td>{{ otrm.amount }}</td>
              <td>{{ otrm.payment }}</td>
              <td><a href="#" class="btn btn-default">Ver mas...</a></td>
            </tr>
          </tbody>
        </table>
      </div>

</template>

<script>
    export default {
        data() {
            return {

            }

        },
        mounted() {
            axios.get('http://127.0.0.1:8000/otrm').then(response => (this.otrms = response.data))
        }
    }
</script>
