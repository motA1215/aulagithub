<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD - UDEMY</title>
      
    
    <link rel="shortcut icon" href="resources/favicon.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <style type="text/css">
    body{
        margin: 20px;
        background-color: blueviolet;
    }

    *{
        font-family: 'Open Sans', sans-serif;
    }

    h2{
        font-family: 'Open Sans', sans-serif;
    }
    .thead{
        background-color: #f7f7f7;
    }
    
    </style>

</head>
<body>
    

<div class="container">
    <h2 class="text-center">Lista de Usuários <i class="bi bi-people-fill"></i> </h2>

    <h5 class="text-end">
        <a href="view/page_register.php" class="btn btn-primary btn-xs">
    
      <i class="bi bi-person-plus-fill"> </i>
    </a>
    
    </h5>


</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</body>

<div class="cotainer">
 
   <h2 class="text-center">Lista de Clientes</h2>
       <i class="bi bi-people-fill"> </i>
           
       <h5 class="text-end">
         <a href="view/page_register.php" class="btn btn-primary btn-xs">
           <i class="bi bi-person-plus-fill">  

           </i>
        </a>     
    </h5>

<div class="table-responsive">
    <table class="table table-hover">
        <thead class="thead">
            <tr>
               <th>ID</th>
               <th>NOME</th>
               <th>E-MAIL</th>
               <th>CPF</th>
               <th>DT. DE NASCIMENTO</th>
               <th>ENDEREÇO</th>
               <th>TELEFONE</th>
               <th colspan="3">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Rodrigo Mota</td>
                <td>rodrigomota@email.com</td>
                <td>161.639.864-96</td>
                <td>12/03/2004</td>
                <td>Rua Santa Cruz</td>
                <td>(31)99712-4298</td>
                <td>
                   editar
                </td>
                <td>
                   excluir
                </td>
                <td>
                    <form method="POST">
                        <button class="btn btn-warning btn-xs">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                    </form>
                </td>
                <td>
                    <form method="POST" onclick="return confirm('Tem certeza que deseja excluir?');">
                    <button class="btn btn-danger btn-xs">
                        <i class="bi bi-trash"> </i>
                    </button>

                    </form>
                </td>
            </tr>
        </tbody>
    </table>   
</div>
</div>
</html>