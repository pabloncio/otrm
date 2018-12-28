<template>
  <div class="modal fade" id="addOtrm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Añadir OTRM</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form @submit.prevent="saveOtrm">
                <div class="form-group">
                  <label>Fecha Ingreso</label>
                  <input type="date" class="form-control" v-model="date_in"/>
                </div>
                <div class="form-group">
                  <label>Fecha Retiro</label>
                  <input type="date" class="form-control" v-model="date_out"/>
                </div>
                <div class="form-group">
                  <label>Monto</label>
                  <input type="number" class="form-control" v-model="amount"/>
                </div>
                <div class="form-group">
                  <label>Abono</label>
                  <input type="number" class="form-control" v-model="payment"/>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>

            </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default{
      data(){
          return {
              date_in: null,
              date_out: null,
              amount: null,
              payment: null
            }
      },
      methods: {
          saveOtrm: function(){
            axios.post('http://127.0.0.1:8000/otrm',{
                date_in: this.date_in,
                date_out: this.date_out,
                amount: this.amount,
                payment: this.payment
            })
            .then(function(res){
                console.log(res)
                $('#addOtrm').modal('hide')
            })
            .catch(function(err){
                console.log(err)
            });
          }
      }
  }

</script>
