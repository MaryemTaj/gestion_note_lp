<?php
session_start()
?>

<?php
$dsn = 'mysql:host=localhost;dbname=gestion_notes';
$username = 'root';
$password = '';

try {
$connexion = new PDO($dsn, $username, $password);
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
} 
$id_prof = $_SESSION['id_prof'];

$cher=$_POST['cher'];
 //$id_etud = $_SESSION['id_etud'];

$sql="SELECT etudiant.id_etud,concat(etudiant.nom_etud ,' ' ,etudiant.prenom_etud) as Nom_Prenom,etudiant.cne as cne,etudiant.cin as cin, examen.date as date ,note.note_exam as note ,enseigne.id_elem,
concat(professeur.nom_prof ,' ' ,professeur.prenom_prof) as prof,
element.nom_elem as element,module.nom_mod as module, filiere.code_fil as filiere, session.id_session as session,
semestre.id_semestre as S ,examen.id_exam as id_exam 
from note 
inner JOIN examen on note.id_exam=examen.id_exam 
INNER join session on session.id_session=examen.id_session 
inner join etudiant on etudiant.id_etud=note.id_etud 
inner join enseigne on enseigne.id_elem=examen.id_elem 
INNER join professeur on professeur.id_prof=enseigne.id_prof 
inner join element on element.id_elem=enseigne.id_elem 
INNER join module on element.id_mod=module.id_mod 
INNER join semestre on semestre.id_semestre=module.id_semestre 
inner JOIN module_filiere on module_filiere.id_mod=module.id_mod 
INNER JOIN filiere on filiere.id_fil=module_filiere.id_fil 
WHERE 
professeur.id_prof ='$id_prof' and element.nom_elem like   '%$cher%' or
professeur.id_prof='$id_prof' and etudiant.cne like '%$cher%'or
professeur.id_prof='$id_prof' and etudiant.id_etud like '%$cher%'or
professeur.id_prof='$id_prof' and etudiant.nom_etud like'%$cher%'or
professeur.id_prof='$id_prof' and  etudiant.nom_etud like '%$cher%'or
professeur.id_prof='$id_prof' and module.nom_mod like '%$cher%' or 
professeur.id_prof='$id_prof' and etudiant.cin like '%$cher%' or
professeur.id_prof='$id_prof' and etudiant.cne like '%$cher%'or
professeur.id_prof='$id_prof' and  filiere.id_fil like '%$cher%' or
professeur.id_prof='$id_prof' and  examen.id_exam like '%$cher%' or
professeur.id_prof='$id_prof' and  examen.date like '%$cher%'
 ";


$statement = $connexion->prepare($sql);
                     
                        $statement->execute() or die(print_r($stmt->errorInfo(), true));
                        $result = $statement->fetchAll(PDO::FETCH_OBJ)  ;
                      

?>






















<!doctype html>
<html lang="en">

<head>
    <title>Interface Etudiant</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
    <link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="assets/css/demo.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">










<style type="text/css">



.table-responsive {
    margin: 100px ;
    margin-right: 20px;
  margin-left: 20px;


}

table.table-striped thead{
    background-color:#fff ;
    
}


.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-width: 100%;
}
.table-title h2 {
    margin: 8px 0 0;
    font-size: 22px;
}
.search-box {
    position: relative;        
    float: right;
}
.search-box input {
    height: 34px;
    border-radius: 20px;
    padding-left: 35px;
    border-color: #ddd;
    box-shadow: none;
}
.search-box input:focus {
    border-color: #3FBAE4;
}
.search-box i {
    color: #a0a5b1;
    position: absolute;
    font-size: 19px;
    top: 8px;
    left: 10px;
}
table.table tr th, table.table tr td {
    border-color: #52ADF9;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table td:last-child {
    width: 130px;
}
table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0 5px;
}
table.table td a.view {
    color: #03A9F4;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}    
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 95%;
    width: 30px;
    height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 30px !important;
    text-align: center;
    padding: 0;
}
.pagination li a:hover {
    color: #666;
}   
.pagination li.active a {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 6px;
    font-size: 95%;
}    

.btn-circle {
  width: 45px;
  height: 45px;
  line-height: 45px;
  text-align: center;
  padding: 0;
  border-radius: 50%;
}

.btn-circle i {
  position: relative;
  top: -1px;
}

.btn-circle-sm {
  width: 35px;
  height: 35px;
  line-height: 35px;
  font-size: 0.9rem;
}

.btn-circle-lg {
  width: 55px;
  height: 55px;
  line-height: 55px;
  font-size: 1.1rem;
}

.btn-circle-xl {
  width: 70px;
  height: 70px;
  line-height: 70px;
  font-size: 1.3rem;
}

</style>








</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="index.html"><!--<img src="" alt="Klorofil Logo" class="img-responsive logo">--></a></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                </div>
                <form class="navbar-form navbar-left" action="cherche_prof.php" method="post">
                    
                   <input type="text" name="cher" class="form-control" placeholder="Search ">
                             <button type="submit" name="save" class="btn btn-primary">Search</button>
                </form>
                <div class="navbar-btn navbar-btn-right">
                    <a class="btn btn-success update-pro" href="deconnecter.php" title="Upgrade to Pro" target="_blank"><i 
                        class="fa fa-power-off"></i> <span>Deconnexion</span></a>
                </div>
                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle" aria-hidden="true"></i> <span>
                                <?php echo '<strong>'.$_SESSION['prenom_prof'].' '.$_SESSION['nom_prof'].'</strong>';?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                                
                                <li><a href="deconnecter.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="etudiant.html" class="active"><i class="lnr lnr-home"></i> <span>ACCUEIL</span></a></li>
                        
                        <li>
                            <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>NOTES ETUDIANTS </span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPages" class="collapse ">
                                <ul class="nav">
                                    <li><a href="#subPag1" data-toggle="collapse" class="collapsed"><span>SEMESTRE 5</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>

                                    <div id="subPag1" class="collapse ">
                                <ul class="nav">

                                            
                                       </ul>
                                    </li>
                                    <li><a href="#subPag2" data-toggle="collapse" class="collapsed"><span>SEMESTRE 6</span> <i class="icon-submenu lnr lnr-chevron-left"></i>
                                    </a>

                                      <div id="subPag2" class="collapse ">   
                                <ul class="nav">

                                             
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
              <div class="main">




            <!-- MAIN CONTENT -->
<div class="main-content"><div class="container-xl">
        <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2><b>resultas de recherchre</b></h2>

                    
                     </div>
                    <div class="col-sm-4">
                        
                           
                        
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr><?php

if ($result) {?>
                        <th>ID EXAM</th>
                        <th>DATE D'EXAMEN</th>
                        <th>ID ETUDIANT</th>
                        <th>CIN</th>
                        <th>CNE </th>
                        <th>NOM ET PRENOM</th>
                        <th>MODULE</th>
                        <th>ELEMENT</th>
                        <th>NOTE ELEMENT</th>
                        <th>SEMESTRE</th>
                        <th>N/R</th>
                        
                         <th>LP</th>
                         
                         <th>ACTION</th>
                        
 

</tr>
 

                    
<?php
  foreach ($result as $row) {
echo'<td >' .  $row->id_exam. '</td>';
echo'<td >' .  $row->date. '</td>';

echo'<td >' .  $row->id_etud. '</td>';



 echo'<td >' .  $row->cin. '</td>';

 echo'<td>' .  $row->cne. '</td>';

echo'<td>' . $row->Nom_Prenom . '</td>';

echo'<td>' . $row->module. '</td>';
echo'<td>' . $row->element. '</td>';
echo'<td>' . $row->note. '</td>';
echo'<td>' . $row->S. '</td>';
echo'<td>' . $row->session. '</td>';
echo'<td>' . $row->filiere. '</td>';

echo'<td>                    
                            <div class="col-lg-7 mb-4">
        <div class="bg-white p-4 rounded shadow-sm h-100">
                            <button class="btn btn-success btn-circle m-1"><i class="fa fa-pencil-square-o"></i></button>
                            </div></div>
                            <button class="btn btn-danger btn-circle m-1"><i class="fa fa-trash-o" 
                            OnClick="confirm("Voulez-vous vraiment supprimer ?");"></i></button>
                        </td>';
echo'</tr>';
 } }

                        else {
                          echo '<div class = "container ">';
                            echo '<BR>';
                             echo ' <strong>';

                            echo ' <center>';

                            echo "Aucun resultat ";
                            echo '</center>';
                            echo ' </strong>';
                            echo '<BR>';
                            echo '</div>';
                        }
                                             
                       
                        ?>    







                    
                </tbody>
            </table>
            
    </div>


    
</div>   
            </div>
            <!-- END MAIN CONTENT -->
        </div>
        <!-- END MAIN -->
        <div class="clearfix"></div>
        <footer>
            
        </footer>
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/vendor/chartist/js/chartist.min.js"></script>
    <script src="assets/scripts/klorofil-common.js"></script>
    <script>
    $(function() {
        var data, options;

        // headline charts
        data = {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            series: [
                [23, 29, 24, 40, 25, 24, 35],
                [14, 25, 18, 34, 29, 38, 44],
            ]
        };

        options = {
            height: 300,
            showArea: true,
            showLine: false,
            showPoint: false,
            fullWidth: true,
            axisX: {
                showGrid: false
            },
            lineSmooth: false,
        };

        new Chartist.Line('#headline-chart', data, options);


        // visits trend charts
        data = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            series: [{
                name: 'series-real',
                data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
            }, {
                name: 'series-projection',
                data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
            }]
        };

        options = {
            fullWidth: true,
            lineSmooth: false,
            height: "270px",
            low: 0,
            high: 'auto',
            series: {
                'series-projection': {
                    showArea: true,
                    showPoint: false,
                    showLine: false
                },
            },
            axisX: {
                showGrid: false,

            },
            axisY: {
                showGrid: false,
                onlyInteger: true,
                offset: 0,
            },
            chartPadding: {
                left: 20,
                right: 20
            }
        };

        new Chartist.Line('#visits-trends-chart', data, options);


        // visits chart
        data = {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            series: [
                [6384, 6342, 5437, 2764, 3958, 5068, 7654]
            ]
        };

        options = {
            height: 300,
            axisX: {
                showGrid: false
            },
        };

        new Chartist.Bar('#visits-chart', data, options);


        // real-time pie chart
        var sysLoad = $('#system-load').easyPieChart({
            size: 130,
            barColor: function(percent) {
                return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
            },
            trackColor: 'rgba(245, 245, 245, 0.8)',
            scaleColor: false,
            lineWidth: 5,
            lineCap: "square",
            animate: 800
        });

        var updateInterval = 3000; // in milliseconds

        setInterval(function() {
            var randomVal;
            randomVal = getRandomInt(0, 100);

            sysLoad.data('easyPieChart').update(randomVal);
            sysLoad.find('.percent').text(randomVal);
        }, updateInterval);

        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

    });
    </script>
</body>

</html>
