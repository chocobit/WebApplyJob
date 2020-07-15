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
                <li class="active">
                    <a href="test1.php">Test 1</a>
                </li>
                <li>
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
            <?php 
            function linearSerach($arr, $search) {
                    for($i = 0; $i < count($arr); $i++) {
                        if($arr[$i] == $search){
                            echo "Round : ".$i."===> ".$search." = ".$arr[$i]."found !!<br/>";
                            return false;
                        }else{
                            echo "Round : ".$i."===> ".$search." != ".$arr[$i]."<br/>";
                        }
                        
                    }
                }

                function bubbleSort($arr) {
                    $size = count($arr)-1;
                    $count = 1;
                        for ($i=0; $i<$size; $i++) {
                            for ($j=0; $j<$size-$i; $j++) {
                                echo "Round : ".$count."===> ";
                                $count++;
                                $k = $j+1;
                                if ($arr[$k] < $arr[$j]) {
                                    list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
                                    //echo $arr[$j];
                                }
                                foreach($arr as $value){ 
                                    echo $value." ";    
                                }
                                echo "<br/>";
                            }
                        }
                    //return $arr;
                }

                function bubbleSortArr($arr) {
                    $size = count($arr)-1;
                        for ($i=0; $i<$size; $i++) {
                            for ($j=0; $j<$size-$i; $j++) {
                                $k = $j+1;
                                if ($arr[$k] < $arr[$j]) {
                                    list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
                                }
                        }
                    }
                    return $arr;
                }

                function binarySearch(Array $arr, $first, $last, $search ,$count){ 
                    if ($last < $first){
                        return false; 
                    }
                    $mid = floor(($last + $first)/2); 
                    if ($arr[$mid] == $search){
                        echo "Round : ".$count."===> ".$search." = ".$arr[$mid]."found !!<br/>";
                        return true;
                    } elseif ($arr[$mid] > $search) { 
                        // call binarySearch on [start, mid - 1] 
                        echo "Round : ".$count."===> ".$search." != ".$arr[$mid]." <br/>";
                        $count++;
                        return binarySearch($arr, $first, $mid - 1, $search ,$count); 
                    } else { 
                        // call binarySearch on [mid + 1, end] 
                        echo "Round : ".$count."===> ".$search." != ".$arr[$mid]." <br/>";
                        $count++;
                        return binarySearch($arr, $mid + 1, $last, $search ,$count); 
                    } 
                } 
            ?>

            <form action="" method="post" enctype="multipart/form-data">
                <label for="list">List :</label>
                <input type="text" id="list" name="list"
                    value="<?php echo (isset($_POST['list'])?$_POST['list']:"");?>"><br><br>
                <label for="search">ค้นหา</label>
                <input type="text" id="search" name="search"
                    value="<?php echo (isset($_POST['search'])?$_POST['search']:"");?>"> <input
                    class="btn btn-success btn-sm" type="submit" id="submit" name="submit" value="Submit"><br>
                <label for="type">ประเภทการค้นหา</label><br>
                <select name="type" id="type">
                    <option value="linear" <?php echo (isset($_POST['type'])=='linear'? "selected = 'true'":"");?>>
                        Linear Search</option>
                    <option value="binary" <?php echo (isset($_POST['type'])=='binary'? "selected = 'true'":"");?>>
                        Binary Search</option>
                    <option value="bubble" <?php echo (isset($_POST['type'])=='bubble'? "selected = 'true'":"");?>>
                        Bubble Sort</option>
                </select><br>
                <label for="result">ผลลัพธ์</label><br>
                <?php
                    if(isset($_POST['submit'])=="Submit"){
                        $list= $_POST['list'];
                        $search= $_POST['search'];
                        $type= $_POST['type'];
                        $str_arr = preg_split ("/\,/", $list);
                        foreach($str_arr as $result){
                            $arr[] = $result;
                        }
                        //echo $arr[2];

                        echo "List : [".$list."]<br/>";
                        echo "Search :".$search."<br/>";
                        echo "Result ::: <br/>";
                        if($type == 'linear'){
                            echo linearSerach($arr,$search);
                        } elseif ($type == 'binary'){
                            foreach(bubbleSortArr($arr) as $result){
                                echo $result." ";
                            }
                            echo "<br/>";
                            $count = count(bubbleSortArr($arr))-1;
                            if(binarySearch(bubbleSortArr($arr), 0, $count, $search ,1) == true) { 
                                echo "Finished"; 
                            } else { 
                                echo  "Doesn't Exist"; 
                            }  
                        } elseif($type =='bubble'){
                            echo bubbleSort($arr);
                        }
                        
                    }else{
                        echo "shit happen.";
                    }
                    ?>

            </form>


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

    function isAllow(event) {
        var keycode = event.keycode;

        if (event.keycode >= = 48 && event.keycode <= = 57) {
            alert(keycode);
            return true;
        } else {
            //alert('broke');
            return false;
        }
    }
    </script>
</body>

</html>