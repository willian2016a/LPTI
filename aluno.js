function verificaNomeAluno() {
	var nome = document.querySelector("#nomeAluno").value;
	var v1;
	nome =  nome.length;
   if (nome = " ") 
    v=false;{
   }else {
   	if(nome>=4){
   	  v1=true;
      }else {
      	v1=false;
      }
   }
}
function verificaMatricula(){
	var matricula =  document.querySelector("#matriculaAluno").value;
	var parte =  matricula.substr(5,9);
	if (matricula = " "){
		v2 = false;
   }else {
   	 if(matricula>=12){
   	 	if(parte=='1811') {
   	 		v2=true;
   	 	}else {
   	 		v2 = false;
   	 	}
   	 }else {
   	 	v2= false;
   	 }
   }
}

function verificaFrequencia(){
	var frequencia =  document.querySelector("#frequenciaAluno").value;
	var aux;
	if(frequencia = " "){
		aux =false;
	}else {
		 aux=true;
	}
}

function verificaSupremo() {
	
}	                                                                                                                                                                                                                                                                                                                                                                         