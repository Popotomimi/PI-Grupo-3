function formataData(data = new Date()){
    var dia = data.getDate();
    var mes = data.getMonth()+1;
    var ano = data.getFullYear();

    if(dia.toString().length == 1) dia + '0' + dia;
    if(mes.toString().length == 1) mes + '0' + mes;

    return dia+'/'+mes+'/'+ano;
}
   
    var d = new Date();

   document.write("<h2>Chamado criado em: "+formataData()+"</h2>");
   document.write("<h2>As: "+ (d.getHours()+':'+d.getMinutes()+':'+d.getSeconds())+ " horas.</h2>");