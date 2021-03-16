<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class='container' >   
    <div class="div_central"> 
        <table id='example' class="display compact">
            <thead> 
                <th>Nº Carta</th> 
                <th>Protocolo</th> 
                <th>Nome Cliente</th> 
                <th>Projeto</th> 
                <th>Dia Entrada</th> 
                <th>Satus</th> 
                <th style = 'width:20px'>Tempo</th>
              
            </thead>
        </table>
    </div>
<div>


    
</body>
</html>





<script>
    var data=[];
      @foreach($retorno as $busca)  
             data.push([                
                '{{$busca->titulo}}',
                '{{$busca->telefone}}',
                '{{$busca->endereco}}',
                '{{$busca->cep}}',
                '{{$busca->cidade}}',
                '{{$busca->estado}}',
                '{{$busca->descricao}}'
                  ]
             );

@endforeach 

console.log(data);



$('#example').DataTable( {   
     data: data,
     deferRender: true,
     scrollY:        "400px",
     scrollX:         "400px",
     scrollCollapse: true,
     scroller:       true,

     "language": {
            "lengthMenu": "Exibir _MENU_ registros por página",
            "zeroRecords": "Nada encontrado - desculpe",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "Sem registros disponiveis",
            "infoFiltered": "(Filtro de um total de _MAX_ registros)",
            "search":         "Filtrar:",
            "paginate": {
                        "first":      "Firstee",
                        "last":       "Last",
                        "next":       "Proximo",
                        "previous":   "Anterior" }   
      }

  
    } );
    </script>