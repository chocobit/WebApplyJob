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
                <li>
                    <a href="test2_2.php">Test 2.2</a>
                </li>
                <li class="active">
                    <a href="test2_3.php" >Test 2.3</a>
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
            <h1>6</h1>
            - เริ่มต้นเขียนโปรแกรมเพราะ ชอบคอมพิวเตอร์ ชอบการเล่นเกมส์ และได้เริ่มเรียนเขียนโปรแกรม หลังจากที่ไดเริ่มเขียนแล้วรู้สึกสนุก <br/>
            และชอบความท้าทายในการเขียนโปรแกรม เพราะเราไม่รู้ว่าะเกิดบัคอะไรบ้าง และเราต้องหาวิธีในการแก้บัค <br/>
            <h1>7</h1>
            - www.google.com - search จาด error ที่แสดงขึ้นมา<br/>
            - www.stackoverflow.com <br/>
            - www.github.com <br/>
            <h1>8</h1>
            M คือ Model, V คือ View และ C คือ Controller<br/>
            Model เป็นตัวเชื่อนต่อกับฐานข้อมูล โดยจะรับคำสั่งต่างๆ มาจาก Controller <br/>
            View คือส่วนที่ติดต่อกับผู้ใช้งาน เป็นหน้าตาของโปแกรมและ แสดงค่าข้อมูลต่างๆ ที่ส่งมาจาก Controller<br/>
            Controller คือ ตัวที่รับคำสั่งมาจากView แล้วตัวController จะประมวลคำสั่งส่งไปยังModel เหมือนเป็นตัวเชื่อมต่อระหว่างView กับModel<br/>
            <h1>9</h1>
           GIT เหมือน file share server ที่มีไฟล์กลางอยู่ สามารถเข้าถึงได้หลายคนและแก้ไขไฟล์นี้ได้ และจะ sync ข้อมูลเมื่อเราสั่ง <br/>
           https://www.github.com <br/>
           https://bitbucket.org<br/>
           https://www.sourcetreeapp.com/<br/>
           <h1>10</h1>
           docker แพลตฟอร์มซอฟต์แวร์ที่บริการช่วยในการสร้างและติดตั้งโปรแกรมซอฟต์แวร์ให้ใช้จริงได้อย่างสะดวกและรวดเร็ว<br/>
           <h1>11</h1>
           composer คือตัวช่วยติดตั้ง library ให้สามารถเรียกใช้ได้<br/>
           <h1>12</h1>
           เราจะใช้ Prepose ช่วนในการเขียนไฟล์ .scss แล้ว  compile ไฟล์ .scss ให้เป็น .css
           <h1>13</h1>
           ทุกเก่ง เพราะ ทุกคนเก่งกันคนละด้าน
           <h1>13</h1>
           เคยทำ  https://github.com/chocobit
            <h1>15</h1>
            laravel เข้าไปศึกษาและได้เข้าฝึกอบรมเพื่อนำมาใช้ 
            Angular เข้าไปฝึกอบรม
            <h1>16</h1>
            ค่าาของความเร็วในการโหลดหน้าเว็บไซต์
            <h1>16</h1>
            คือการทำให้เว็บไซต์เราติดอันดับในการค้นหาจาก search engine
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