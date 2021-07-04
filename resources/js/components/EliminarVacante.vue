<template>
    <div>
        <button  
            @click="EliminarVacante"
             class="text-red-600 hover:text-red-900  mr-3"
             >Eliminar</button>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    props: ['vacanteid'],
    methods: {
        EliminarVacante(){
            // console.log('Eliminando...', this.vacanteid);

           this.$swal.fire({
                title: '¿Deseas eliminar esta vacante?',
                text: "Una vez eliminada no se puede recuperar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'No'
                }).then((result) => {
                if (result.isConfirmed) {

                    let params = {
                        id: this.vacanteid,
                        _method: 'delete'
                    }

                    axios.post(`./vacantes/${this.vacanteid}`, params)
                    .then((result) => {
                        // console.log('Respuesta del servidor : ',result );

                        this.$swal.fire(
                            'Vacante eliminada!',
                            result.data.mensaje,
                            'success'
                            )

                        //Eliminar del DOM la vacante
                        this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);
                        
                        

                    }).catch((err) => {
                        console.log('Respuesta del servidor : ',err );
                    });



                }
                })
        }
    }
}
</script>