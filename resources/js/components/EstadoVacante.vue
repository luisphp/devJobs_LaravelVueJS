<template>
    <div>
        <span 
                @click="cambiarestado"
                :key="estadoVacanteData"
                :class="claseEstadoVacante()"
                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full">
            {{estadoVacante}}
        </span>        
    </div>
</template>

<script>
import axios from  'axios'

export default {
    props: ['estado','vacanteid'],
    data: function(){
        return {
            estadoVacanteData : null,
            idVacante : null
        }
    },
    mounted(){
        // console.log('El estado de la App es: ', this.estado);
        // console.log('El id de la vacante es: ', this.vacanteid);

        this.estadoVacanteData = Number(this.estado)
        this.idVacante = Number(this.vacanteid)
    },
    methods: {
        cambiarestado(){
            // console.log('Cick');

            if(this.estadoVacanteData == 1){
                this.estadoVacanteData = 0
            }else{
                this.estadoVacanteData = 1
            }

            //enviar la peticion a axios para cambiar el estado en la base de datos

            const params = {
                estado: this.estadoVacanteData,
                idvacante  : this.idVacante
            }

            axios.post('./vacantes/cambiarestado/'+this.idVacante , params)
            .then((response) => {
                console.log('Respuesta del servidor (CambiarEstadoVacante): ', response)
            }).catch((err) => {
                console.log('Error, Servidor (CambiarEstadoVacante): ', err)
            });

            console.log(this.estadoVacanteData);
        },
        claseEstadoVacante(){
            return this.estadoVacanteData == 1 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-500'
        }
    },
    computed: {
        estadoVacante(){
            return this.estadoVacanteData === 1 ? 'Activa' : 'Inactiva'
        }
    }

}
</script>

