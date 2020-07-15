<!DOCTYPE html>
<html>
<?php include 'header.php';?>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Menu</h3>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="test1.php">Test 1</a>
                </li>
                <li class="active">
                    <a href="test2_1.php">Test 2.1</a>
                </li>
                <li>
                    <a href="test2_2.php">Test 2.2</a>
                </li>
                <li>
                    <a href="test2_3.php">Test 2.3</a>
                </li>
            </ul>
        </nav>
        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>
            <h1>1</h1>
            <p>1.1</p>
            <?php
                $n=5;
					for($i=0;$i<$n;$i++){  
						// echo "&nbsp;".$i; 
						for($j=$n;$j>$i;$j--){ 
								echo "&nbsp;&nbsp;&nbsp;"; 
						}  
						for($k=0;$k<=$i;$k++){ 
							echo "O"; 
					    }  
						echo "<br>";  
                    }  ?>
            <p>1.2</p>
            <?php
						for($i=0;$i<$n;$i++){  
							// echo "&nbsp;".$i; 
							for($j=$n;$j>$i;$j--){ 
									echo "&nbsp;&nbsp;&nbsp;"; 
							}  
							for($k=0;$k<1;$k++){
								for($h=0;$h<($i*2)+1;$h++) 
								{
									echo "O";
								}								 
							}  
							echo "<br>";  
                        } ?>
            <br/>
            <h1>2</h1>
            <p>2.1</p>
            <?php 
            $salary = 10000;
            if($salary < 10000){
                $salary =  $salary+200;
            } elseif($salary < 11000){
                $salary += 200 ; 
            } elseif($salary < 12000){
                $salary += 300 ; 
            }
            echo  $salary; 
            ?>
            <p>2.2</p>
            <p>2.2.1</p>
            <?php 
            $bath = 100;
            echo  ($bath==300?"300":"200"); 
            ?>
            <p>2.2.1</p>
            <?php $score=9; $age=10 ;
            echo "Your score is : ".$score>10?($age>10?"Average":"Exceptional"):($age>10?"Horribal":"Average"); ?>
            <h1>3</h1>
            <p>3.1</p>
            <?php 
            $data = array(
                10000 => 15000,
                15000 => 20000,
                'salary' => 30000
            );
            foreach ($data as $salary){
                if($salary < 10000){
                    $salary =  $salary+200;
                } elseif($salary < 11000){
                    $salary += 200 ; 
                } elseif($salary < 12000){
                    $salary += 300 ; 
                }
                echo  $salary."<br/>"; 
            }
            ?>
            <p>3.2</p>
            <?php 
            $mark = array(
                "mohammad"=>array(
                    "physics" => 35,
                    "maths" => 30,
                    "salary" => 39
                ),
                "qadir"=>array(
                    "physics" => 30,
                    "maths" => 32,
                    "salary" => 29
                ),
                "zara"=>array(
                    "physics" => 31,
                    "maths" => 22,
                    "salary" => 39
                )
            );
             
            ?>

            <p>3.2.1</p>
            <?php 
            echo $mark["mohammad"]["physics"]."<br/>";

           ?>
            <p>3.2.2</p>
            <?php 
            foreach ($mark as $result)
            {
                //echo " ".$x." ";
            
                foreach($result as $key => $value)
                {
                    echo $value."&nbsp;&nbsp;&nbsp;" ;
            
                }
                //echo "</p>";
            }
            ?>
            <style>
                .box {
                margin-right: 10px;
                height: 200px;
                width: 250px;
                border: 1px solid black; 
                }

             </style>
            <p>4</p>
            <div>
            <div class="row">
                <div class="box"></div><div class="box"></div><div class="box"></div>
            </div>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });
    </script>
</body>

</html>