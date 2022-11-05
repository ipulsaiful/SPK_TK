<?php include('header.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="container">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Lokasi Taman Kanak-Kanak</h3>
          </div>
          <div class="card-body">
            <div id="map" style="width:100%;height:380px;">
              <div id="distance" class="distance-container"></div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="container">

        <div class="row">
          <div class="col">

          </div> 
          <div class="col-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Taman Kanak-Kanak</h3>
              </div>
              <form action="PilihTK.php" method="POST">
                <div class="card-body">
                  <?php
                  include_once("LihatKriteria.php");
                  ?> 
                  <div class="form-group">
                    <label >Bobot 1 :</label>
                    <div class="row">
                     <div class="col-md-11"> 
                      <select  id="nilaibobot1" name='bobot1'class='form-control select2' onChange="bobot()" style='width: 100%;' required>
                        <option disabled selected>pilih kriteria</option>
                        <?php
                        $namakriteria = $_POST['bobot_1'];
                        $nilaikriteria = (1+(1/2)+(1/3)+(1/4)+(1/5)+(1/6)+(1/7))/7;
                        $k =0;
                        if ($namakriteria!=null) {?>
                          <option value="<?php echo $namakriteria ?>" selected><?php echo $namakriteria ?></option>
                          <?php
                          if (($k = array_search($namakriteria, $datkrit))!==false) {
                            array_splice($datkrit, $k,1);
                            if ($namakriteria=='biaya spp'||$namakriteria=='biaya masuk') {
                              $nilaikriteria = (-$nilaikriteria);
                              for ($as=0; $as < count($datkrit) ; $as++) { 
                                $datkrit[$as] = $datkrit[$as];
                              }
                            }


                          }
                        }else{
                          for ($m=0; $m < count($datkrit) ; $m++) {?> 
                           <option value="<?php echo $datkrit[$m] ?>"><?php echo $datkrit[$m]?></option>
                         <?php }
                       }


                       ?>
                     </select>
                   </div>
                   <div class="col-md-1"> 
                     <button type="submit" class="btn btn-success">cek</button>
                   </div>
                 </div>
                 <input type="hidden" id="shownamabobot1" name="bobot_1" class="form-control" value="<?php echo $namakriteria ?>">
               </div>

               <!-- ==================================BOBOT 2===================================== -->
               <div class="form-group">
                <label >Bobot 2 :</label>
                <div class="row">
                  <div class="col col-md-11">
                    <select id="nilaibobot2"name='bobot2'class='form-control select2' onChange="Seconbobot()"style='width: 100%;' required>
                      <option disabled selected>pilih kriteria</option>
                      <?php
                      $namakriteria2 = $_POST['bobot_2'];
                      $nilaikriteria2 =(0+(1/2)+(1/3)+(1/4)+(1/5)+(1/6)+(1/7))/7;
                      if ($namakriteria2!=null) {?>
                        <option value="<?php echo $namakriteria2 ?>" selected><?php echo $namakriteria2 ?></option>
                        <?php 
                        if (($l = array_search($namakriteria2, $datkrit))!==false) {
                          array_splice($datkrit, $l,1);
                          if ($namakriteria2=='biaya spp'||$namakriteria2=='biaya masuk') {
                            $nilaikriteria2 = (-$nilaikriteria2);
                            for ($cv=0; $cv < count($datkrit) ; $cv++) { 
                              $datkrit[$cv] = $datkrit[$cv];
                            }
                          }

                        }

                      }else{
                        for ($bn=0; $bn < count($datkrit) ; $bn++) {?> 
                         <option value="<?php echo $datkrit[$bn] ?>"><?php echo $datkrit[$bn]?></option>
                         <?php
                       }
                     }


                     ?>
                   </select>
                 </div>
                 <div class="col col-md-1">
                  <button type="submit" class="btn btn-success">cek</button>
                </div>
              </div>
              <input type="hidden" id="shownamabobot2" name="bobot_2" class="form-control" value="<?php echo $namakriteria2 ?>"> 
              <?php
              ?>
            </div>



            <!-- ==================================BOBOT 3===================================== -->
            <div class="form-group">
              <label >Bobot 3 :</label>
              <div class="row">
                <div class="col col-md-11">
                  <select id="nilaibobot3"name='bobot3'class='form-control select2' onChange="Thirdbobot()"style='width: 100%;' required>
                    <option disabled selected>pilih kriteria</option>
                    <?php
                    $namakriteria3 = $_POST['bobot_3'];
                    $nilaikriteria3 =(0+0+(1/3)+(1/4)+(1/5)+(1/6)+(1/7))/7;
                    if ($namakriteria3!=null) {?>
                      <option value="<?php echo $namakriteria3 ?>" selected><?php echo $namakriteria3 ?></option>
                      <?php 

                      if (($ty = array_search($namakriteria3, $datkrit))!==false) {
                        array_splice($datkrit, $ty,1);
                        if ($namakriteria3=='biaya spp'||$namakriteria3=='biaya masuk') {
                          $nilaikriteria3 = (-$nilaikriteria3);
                          for ($cv=0; $cv < count($datkrit) ; $cv++) { 
                            $datkrit[$cv] = $datkrit[$cv];
                          }
                        }

                      }
                    }else{
                      for ($mn=0; $mn < count($datkrit) ; $mn++) {?> 
                       <option value="<?php echo $datkrit[$mn] ?>"><?php echo $datkrit[$mn]?></option>
                       <?php
                     }

                   }

                   ?>
                 </select>
               </div>
               <div class="col col-md-1">
                <button type="submit" class="btn btn-success">cek</button>
              </div>
            </div>
            <input type="hidden" id="shownamabobot3" name="bobot_3" class="form-control" value="<?php echo $namakriteria3 ?>"> 
          </div>


          <!-- ==================================BOBOT 4===================================== -->
          <div class="form-group">
            <label >Bobot 4 :</label>
            <div class="row">
              <div class="col col-md-11">
                <select id="nilaibobot4"name='bobot4'class='form-control select2' onChange="Fourthbobot() "style='width: 100%;' required>
                  <option disabled selected>pilih kriteria</option>
                  <?php
                  $namakriteria4 = $_POST['bobot_4'];
                  $nilaikriteria4 =(0+0+0+(1/4)+(1/5)+(1/6)+(1/7))/7;
                  if ($namakriteria4!=null) {?>
                    <option value="<?php echo $namakriteria4 ?>" selected><?php echo $namakriteria4 ?></option>
                    <?php 

                    if (($ty = array_search($namakriteria4, $datkrit))!==false) {
                      array_splice($datkrit, $ty,1);
                      if ($namakriteria4=='biaya spp'||$namakriteria4=='biaya masuk') {
                        $nilaikriteria4 = (-$nilaikriteria4);
                        for ($cv=0; $cv < count($datkrit) ; $cv++) { 
                          $datkrit[$cv] = $datkrit[$cv];
                        }
                      }

                    }
                  }else{
                    for ($mn=0; $mn < count($datkrit) ; $mn++) {?> 
                     <option value="<?php echo $datkrit[$mn] ?>"><?php echo $datkrit[$mn]?></option>
                     <?php
                   }

                 }

                 ?>
               </select>
             </div>
             <div class="col col-md-1">
              <button type="submit" class="btn btn-success">cek</button>
            </div>
          </div>
          <input type="hidden" id="shownamabobot4" name="bobot_4" class="form-control" value="<?php echo $namakriteria4 ?>"> 
        </div>


        <!-- ==================================BOBOT 5===================================== -->
        <div class="form-group">
          <label >Bobot 5 :</label>
          <div class="row">
            <div class="col col-md-11">
              <select id="nilaibobot5"name='bobot5'class='form-control select2' onChange="Fifthbobot() "style='width: 100%;' required>
                <option disabled selected>pilih kriteria</option>
                <?php
                $namakriteria5 = $_POST['bobot_5'];
                $nilaikriteria5 =(0+0+0+0+(1/5)+(1/6)+(1/7))/7;
                if ($namakriteria5!=null) {?>
                  <option value="<?php echo $namakriteria5 ?>" selected><?php echo $namakriteria5 ?></option>
                  <?php 

                  if (($ty = array_search($namakriteria5, $datkrit))!==false) {
                    array_splice($datkrit, $ty,1);
                    if ($namakriteria5=='biaya spp'||$namakriteria5=='biaya masuk') {
                      $nilaikriteria5 = (-$nilaikriteria5);
                      for ($cv=0; $cv < count($datkrit) ; $cv++) { 
                        $datkrit[$cv] = $datkrit[$cv];
                      }
                    }

                  }
                }else{
                  for ($mn=0; $mn < count($datkrit) ; $mn++) {?> 
                   <option value="<?php echo $datkrit[$mn] ?>"><?php echo $datkrit[$mn]?></option>
                   <?php
                 }

               }

               ?>
             </select>
           </div>
           <div class="col col-md-1">
            <button type="submit" class="btn btn-success">cek</button>
          </div>
        </div>
        <input type="hidden" id="shownamabobot5" name="bobot_5" class="form-control" value="<?php echo $namakriteria5 ?>"> 
      </div>


      <!-- ==================================BOBOT 6===================================== -->
      <div class="form-group">
        <label >Bobot 6 :</label>
        <div class="row">
          <div class="col col-md-11">
            <select id="nilaibobot6"name='bobot6'class='form-control select2' onChange="Sixthbobot() "style='width: 100%;' required>
              <option disabled selected>pilih kriteria</option>
              <?php
              $namakriteria6 = $_POST['bobot_6'];
              $nilaikriteria6 =(0+0+0+0+0+(1/6)+(1/7))/7;
              if ($namakriteria6!=null) {?>
                <option value="<?php echo $namakriteria6 ?>" selected><?php echo $namakriteria6 ?></option>
                <?php 

                if (($ty = array_search($namakriteria6, $datkrit))!==false) {
                  array_splice($datkrit, $ty,1);
                  if ($namakriteria6=='biaya spp'||$namakriteria6=='biaya masuk') {
                    $nilaikriteria6 = (-$nilaikriteria6);
                    for ($cv=0; $cv < count($datkrit) ; $cv++) { 
                      $datkrit[$cv] = $datkrit[$cv];
                    }
                  }

                }
              }else{
                for ($mn=0; $mn < count($datkrit) ; $mn++) {?> 
                 <option value="<?php echo $datkrit[$mn] ?>"><?php echo $datkrit[$mn]?></option>
                 <?php
               }

             }

             ?>
           </select>
         </div>
         <div class="col col-md-1">
          <button type="submit" class="btn btn-success">cek</button>
        </div>
      </div>
      <input type="hidden" id="shownamabobot6" name="bobot_6" class="form-control" value="<?php echo $namakriteria6 ?>"> 
    </div>


    <!-- ==================================BOBOT 7===================================== -->
    <div class="form-group">
      <label >Bobot 7 :</label>
      <div class="row">
        <div class="col col-md-11">
          <select id="nilaibobot7"name='bobot7'class='form-control select2' onChange="Seventhbobot() "style='width: 100%;' required>
            <option disabled selected>pilih kriteria</option>
            <?php
            $namakriteria7 = $_POST['bobot_7'];
            $nilaikriteria7 =(0+0+0+0+0+0+(1/7))/7;
            if ($namakriteria7!=null) {?>
              <option value="<?php echo $namakriteria7 ?>" selected><?php echo $namakriteria7 ?></option>
              <?php 

              if (($ty = array_search($namakriteria7, $datkrit))!==false) {
                array_splice($datkrit, $ty,1);
                if ($namakriteria7=='biaya spp'||$namakriteria7=='biaya masuk') {
                  $nilaikriteria7 = (-$nilaikriteria7);
                  for ($cv=0; $cv < count($datkrit) ; $cv++) { 
                    $datkrit[$cv] = $datkrit[$cv];
                  }
                }

              }
            }else{
              for ($mn=0; $mn < count($datkrit) ; $mn++) {?> 
               <option value="<?php echo $datkrit[$mn] ?>"><?php echo $datkrit[$mn]?></option>
               <?php
             }

           }

           ?>
         </select>
       </div>
       <div class="col col-md-1">
        <button type="submit" class="btn btn-success">cek</button>
      </div>
    </div>
    <input type="hidden" id="shownamabobot7" name="bobot_7" class="form-control" value="<?php echo $namakriteria7 ?>"> 
  </div>

</div>
</form>
<!-- ============================================================================= -->
<form action="PilihTK.php" method="POST">
  <div class="card-body">
    <div class="form-group">

      <div class="row">
        <div class="col col-md-5">
         <input type="hidden" id="shownamabobot1" name="bobot_1" class="form-control" value="<?php echo $namakriteria ?>">
       </div>
     </div>


     <div class="row">
       <div class="col">
         <input type="hidden" id="shownamabobot2" name="bobot_2" class="form-control" value="<?php echo $namakriteria2 ?>">
       </div>
       
     </div>


     <div class="row">
       <div class="col">
         <input type="hidden" id="shownamabobot3" name="bobot_3" class="form-control" value="<?php echo $namakriteria3 ?>">
       </div>
       
     </div>

     <div class="row">
       <div class="col">
         <input type="hidden" id="shownamabobot4" name="bobot_4" class="form-control" value="<?php echo $namakriteria4 ?>">
       </div>

     </div>

     <div class="row">
       <div class="col">
         <input type="hidden" id="shownamabobot5" name="bobot_5" class="form-control" value="<?php echo $namakriteria5 ?>">
       </div>
       
     </div>

     <div class="row">
       <div class="col">
         <input type="hidden" id="shownamabobot6" name="bobot_6" class="form-control" value="<?php echo $namakriteria6 ?>">
       </div>

     </div>


     <div class="row">
       <div class="col">
         <input type="hidden" id="shownamabobot7" name="bobot_7" class="form-control" value="<?php echo $namakriteria7 ?>">
       </div>
     </div>

   </div>
 </div>
 <div class="card-footer">
  <input type="submit" name="submit" class="btn btn-primary">
</div>
</form>
</div>


</div>

<div class="col">

</div>
</div>
</div>
<!-- /.card -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Informasi Taman Kanak-Kanak</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
        <tr class="bg-gray-dark color-palette">
          <th>No </th>
          <th>Nama TK</th>
          <th>Nilai Vi</th>


        </tr>
      </thead>
      <tbody>

        <?php
        
        include("metode.php");
        if (!empty($_SESSION['rank'])) {
         $dataVi = $_SESSION['rank'];
         for ($z=0; $z <count($dataVi) ; $z++) { ?> 
           <tr>
            <td><?php echo $z+1?></td>
            <td><?php echo $dataVi[$z][1]?></td>
            <td><?php echo $dataVi[$z][2]?></td>
          </tr>  
          <?php 

        } 
      }


      ?>

    </tbody>
    <tfoot>

    </tfoot>
  </table>







</div>
<!-- /.card-body -->
</div>
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include('footer.php') ?>


