<!DOCTYPE html>
<html>
    <head>
        <title>5026201106</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

body{
    font-family: 'Poppins', sans-serif;

    background-color: #191A19;
}
label,h1,h3,.fa{
    color: white;
}
 #fhr-false{
     text-align: center;
     margin-left: -1em;
 }
 #fhr-false,#seq-false,#tri-false{

     color:white;
 }
 .title{
     color:white;
     font-size:5em;
 }
 .form-control{
     margin-left: -1em;
 }
 .text-center{
     margin-left: -1em;
 }

        </style>

</head>
    <body>
    <div class="container mx-auto mt-2 p-5 ">

        <h1 class="pt-5 pb-5 text-center title">Welcome to Compute!</h1>
        <h3 class="pt-3">What do you want to compute?</h3>

       <!-- Thermometer -->
       <!-- Symbol -->
        <div class="row mx-auto pt-5">
                <div class="col-sm-2 text-center">
                <i class="fa fa-thermometer-half" aria-hidden="true" style="font-size: 12em;"></i>
                </div>


                <!-- Main Thermometer-->
                <div class="col-sm-10">

                    <h1>Fahrenheit to Celcius Calculator</h1>
                    <form id="ftoc" class="mt-4" action="fahrenheit" method="post" >
                        @csrf
                        <div class="form-group row">


                            <div class="col-sm-5 mt-3">
                                <label for="fhr" class="col-sm-12 col-form-label text-center" >
                                    Fahrenheit
                                </label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control text-center" id="fhr" name="fhr" placeholder="Your Temperature" >
                                    <p id="fhr-false"></p>
                                </div>
                             </div>

                             <div class="col-sm-2 text-center mt-auto">
                                <button type="button" class="btn btn-secondary reversebutton">Reverse</button>
                                <i class="fa fa-arrows-h" aria-hidden="true" style="font-size: 4em;"></i>
                                <button type="submit" name="tempsub" value="tempSub" class="btn btn-primary tempsubmit">Submit</button>
                             </div>

                            <div class="col-sm-5 mt-3">
                                <label for="clc" class="col-sm-12 col-form-label text-center" >
                                    Celcius
                                </label>
                                <div class="col-sm-12 form-control">

                                </div>
                            </div>

                        </div>

                    </form>
                 </div>

        </div>

     <!-- Sum of 2 random dice -->
       <!-- Symbol -->
        <div class="row mx-auto pt-5">
                <div class="col-sm-2 text-center">
                <i class="fa fa-cube" aria-hidden="true" style="font-size: 10em;"></i>
                </div>


                <!-- Main Sum-->
                <div class="col-sm-10">

                    <h1>Sum of 2 Random dice</h1>
                    <a href="dice">
                    <button type="submit" name="rollsub" value="rollsub" class="btn btn-primary rolls" style="font-size: 3em;" >Roll!</button>
                        </a>
                    </div>
                    </div>



    <!-- Fibonacci  -->
       <!-- Symbol -->
       <div class="row mx-auto pt-5">
        <div class="col-sm-2 text-center">
        <i class="fa fa-plus" aria-hidden="true" style="font-size: 12em;"></i>
        </div>


        <!-- Fibo -->
        <div class="col-sm-10">

            <h1>Fibonacci</h1>

            <form id="fib" action="fibo" method="post">
                @csrf
                <div class="form-group row">

                    <div class="col-sm-4">
                        <label for="startnum" class="col-sm-12 col-form-label text-center" >
                            Number of Sequence
                        </label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="seq" name="seq" placeholder="How many?hundreds." min="1" >
                            <p id="seq-false"></p>
                        </div>
                     </div>



                    <!-- Result -->
                    <div class="col-sm-4 mt-2">

                        <button type="submit" name="fibosub" value="fiboSub" class="btn btn-primary fibosubmit mt-4">Submit</button>

                    </div>

                </div>

            </form>
        </div>

        </div>


         <!-- Triangle pattern  -->
       <!-- Symbol -->
       <div class="row mx-auto pt-5">
        <div class="col-sm-2 text-center">
        <i class="fa fa-star" aria-hidden="true" style="font-size: 10em;"></i>
        </div>


        <!-- Main -->
        <div class="col-sm-10">

            <h1>Star Triangle</h1>

            <form id="tri" action="triangle" method="post">
                @csrf
                <div class="form-group row">

                    <div class="col-sm-4">
                        <label for="numtri" class="col-sm-12 col-form-label text-center" >
                            Number of row
                        </label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="numtri" name="numtri" placeholder="Row" min="1" max="32">
                            <p id="tri-false"></p>
                        </div>
                     </div>

                     <!-- Result -->
                     <div class="col-sm-4 mt-2">

                        <button type="submit" name="trisub" value="triSub" class="btn btn-primary trisubmit mt-4">Submit</button>

                    </div>

                </div>

            </form>
        </div>

        </div>

    </div>








        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>

    $(document).ready(function(){

        //-- Temp reverse --
        $(".reversebutton").click(function(){
            window.location.href = "tugasphprev"
         });


        // Temp Submit

         $(".tempsubmit").click(function(){
             var fahrenheit = $("#fhr").val()
             if(isNaN(fahrenheit) == true || fahrenheit.length <= 0){

          // isNan Jika ada yang bukan angka maka benar
                $("#fhr").css({'border' : '2px solid red'})
            $("#fhr-false").text("Still empty~")
            return false;
           }
           if(isNaN(fahrenheit) == false){
            $("#fhr-false").text("")
           }
         });

         //roll

         $(".rollsub").click(function(){
            window.location.href = "dice"
         });

         //fibo
         $(".fibosubmit").click(function(){
             var seq = $("#seq").val()
             if(isNaN(seq) == true || seq.length <= 0){


                $("#seq").css({'border' : '2px solid red'})
            $("#seq-false").text("Still empty~")
            return false;
           }
           if(isNaN(seq) == false){
            $("#seq-false").text("")
           }
         });


         // triangle
         $(".trisubmit").click(function(){
             var numtri = $("#numtri").val()
             if(isNaN(numtri) == true || numtri.length <= 0){

                $("#numtri").css({'border' : '2px solid red'})
            $("#tri-false").text("Still empty~")
            return false;
           }
           if(isNaN(numtri) == false){
            $("#tri-false").text("")
           }
         });



})
            </script>


    </body>
</html>
