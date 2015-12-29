<!DOCTYPE html>
<html lang="en">

<head>
   <?php 
   
   session_start();
   
    if(!isset($_SESSION['admin'])) {
            if ( ($_POST['username']=='admin') && ($_POST['psw']=='admin') ){
                
                $_SESSION['admin']=true;
                echo $_SESSION['admin'];
               
                }
                else{
                    header('location: index.php');
                }
            }
   
    ?>

	<?php require 'dbconfig.php'; ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">

    <link href="css/customAdmin.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Fantasy Parlement
                    </a>
                </li>
                <li>
                  <form action="interface.php" method="POST" role="form">
                    <select name="week" class="select-style"> 
                    <option value="1"> Week 1</option> 
                    <option value="2"> Week 2 </option>  
                    <option value="3"> Week 3 </option>
                    <option value="4"> Week 4 </option>
                    <option value="5"> Week 5 </option> 
                    <option value="6"> Week 6 </option>  
                    <option value="7"> Week 7 </option>
                    <option value="8"> Week 8 </option>
                    <option value="9"> Week 9</option> 
                    <option value="10"> Week 10 </option>  
                    <option value="11"> Week 11 </option>
                    <option value="12"> Week 12</option>
                
                    </select>
                </li>
                <li>
                    <button class="btn btn-default" type="submit">Valider</button>
                </li>
            </ul>

        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12">
<h2 align="center" class="animated shake"> Interface Admininstrateur </h2>
<br>

                        <?php  if ( ! isset($_POST['week'])) { ?>
                            Please select week  <?php }
                            else {  ?>  <span class"animated fadeInDown" > Week selected  <?php echo $_POST['week']; ?> </span>
                                <br>
                                <form role="form" action="interface.php">
                                <select name="depute" class="select-style animated fadeInDown">
                                <?php
                                $req = 'SELECT * FROM Depute ';
                                $result = mysql_query($req) or die(mysql_error());
                                while($row = mysql_fetch_array($result))
                                {
                                    echo '<option  value="'.$row['id'].'"> "'.$row['nom'].'"</option> ';
                                }
                                ?>
                                </select>
                                <br>
                                <label class="animated fadeInDown"> absence non justifié </label>
                                <input name="r1" class="form-control animated fadeInDown" required/> 
                                <label class="animated fadeInDown"> Intervention </label>
                                <input name="r2" class="form-control animated fadeInDown" required/> 
                                <label class="animated fadeInDown"> Projet de loi </label>
                                <input name="r3" class="form-control animated fadeInDown" required/> 
                                <label animated fadeInDown> Présence dans les séances plénières </label>
                                <input name="r4" class="form-control  animated fadeInUp" required/> 
                                <label  animated fadeInUp> Présence dans les séance des comités </label>
                                <input name="r5" class="form-control  animated fadeInUp"/> 
                                <label  animated fadeInUp> Participation au votes </label>
                                <input name="r6" class="form-control  animated fadeInUp"/> 
                                <input type="hidden" name="week" value="<?php echo $_POST['week'] ?>">
                                <br/>
                                <button type='submit' class="btn btn-default  animated fadeInUp">Valider </button>
                                </form>


                           <?php } ?> 

                           <?php 
                           if (isset($_POST['depute'])) {

                            $q = mysql_query('SELECT * FROM Depute WHERE id="'.$_POST['depute'].'" ');
                            $data = mysql_fetch_array($q);

                            
                               mysql_query('INSERT INTO depute_history VALUES("'.$data['id'].'","'.$data['nom'].'","'.$_POST['week'].'","'.$data['r1'].'","'.$data['r2'].'","'.$data['r3'].'","'.$data['r4'].'","'.$data['r5'].'","'.$data['r6'].'")') or die('1   '.mysql_error());
                               mysql_query('UPDATE Depute SET  r1="'.$_POST['r1'].'" , r2="'.$_POST['r2'].'", r3="'.$_POST['r3'].'", r4="'.$_POST['r4'].'", r5="'.$_POST['r5'].'", r6="'.$_POST['r6'].'" WHERE id="'.$_POST['depute'].'"') or die('2    '.mysql_error()) ;
                               echo 'Député Noté avec succées';
                           }

                           ?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
        <div class='pull-right'><button><a href="valider.php">Valider résultat semaine</a></button> </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
