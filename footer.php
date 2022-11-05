
<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b></b> 
  </div>
  <strong><a href="https://adminlte.io"></a></strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!--   <script src="dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
      format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
      ranges   : {
        'Today'       : [moment(), moment()],
        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate  : moment()
    },
    function (start, end) {
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
 /* document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }*/
  // DropzoneJS Demo Code End
</script>

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script type="text/javascript">
  function bobot(){
    var select = document.getElementById('nilaibobot1');
    var option = select.options[select.selectedIndex];
    document.getElementById('shownamabobot1').value = option.value;
    
  }
  function Seconbobot(){
    var select = document.getElementById('nilaibobot2');
    var option = select.options[select.selectedIndex];
    document.getElementById('shownamabobot2').value = option.value;
    
  }

  function Thirdbobot(){
    var select = document.getElementById('nilaibobot3');
    var option = select.options[select.selectedIndex];
    document.getElementById('shownamabobot3').value = option.value;
    
  }

  

  function Fourthbobot(){
    var select = document.getElementById('nilaibobot4');
    var option = select.options[select.selectedIndex];
    document.getElementById('shownamabobot4').value = option.value;
  }

  function Fifthbobot(){
    var select = document.getElementById('nilaibobot5');
    var option = select.options[select.selectedIndex];
    document.getElementById('shownamabobot5').value = option.value;
  }

  function Sixthbobot(){
    var select = document.getElementById('nilaibobot6');
    var option = select.options[select.selectedIndex];
    document.getElementById('shownamabobot6').value = option.value;
  }

  function Seventhbobot(){
  /*var textToFind = 'biaya spp';
  var dd = document.getElementById('nilaibobot7');
  for (var i = 0; i < dd.options.length; i++) {
    if (dd.options[i].text === textToFind) {
        dd.selectedIndex = i;
        break;
    }
  }*/
  var select = document.getElementById('nilaibobot7');
  var option = select.options[select.selectedIndex];
  document.getElementById('shownamabobot7').value = option.value;
    //document.getElementById('shownamabobot7').value = option.text;
  }

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_nmIzcn2CE6FogvnOmbMYuUFH5sJP7ww&callback=initMap"></script>
<script type="text/javascript">
  function initMap() {
    var lokasi = {lat: -0.721223, lng: 117.034521};
    var map = new google.maps.Map(document.getElementById('mp'),{
      zoom: 15,
      center: lokasi
    });
  }

</script>
<script src="https://unpkg.com/@turf/turf@6/turf.min.js"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js"></script>
<script>
 mapboxgl.accessToken = 'pk.eyJ1Ijoia2FybWlqdWwiLCJhIjoiY2w5dHh0bXFiMDlvMTN1cGM3OHhvZHdpeSJ9.K4DhskQm1imx9QA4r_gRgw';
    //var  tandatk = [117.0831569, -0.6182153408275807];
    var lokasi = [117.02497229555543,-0.7217270898757099];

    const map = new mapboxgl.Map({
      container: 'map',
// Choose from Mapbox's core styles, or make your own style with Mapbox Studio
style: 'mapbox://styles/mapbox/streets-v11',
center: lokasi,
zoom: 10
});

$.getJSON("datatk.php", function(data) {
        
      //console.log(data.result);
      var tk = [];
      for (var i = 0; i < data.result.length; i++) {
        var  tandatk = [data.result[i]['longtitude'], data.result[i]['latitude']];

        const marker = new mapboxgl.Marker({color: "green"}).setLngLat(tandatk).addTo(map);

        //tk.push([data.result[i]['longtitude'], data.result[i]['latitude']])

      }
    

      const marker2 = new mapboxgl.Marker({color: "blue"});
      let options = { units: 'kilometers'};

      map.on('click', (e) => {
        var jarak = [];
        const long = e.lngLat.lng
        const lat = e.lngLat.lat
        var posisi = [long,lat]

        marker2.remove()
        .setLngLat(posisi)
        .addTo(map);

        for (var i = 0; i < data.result.length; i++) {
         var  tandatk = [data.result[i]['longtitude'], data.result[i]['latitude']];

         const distance = turf.distance(posisi,tandatk,options)
         jarak.push([tandatk,distance]);

       }

       console.log(jarak)

     });


});

  </script>
  <?php //session_destroy(); ?>
</body>
</html>