<template>
  <div classs="container">
    <nav class="sidebar">
      <div class="row col-md-4">

      </div>

    </nav>
    <div class="row col-md-10">
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
          <tr v-for="otrms in otrm">
            <th scope="row">{{ otrm.id }}</th>
            <td>{{ otrm.date_in }}</td>
            <td>{{ otrm.date_out }}</td>
            <td>{{ otrm.amount }}</td>
            <td>{{ otrm.payment }}</td>
            <td><a href="#" class="btn btn-default">Ver mas...</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


</template>

<script>
    export default {
        data() {
            return {
              otrms:[
                  {id => 1, date_in =>'27-12-2018', date_out=>'30-12-2018', amount=>20000, payment=>3000, status=>'pending'},
                  {id => 2, date_in =>'27-12-2018', date_out=>'30-12-2018', amount=>20000, payment=>3000, status=>'pending'},
                  {id => 3, date_in =>'27-12-2018', date_out=>'30-12-2018', amount=>20000, payment=>3000, status=>'pending'}
              ]
            }

        },
        mounted() {
          //axios.get('http://127.0.0.1:8000/otrm').then(response => (this.otrms = response.data))

        }
    }
</script>
