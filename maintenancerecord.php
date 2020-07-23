<!-- Maintenance Record -->
<div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-dark-grey"><b>Maintenance Record</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">  
    <ol>
<?php
session_start();
include("dbase.php");

$query = "SELECT * FROM vehicle";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
    $driverID = $row["driverID"];
    $record = $row["record"];
    ?>
                <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <thead>
                  <table style="width:30%">
                  <tr>
                    <th>Driver ID</th>
                    <th>Record</th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($result as $res) { ?>
                  <tr>
                    <tr>
                      <td><?php echo $res['driverID']; ?></td>
                      <td><?php echo $res['record']; ?></td>
                    </tr>
                  </tr><?php } ?>
                </tbody>

              </table>
            </div>

<?php
    }
} else {
    echo "THE DRIVER IS NOT UPDATING THE MAINTENANCE RECORD YET!";

}
?>