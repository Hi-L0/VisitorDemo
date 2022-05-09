<?php 
require_once("mysession.php");
    $message=isset($_GET['message'])?$_GET['message']:"Error";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ErrorAlert</title>
    <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        body{
			background: #DCDDDF url(https://cssdeck.com/uploads/media/items/7/7AF2Qzt.png);
			overflow: auto;
		}
		.navbar 
		{ 
            background-color: #484848; 
        }
		.navbar a:hover{
			width: 140px;
			/* text-decoration: underline; */
			background-color: #485050;
			border-radius: 5px;
		}
        .sidebar a:hover{
            background-color: #485050;
            padding-left: 30px;
            
        }
		.navbar-brand{
			display: flex;
			justify-content: center;
			/*padding: 10px;*/
			width: 70px;
			border-radius: 5px;
		}
		.sidebar{
			position: fixed;
			top: 0px;
			left: 0;
			bottom: 0;
			z-index: 100;
            /* margin-top: 56px; */
			padding: 70px 0px 0 10px;
			border-right: 1px solid #d3d3d3;
		}
        .left-sidebar{
            position: sticky;
            top: 0;
            height: calc(100vh - 70px);
        }
		#logo{
            width: 35px;
            height: 35px;
        }

        .margetop{
            margin-top: 100px;
        }
    </style>


    </head>
    <body>
    <header>
	<!--navbar--->
		<nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top flex-md-nowrap p-2 shadow shadow">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="navbar-brand text-white"><img src="../image/dfplogo.jpg" id="logo" alt="dfp logo">&nbsp; DFP</a>	
				</div>
				<ul class="nav navbar-nav">
					<li class="nav-item active pl-4 text-white disabled"><a href="#" class="nav-link text-white disabled"><i class="bi bi-person-circle"></i>&nbsp;Admin</a></li>
				</ul>
			</div>
		</nav>
	</header>
    <div class="container">
        <div class="card  margetop">
            <h6 class="card-header bg-danger text-white">Error</h6>
            <div class="card-body ">
                <h3><?php echo $message?></h3>
                <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>"> << Retour </a>  
            </div>
        </div>
    </body>
</html>