var cpf = document.querySelector("#user-cpf");

cpf.addEventListener("blur", function(){
   if(cpf.value) cpf.value = cpf.value.match(/.{1,3}/g).join(".").replace(/\.(?=[^.]*$)/,"-");
});