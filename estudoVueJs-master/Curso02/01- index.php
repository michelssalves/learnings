<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://unpkg.com/vue@3"></script>
</head>
<body>


<div id="app">
<p>{{ message }}</p>
<p> Meu nome é: {{ nome }}</p>
<input v-on:input= "mudarNome">

<script>
const { createApp } = Vue

createApp({
  data() {
    return {
      message: 'Hello Vue!',
      nome: ''
    }
  },
  methods: {
      mudarNome: function(event){
              this.nome = event.target.value;
}
  }
}).mount('#app')
</script>
</div> 
</body>
</html>