new Vue({
    el: '#desafio',
    data:{
        nome: 'Michel',
        idade: 28,
        imagem:'Itachi_Uchiha.jpg'
    },
    methods: {
        idade3(){
           return this.idade * 3
        },
        random(){
            return Math.random()
         }
    }
})