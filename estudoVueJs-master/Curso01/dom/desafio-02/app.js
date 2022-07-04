new Vue({
    el: '#desafio',
    data:{
        valor:'',
    },
    methods:{
        exibirAlerta(){
            alert('Alerta Vermelho')
        },
        alterarValor(event){
            this.valor = event.target.value
        }
    }

})