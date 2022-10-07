  <?php

include ("conexao.php");



?>

<!DOCTYPE html>
<html lang="pt" dir="ltr"  encode="utf-8">
  <head>
    <meta charset="utf-8">

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
      <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <title>Monitoramento Prisma</title>
  </head>
  <body>
    <div class="container py-5">
       <div class="row">
 
               <!-- Fixed header table-->
               <div class="table-responsive">
                   <table class="table-striped table-responsive" style="text-align: center; font-size: 12px;">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Geração</button>
                       <thead class="thead-light">
                           <tr>
                               <th scope="col" class="col-1">Cliente</th>
                               <th scope="col" class="col-1">Status</th>

                       </thead>
                       <tbody>
                        <?php
                          $con = mysqli_connect("localhost","root","","monitoramento");
                          if (mysqli_connect_errno()) {
                              printf("Connect failed: %s\n", mysqli_connect_error());
                                exit();
                              }

                          $query = "SELECT * FROM `clientes` where tecninco like 'Offline'";
                          
                          $teste = mysqli_query($con,$query);

                          $pedro = mysqli_fetch_assoc($teste);

                          

                          while ($dados = mysqli_fetch_assoc($teste)) 
                          {
                            echo"<tr>";
                            echo"<td>".$dados['cod']."</td>";
                            echo"<td>".$dados['tecninco']."</td>";


                          }
                        ?>
                       </tbody>
                   </table>
               </div>
             </div>
           </div>
       </div>
  </body>
</html>
