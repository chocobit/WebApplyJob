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
                <li>
                    <a href="test2_1.php">Test 2.1</a>
                </li>
                <li class="active">
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
            <h1>5</h1>
            <h2>5.1</h2>
            <img src="picture/ER2.png">
            <h2>5.2</h2>
            INSERT INTO สาขาย่อย VALUES ('เชียงใหม่'); <br/>
            INSERT INTO สาขาย่อย VALUES ('เชียงราย');<br/>
            INSERT INTO สาขาย่อย VALUES ('ภูเก็ต'); <br/>
            <h2>5.3</h2>
            DELETE FROM พนักงาน WHERE ตำแหน่ง = 'sale'; <br/>
            <h2>5.4</h2>
            UPDATE สาขาย่อย SET จังหวัด = 'นราธิวาส' WHERE จังหวัด = 'ปัตตานี'; <br/>
            <h2>5.5</h2>
            SELECT * FROM พนักงาน ;<br/>
            <h2>5.6</h2>
            SELECT * FROM พนักงาน
            INNER JOIN สาขาย่อย ON พนักงาน.BranchID = สาขาย่อย.BranchID
            WHERE สาขาย่อย.จังหวัด = 'ระยอง' OR สาขาย่อย.จังหวัด = 'กรุงเทพ' ; <br/>
            <h2>5.7</h2>
            SELECT * FROM พนักงาน
            INNER JOIN สาขาย่อย ON พนักงาน.BranchID = สาขาย่อย.BranchID
            WHERE สาขาย่อย.จังหวัด = 'เลย' AND พนักงาน.ตำแหน่ง = 'programmer' ; <br/>
            <h2>5.8</h2>
            SELECT * FROM พนักงาน
            INNER JOIN สาขาย่อย ON พนักงาน.BranchID = สาขาย่อย.BranchID; <br/>
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