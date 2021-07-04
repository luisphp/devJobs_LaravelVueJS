<template>
    <div>
        <ul class="flex flex-wrap justify-center">
            <li v-for="(skill , i ) in this.skills"
                v-bind:key="i"
                class="border border-gray-500 px-10 py-3 mb-3 rounded mr-4 "
                :class="verificarClaseActiva(skill)"
                @click="activar($event)"
                >{{ skill }}</li>
        </ul>
        <input type="hidden" name="skills" id="skills">
    </div>
    
</template>

<script>
    export default {
        props: ['skills', 'oldskills'],
        data: function(){
            return {
                habilidades: new Set()
            }
        },
        mounted: function() {
            // console.log('Los skills seleccionados anteriormente son: ', this.oldskills);
            document.querySelector('#skills').value = this.oldskills;
        },
        created: function(){
            if(this.oldskills){
                const skills_array = this.oldskills.split(',');
                skills_array.forEach( skill => { 
                    this.habilidades.add(skill)
                });
            }
        },
        methods: {
            activar(e){
                // console.log('Hiciste click en', skill);
              if(  e.target.classList.contains('bg-gray-700') ){
                //El skill esta activo
                e.target.classList.remove('bg-gray-700')
                //Agregar al set de habilidades 
                this.habilidades.delete(e.target.textContent);

              }else{
                  //El Skill no esta activo
                e.target.classList.add('bg-gray-700');
                this.habilidades.add(e.target.textContent);

              }

                const string_habilidades = [...this.habilidades];
              //Agregar las habilidades al input hidden
              document.querySelector('#skills').value = string_habilidades;

            },
            verificarClaseActiva(skill){
                // console.log('Desde clase activa: ', skill);

                return this.habilidades.has(skill) ? 'bg-gray-700' : '';


            }
        }
    }
</script>
