<!DOCTYPE html>
<?php
    include "../../connection/db_conn.php";
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admindb</title>
</head>

<style>
    @font-face{
    font-family: 'pop';
    src: url(../../../public/assets/Fonts/Poppins-Bold.ttf);
    }

    *
    {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        width: 100%;
        background-color: #E9EAF6;
        font-family: 'pop';
        height: 100vh;
    }

    .container{
        width: 100%;
        display: flex;
        height: 100%;
        flex-direction: column;
    }

    .con2{
        display: flex;
    }

     /* sidebar */

.sidebar{
background-color: white;
width: 25%;
height: 92vh;
}

.logo{
    width: 100%;
    display: flex;
    color: white;
    margin-left: 10px;
}

.pic{
width: 40px;
height: 45px;
margin-right: 5px;
}

.NU{
    line-height: 1;
    display: flex;
    align-items: center;
}

.overview{
    width: 100%;
    height: 10%;
    font-size: 15px;
    display: flex;
    align-items: start;
    justify-content:left;
    align-items: end;
    color: #AFB1C2;
    margin-left: 40px;
}

.dashboard{
    width: 100%;
    height: 80%;  
    display: flex;
    flex-direction: column;
    align-content: center;
}

.LO{
    display: flex;
    height: 10%;
    align-content: end;
    width: 100%;
}

.LO .dashPIC{
    width: 30px;
    height: 30px;
    margin-left: 40px;
    cursor: pointer;
}

.LO .txtR{
    font-size: 20px;
    color: #595959;
    margin-left: 30px;
}

.dashboard .dashB{
    width: 100%;
    height: 15%;
    display: flex;
    align-items: center;
    justify-content: left;
    margin-top: 10px;

}

.dashboard .dashPIC{
    width: 30px;
    height: 30px;
    margin-left: 40px;
    cursor: pointer;
}

.dashboard .txtR{
    font-size: 20px;
    color: #595959;
    margin-left: 30px;
}

.dashboard .txtA{
    font-size: 20px;
    color: gold;
    margin-left: 30px;
}

.dashboard .users{
    width: 100%;
    height: 15%;
    display: flex;
    align-items: center;
    justify-content: left;
    color: gold;
}


/* sidebar */

    .topbar{
        background-color: white;
        width:70%;
        height: 70px;
        display: flex;
    }


    .student{
        background-color: #34408D;
        width: 100%;
        height: 8%;
        display: flex;
        align-items: center;
        justify-content: left;
        border-bottom: 5px solid #E6C213;
    }

    .inf{
        display: flex;
        width: 50%;
        align-items: center;
    }

    .inf1{
        display: flex;
        width: 50%;
        align-items: center;
    }

    .info2{
        width: 100%;
        display: flex ;
        justify-content: end;
        align-items: center;
        margin-right: 10px;
    }

    .toplogo{
        width: 30px;
        height: 30px;
        margin: 10px;
        cursor: pointer;
    }

 
    .col{
        width:100%;
        height: 55px;
        display: flex;
        justify-content: start;
        color: #35408E;
        font-family: 'pop';
    }

    .text{
        color: #35408E;
        display: flex;
    align-items: center;
    justify-content: start;
    height: 100%;
    width: 100%;
    font-size: 30px;
    margin-left: 60px;
    margin-top: 10px;
    }

    .content{
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .box2 {
        margin-left:50% ;
    }

    .mainbar{
        justify-content: start;
        padding: 30px;
        color: #35408E;
    }

    .students{
        width: 87%;
    height: 80%;
    background-color: white;
    color: #34408D;
    font-family: 'pop';
    margin-left: 5%;
    margin-top: 2%;
    }

    .txt{
        display: flex;
        justify-content: center;
        font-size: 25px;
    }
    
    #chart-container {
      width: 800px;
      height: 400px;
      margin: 20px auto; 
      border: 1px solid #ddd; 
      border-radius: 5px; 
      background-color: #f5f5f5; 
      display: flex;
      flex-grow: 1;
      align-items: center;
    }
  
    #myChart {
      width: 100%;
      height: auto;
    }
  
    /* Axes styling */
    .chartjs-axis {
      color: #333; 
    }
  
    .chartjs-tick-line {
      stroke: #ddd; 
    }
  
    /* Title styling */
    .chartjs-title {
      font-size: 18px; 
      color: #333; 
    }
  
    /* Legend styling */
    .chartjs-legend {
      font-size: 14px; 
    }
  
    /* Data point styling (example) */
    .chartjs-point {
      stroke-width: 2px; 
    }

</style>

<body>
    <div class="container">

        <div class="student">
            <div class="inf1">
            <div class="logo">
                <img src="../../../public/assets/images/NU_shield.svg.png" class="pic">
            <label class="NU">NATIONAL UNIVERSITY</label> 
            </div> 
        </div>
            <div class="inf">

            
            <div class="info2">
                <img src="../../../public/assets/images/bell.png" class="toplogo">
                <img src="../../../public/assets/images/settings.png" class="toplogo">
            </div>
        </div>
        </div>

        <div class="con2">

        <div class="sidebar">

            <div class="overview">OVERVIEW</div>
            
            <div class="dashboard">

        <line onclick="navigateTo('dashboardAdmin.php')" class="dashB">
            <img src="../../../public/assets/images/dashboard.png" class="dashPIC">
            <label class="txtR"> DASHBOARD</label>
        </line>
        
        <line onclick="navigateTo('reportsAdmin.php')" class="dashB">
            <img src="../../../public/assets/images/report.png" class="dashPIC">
            <label class="txtR"> REPORTS</label>
        </line>
        
        <line onclick="navigateTo('appealAdmin.php')" class="dashB">
            <a href="appealAdmin.php"><img src="../../../public/assets/images/paper.png" class="dashPIC"></a>
            <label class="txtR"> REPLY TO APPEAL</label>
        </line>
        
        <line onclick="navigateTo('usersAdmin.php')" class="dashB">
            <a href="usersAdmin.php"><img src="../../../public/assets/images/users.png" class="dashPIC"></a>
            <label class="txtR"> VIEW USER</label>
        </line>

        <line onclick="navigateTo('usersAdmin.php')" class="dashB">
            <a href="usersAdmin.php"><img src="../../../public/assets/images/add-user-3-xxl.png" class="dashPIC"></a>
            <label class="txtR"> ADD ADMIN</label>
        </line>

    </div>

        <div class="LO">
                <a id="logout-link">
                    <img src="../../../public/assets/images/logout.png" class="dashPIC" alt="Logout">
                </a>
                <label class="txtR"><?php
                    echo $_SESSION["name"];
                ?> LOGOUT</label>
        </div>

        </div>
            

        <div class="content">
            <div class="col">
                <div class="text">
                    <label class="hello"> HELLO, 
                        <?php
                        // Check if the session variable 'id' is set
                        echo $_SESSION["name"];
                        ?>
                    </label>
                </div>
            </div>

            <div class="students">
                <div id="chart-container">
                    <canvas id="myChart"></canvas>
                  </div>
            
                  <div class="txt">
                    LINE GRAPH OF REPORTS AND VIOLATION IN NU DASMARIÑAS
                  </div>
            </div> 
           
        </div>   
    </div>
    </div>
</body>

<script>
    function navigateTo(pagename){
        window.location.href = pagename;
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart').getContext('2d');

  const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

  const reportData = [20, 39, 57, 23, 43, 45, 16, 32, 18, 28, 3, 61];
  const violationData = [3, 7, 6, 10, 13, 24, 15, 19, 30, 70, 25, 31];

  const data = {
    labels: labels,
    datasets: [{
      label: 'Reports',
      data: reportData,
      borderColor: 'blue',
      fill: false
    }, {
      label: 'Violations',
      data: violationData,
      borderColor: 'red',
      fill: false
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {
      responsive: true,
      maintainAspectRatio: false,
      title: {
        display: true,
        text: 'Monthly Reports and Violations'
      }
    }
  };

  const myChart = new Chart(ctx, config);
</script>

<script>   
    document.getElementById('logout-link').addEventListener('click', function(event) {                  
        event.preventDefault();                           
        var confirmation = confirm('Are you sure you want to log out?');                         
        if (confirmation) {
            window.location.href = "../../config/logout.php";
        }
    });
</script>

</html>