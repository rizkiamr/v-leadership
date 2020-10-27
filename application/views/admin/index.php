

<link rel="stylesheet" href="<?= base_url('assets/css/admin/index.css');?>">
    </head>
        <body>

<!-- admin sidebar -->
        <nav class="nav m-auto    text-body" style="height: 70px; width:100% !important; background:  #fff; position:relative;">
            <!-- <h3 class="nav-link mx-auto" style="line-height: 50px;">SMEA_PILKETOS</h3> -->
          
                <a href="<?= base_url('admin/logout'); ?>" class="mr-5 text-body" style="text-decoration:none;  line-height: 70px; right:10px; position:absolute;"> <i class="fas fa-sign-out-alt"></i> logout </a>
        

        </nav>
          
            <div class="row" >
                <div class="col-md-2">
            
                    <div class="wrapper">

                        <nav id="sidebar" style="  background: #fff;">

                            <div class="side-brand mt-3">
                                <img src="<?= base_url() ?>assets/resources/home/icon-app.png" class="ml-4 mr-3" width="25px" height="25px" style="border-radius:100p; float:left" alt="" srcset="">
                                <p class="brand-name">V-Leadership</p>

                            </div>
                            <hr class="mt-4">
                            <!-- Sidebar Header -->
                            <div class="sidebar-header text-body  mt-5" style="width: 100%;">
                                <img src="<?= base_url() ?>assets/resources/home/icon-app.png" class="ml-4 mr-3" width="60px" height="60px" style="float:left" alt="" srcset="">
                            
                                <p class="mb-4">
                                <span style="margin-top: -20px; font-weight:bold; font-size:24px">Admin</span>
                                    <!-- <br> -->
                                    <!-- <br>
                                    <br> -->
                                <span style="font-size: 14px;">administrator</span>
                                </p>

                                

                                <hr class="bg-white" style="width: 80%;">
                            </div>

                            <div class="sub-title ml-4 mb-3">
                                <p class="content-subtitle" style="color:#AEAEAE; font-size:16px;" >
                                    Core
                                </p>
                            </div>

                            <!-- Sidebar Links -->
                            <ul class="list-unstyled components">
                                <li class="active item"><a href="<?= base_url() ?>admin"> <i class="fas fa-chart-line mr-3"></i>Dashboard</a></li>
                                <li class="item"><a href="<?= base_url() ?>admin/daftar_kandidat" ><i class="fas fa-user-graduate mr-3"></i>Daftar Kandidat</a></li>
                                <!-- Link with dropdown items -->
                                
                                <li class="item"><a href="<?= base_url(); ?>admin/lihat_hasil" ><i class="fas fa-poll mr-3"></i>Lihat Hasil</a></li>
                               
                            </ul>
                        </nav>

                        <div id="content">
                            <button type="button" id="sidebarCollapse" class="navbar-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>

                    </div>
                </div>  
                

                <div class="col-md-10 ml-3">
                    <div class="side-content " style="margin-top: 40px; width:100%; margin-left:250px;" >
                   <!-- card -->
                    <h4 class="mt-4"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</h4>

                    <hr style="width: 90%; margin-left:0;">

                    <div class="card-group">
                            <div class="row " style="width: 100%;">
                                <div class="col-md-4 ">
                                    
                                    <div class="card border-0 shadow-1 card1 " id="card" style="width:100%; background-color:#fff";  >
                                    <div class="card-body ">
                                        <i class="fas fa-calendar-check icon-card icon-2"></i>
                                        <h3 class="card-title mt-2 sudah" style="margin-left: 110px; font-weight:bold;"></h3>
                                        <p class="card-text  " style="margin-left: 110px; color:#AEAEAE; ">Sudah memilih</p>
                                        
                                    </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    
                                    <div class="card border-0 shadow-1 card2 " id="card" style="width:100%; background-color:#fff";  >
                                    <div class="card-body">
                                        <i class="fas fa-times-circle icon-card icon-3 "></i>
                                         <h3 class="card-title mt-2 masih" style="margin-left: 110px; font-weight:bold;"> </h3> 
                                        <p class="card-text" style="margin-left: 110px; color:#AEAEAE;">belum memilih</p>
                                        
                                    </div>
                                </div>
                                </div>
                                
                                <div class="col-md-4">
                                    
                                    <div class="card border-0 shadow-1 card3 " id="card" style="width:100%; background-color:#fff";  >
                                    <div class="card-body">
                                        <i class="fas fa-users icon-card icon-1"></i>
                                       
                                        <h3 class="card-title mt-2" style="margin-left: 110px; font-weight:bold;"><?= $pemilih[0]['jumlah'] ?> </h3>
                                        <p class="card-text" style="margin-left: 110px; color:#AEAEAE;">Jumlah pemilih</p>
                                        
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                        
                    <h4 class="mt-5"> <i class="fas fa-chart-bar mr-2"></i></i> Statistic</h4>
                    <hr style="width: 90%; margin-left:0;">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="chart-container bg-white mt-4 mb-5" style="padding : 20px 30px 70px 20px; ">
                                <canvas id="doughnutChart" class="mt-5"   ></canvas>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="chart-container bg-white mt-4 mb-5" style="padding : 20px 30px 70px 20px; ">
                                <canvas id="line" class="mt-5"   ></canvas>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr> 
            <footer class=" justify-content-center   text-center mt-4" style="padding: 0px 0px 25px 0;">
                    <h6 cl><i class="far fa-copyright"></i> Komunitas <span style="color: #2ab7ca ;"> Teknik Informatika </span> </h6>
                    <div class="social-media">
                        <a href="http://facebook.com"><i class="fab fa-facebook-square text-dark mr-3"></i></a>
                        <a href="http://instagram.com"><i class="fab fa-instagram text-dark"></i></a>
                    </div>
            </footer>

            <style>
                

            </style>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
         

            <script src="<?= base_url('assets/js/admin/index.js'); ?>"></script>



            <script>

        window.onload = function(){
           
            function get_pemilih(){
                var xhr = new XMLHttpRequest();
                var el = document.querySelector('.sudah')
                var el2 = document.querySelector('.masih')
                //             url : "",
                var url = '<?= base_url('admin/showPemilih'); ?>';
                xhr.open("GET" , url , true);
                xhr.send()
                xhr.onload = function(){
                    if(this.readyState == 4 && this.status == 200){
                        var i;

                        var obj = this.response
                        pemilih = JSON.parse(obj)

                        for( i=0 ; i < pemilih['sudah_memilih'].length ; i++ ){
                            el.innerHTML = `  <h3 class="card-title" style=" font-weight:bold;">${pemilih['sudah_memilih'][0]['jumlah']} </h3>`
                            el2.innerHTML = `<h3 class="card-title" style=" font-weight:bold;">`+ (pemilih['pemilih'][0]['jumlah'] - pemilih['sudah_memilih'][0]['jumlah']) +`</h3>`
                            console.log(pemilih)
                        }
                        
                    }
                }
            }

            setInterval(  function(){
                get_pemilih()

            }, 2000 )

          


               
               //chart
               function chart1(){
               var ctxD = document.getElementById("doughnutChart").getContext('2d');
               var myLineChart = new Chart(ctxD, {
               type: 'pie',
               data: {
               labels: [<?php foreach($ketua1 as $daftar): ?>
                "<?= $daftar['nama']?>",

               <?php endforeach;?>],
               datasets: [{
               data: [<?php foreach($ketua1 as $daftar): ?>
                "<?= $daftar['jumlah']?>",

               <?php endforeach;?>],
               backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1"],
               hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5"]
               }]
               },
               options: {
               responsive: true,
             
               legend : {
                   position : 'right',
                   labels : {
                       boxWidth : 18,
                       padding  : 20,
                       fontSize : 16
                      
                   }
               }
               }
               })
           
               }

            //    chart bar

            function chart2(){
                   var ctxL = document.getElementById("line").getContext('2d');
                   var myLineChart = new Chart(ctxL, {
                       type: 'bar',
                       data: {
                         labels: [<?php foreach($ketua1 as $daftar): ?>
                                    "<?= $daftar['nama']?>",

                                <?php endforeach;?>],
                         datasets: [
                           {
                             label: ["jumlah"],
                             data: [ <?php foreach($ketua1 as $daftar): ?>
                                    "<?= $daftar['jumlah']?>",

                                <?php endforeach;?> ],
                             backgroundColor: ['#AD35BA', '	#00BFFF' , '#F4A460' , '#778899'],
                             borderColor: [
                               '#AD35BA',
                             ],
                             borderWidth: 2,
                             pointBorderColor: "#fff",
                             pointBackgroundColor: "rgba(173, 53, 186, 0.1)",
                           }
                         ]
                       },
                       options: {
                         responsive: true,
                         scales : {
                             yAxes : [{
                                 ticks : {
                                     min : 0
                                 }
                             }]
                         }
                       }
                     });
               
                   }
           
              
           
                   chart1();
                   chart2();
                }

                // $(document).ready(function(){
                //     function show_pemilih(){
                //         $.ajax({
                //             type : 'ajax',
                //             async : true,
                //             dataType: 'json',
                //             success: function (data){
                //                 console.log(data);
                //             }
                //         })
                //     }

                //     show_pemilih();
                // })



            </script>