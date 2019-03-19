<?php
    include "login.php";
?>

<head>
	<title>Edit</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Isi</h3>
                </div>
                    <div class="panel-body">
                        <form id="form" method="POST">
                            <?php
                                include "koneksi.php";
                                $id=$_GET['id'];
                                $sql=mysqli_query($db,"select * from petugas where nip='$id'");
                                $r=mysqli_fetch_array($sql);
                                while($r){
                                    echo "<div class='form-group'>
                                        <input class='form-control input-lg'  disabled type='text' name='nip' placeholder='NIP'
                                        value=$r[0] >
                                    </div>

                                    <div class='form-group'>
                                        <input class='form-control input-lg' type='text' name='nama' placeholder='Nama'
                                        value=$r[1] >
                                    </div>

                                    <div class='form-group'>
                                        <input class='form-control input-lg' type='text' name='users' placeholder='Username'
                                        value=$r[2] >
                                    </div>

                                    <div class='form-group'>
                                        <input class='form-control input-lg' type='text' name='pass' placeholder='Password'
                                        value=$r[3] >
                                    </div>

                                    <div class='form-group'>
                                        <input class='form-control input-lg' type='text' name='akses' placeholder='Akses'
                                        value=$r[4] >
                                    </div>

                                    <div align='center'>
                                        <button class='btn btn-success btn-lg' type='submit' name='e_beras'>Edit</button>
                                    </div>";  
                                    $r=false;
                                    
                                }
                                
                            ?>
                            
                            
                        </form>
</div> 
</div>  
</div> 
</div> 

<?php
    if(isset($_POST['e_beras'])){
        $sql=mysqli_query($db,"update petugas set nama='$_POST[nama]',username='$_POST[users]',pass='$_POST[pass]',akses='$_POST[akses]' where nip='$_GET[id]'");
        header("Location: menu.php?page=mimin");
    }else{
    }
?>