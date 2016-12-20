 <?php
                $counter=1;
                //for($i=1;$i<10;$i++){
                    while ($counter<10){

                    echo $counter;

                    ?>
                <div id="myProgress">
                    <div id="{<?php echo $counter?>}" style=" position: absolute;
                            width: 0%;
                            height: 100%;
                            background-color: #4CAF50;">

                        <div id="{<?php echo $counter?>}" style="text-align: center;
                            line-height: 30px;
                            color: white;">0%</div>
                    </div>
                </div>


                    <style>
                        #myProgress {
                            position: relative;
                            width: 100%;
                            height: 30px;
                            background-color: #ddd;
                        }

                        #myBar {

                        }

                        #label {

                        }
                    </style>

                <script type="text/javascript">


                   var i;

                        var x = "{<?php echo $counter?>}";
                        var y = "{<?php echo $counter?>}";
                        //alert(x);

                       var elem = document.getElementById(x);
                       //alert(elem.value);
                       var width = 0;
                       var id = setInterval(frame, 250);

                       function frame() {
                           if (width >= 100) {
                               clearInterval(id);
                           } else {
                               width++;
                               elem.style.width = width + '%';
                               document.getElementById(y).innerHTML = width * 1 + '%';
                           }
                       }

                </script>
  <?php
                    $counter=$counter+1;
                     }

                ?>