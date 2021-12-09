
<?php include '../layout/header.php';


?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include '../layout/main_sidebar.php';?>

        <!-- top navigation -->
       <?php include '../layout/top_nav.php';?>      <!-- /top navigation -->
       <style>
label{

color: black;
}
li {
  color: white;
}
ul {
  color: white;
}
#buscar{
  text-align: right;
}
       </style>

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>
 

                 <div class="panel-heading">


        </div>
 
 <!--end of modal-->


                  <div class="box-header">
                  <h3 class="box-title"> </h3>

                </div><!-- /.box-header -->
                 <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Imprimir</a>
                <a class="btn btn-warning btn-print" href="medico_agregar.php"    style="height:25%; width:15%; font-size: 12px " role="button">NOVO</a>


                









                <div class="box-body">
                
         

 
                        
            

          
      






      
 <!--end of modal-->











                  <div class="box-header">
                  <h3 class="box-title"> LISTA DE MEDICOS</h3>
                </div><!-- /.box-header -->
              


                <div class="box-body">
                
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr class=" btn-success">

                    <th>#</th>
                        <th>Foto</th>
                        <th>Nome e Sobre nome</th>
                        <th>Telefone</th>
                        <th>Usuario</th>
                       
                             <th>CEP</th>
     

 <th class="btn-print"> Ação </th>
                      </tr>
                    </thead>
                    <tbody>
<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from usuario where tipo='medico' ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $cid=$row['id'];
    $i++;
?>
                      <tr >

<td ><?php echo $i;?></td>
 <td><IMG src="../usuario/subir_us/<?php echo $row['imagen'];?>" style="height:50PX" /></td>
              <td><?php echo $row['nombre'].'  '.$row['apellido'];?></td>
<td><?php echo $row['telefono'];?></td>
<td><?php echo $row['usuario'];?></td>
  
    <td><?php echo $row['correo'];?></td>                                      

                          <td>
                                 <?php
                   
                    
                      ?>
  <a class="small-box-footer btn-print"  href="<?php  echo "eliminar_medico.php?cid=$cid";?>" onClick="return confirm('¿Está seguro de que quieres eliminar medico??');"><i class="glyphicon glyphicon-remove" ></i></a>

<a class="btn btn-success btn-print" href="../horario_medico/<?php  echo "horario_medico.php?cid=$cid";?>"  role="button">Horario</a>
<a class="btn btn-primary btn-print" href="../vacaciones/<?php  echo "vacaciones.php?cid=$cid";?>"  role="button">Ferias</a>
<a class="btn btn-danger btn-print" href="<?php  echo "editar_medico.php?cid=$cid";?>"  role="button">Editar</a>
             <?php
            //          }
                      ?>

            </td>
                      </tr>

 <!--end of modal-->

 <!--proximas implementaçoes sobre ferias-->
<?php }?>
                    </tbody>

                  </table>
                </div><!-- /.box-body -->

            </div><!-- /.col -->


          </div><!-- /.row -->




                </div><!-- /.box-body -->

            </div>
        </div>
      </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
                         <a href="https://github.com/Marques-Dev">Marques - Dev</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

  <?php include '../layout/datatable_script.php';?>



        <script>
        $(document).ready( function() {
                $('#example2').dataTable( {
                 "language": {
                   "paginate": {
                      "previous": "anterior",
                      "next": "proximo"
                    },
                    "search": "Buscar:",


                  },
           "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],


  "searching": true,
                }

              );
              } );
    </script>




    <!-- /gauge.js -->
  </body>
</html>
