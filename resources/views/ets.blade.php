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
        <style>
    body{
        background-color: #5CD85A;
        font-family: 'Poppins', sans-serif;
    }

    .container{
        background-color:#81B622;
        border:#1A5653;
        border-style: solid;
        border-radius: 3%;
    }



    .card{
        width:300px;
    }
    .form-title,label,.titikdua{
        color:white;
    }



    input{
        align-self: center;
    }

        </style>

</head>
    <body>
<div class="container mt-5 pt-4 pb-5 pr-5 pl-5">

    <!-- Card -->
    <div class="card">
    <div class="card-body">
        <h3 class="card-title">Welcome,</h3>
       <h3 class="card-title">Aidhil Akbar Nurdin</h3>
       <p class="card-text">Aidhil</p>
       <p class="card-text">5026201106</p>
    </div>
    </div>
    <!-- End of Card -->



     <h1 class="form-title text-center mt-5">Form Input Peserta Vaksinasi</h1>
        <form action="https://www.pedulilindungi.id/login" class="mt-5" id="form">


            <!-- Name  -->
            <div class="form-group row">
                <label for="name" class="col-sm-2">
                    Nama Peserta
                </label>
                <div class="col-sm-1">
                    <p class="titikdua">:</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" class="form-control " id="name" name="name" placeholder="Your name" minlength="10" required>
                    <p id="namefalse"></p>
                </div>
                </div>

            <!-- NIK -->
            <div class="form-group row">
                <label for="nik" class="col-sm-2">
                    NIK
                </label>
                <div class="col-sm-1">
                    <p class="titikdua">:</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Your NIK" minlength="16" required>
                    <p id="nikfalse"></p>
                </div>
                </div>

            <!-- Jenis Vaksin -->

             <div class="form-group row">
                <label for="vac" class="col-sm-2">
                    Jenis Vaksin
                </label>
                <div class="col-sm-1">
                    <p class="titikdua">:</p>
                </div>
                <div class="col-sm-9">
                  <select class="form-control" id="vac" name="vac" required>
                      <option disabled selected value>Select vaccine type</option>
                      <option value="az">AZ</option>
                      <option value="sinovac">Sinovac</option>
                      <option value="moderna">Moderna</option>
                  </select>
                  <p id="vacfalse"></p>
                </div>
            </div>

            <!-- No Batch  -->
            <div class="form-group row">
                <label for="noBatch" class="col-sm-2 ">
                    No Batch
                </label>
                <div class="col-sm-1">
                    <p class="titikdua">:</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="noBatch" name="noBatch" placeholder="XXX" required>
                    <p id="nofalse"></p>
                </div>
                </div>

                <div class="form-group row justify-content-center">
                      <!-- Simpan -->

                        <button type="submit" class="btn btn-info submit pt-3 pb-3 pr-5 pl-5 mr-5">Simpan</button>
                    <!-- Reset -->

                        <button type="button" class="btn btn-success clear pt-3 pb-3 pr-5 pl-5">Reset</button>

                </div>


        </form>



    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
           $(document).ready(function(){
                $(".submit").click(function(){


                /* Nama Peserta */
                var name = $("#name").val()
                var namevalidation = /^[a-zA-Z\s]+$/


                if(!name.match(namevalidation) || name.length < 10){
                    $("#name").css({'border' : '2px solid red'})
                    $("#namefalse").text("Alphabet Only and equal or more than 10 Character!")
                    $("#name").focus
                    return false
                }

                if(name.match(namevalidation) && name.length>=10){
                    $("#name").css({'border' : '4px solid green'})
                    $("#namefalse").text("")

                }


                /* NIK */
                var nik = $("#nik").val()
                if(isNaN(nik) == true || nik.length!=16){
                    $("#nik").css({'border' : '2px solid red'})
                    $("#nikfalse").text("Number Only and 16 Character Allowed!")
                    $("#nik").focus()
                    return false
                }
                if(isNaN(nik) == false){
                    $("#nik").css({'border' : '4px solid green'})
                    $("#nikfalse").text("")
                }


                /* Jenis Vaksin */

                var vac =  $("select option:selected").val();
                if(vac== 0){
                    $("#vac").css({'border' : '2px solid red'})
                    $("#vacfalse").text("Pick one!")
                    $("#vac").focus()
                    return false
                }
                if(vac!=0){
                    $("#vac").css({'border' : '4px solid green'})
                    $("#vacfalse").text("")
                }


                /* noBatch */
                var noBatch = $("#noBatch").val()
                var batchvalid= /^([a-zA-Z0-9]+)$/


                if(!noBatch.match(batchvalid) || noBatch.length == 0){
                    $("#noBatch").css({'border' : '2px solid red'})
                    $("#nofalse").text("Alphanumeric only!")
                    $("#noBatch").focus
                    return false
                }

                if(noBatch.match(batchvalid)) {
                    $("#nofalse").css({'border' : '4px solid green'})
                    $("#nofalse").text("")

                }
                /* Alert */
                alert("Submitted!,Redirecting To PeduliLindungi!")

                })


                /* Clear */
                $(".clear").click(function(){
                    $('#form')[0].reset();
                    alert('Reset berhasil!')
                })

               /* Auto Reject Keyboard */
                $( "#name" ).keypress(function(e) {
                    var key = e.keyCode;
                    if ((key < 65 && key < 92) || (key > 90 && key <97) || key>122 ) {  // 0-9
                        e.preventDefault();
                    }

                });


                $( "#nik" ).keypress(function(e) {
                    var keyZ = e.keyCode;
                    if ((keyZ < 48 && keyZ < 57)|| keyZ>57 ) {  // 0-9
                        e.preventDefault();
                    }

                });

                $( "#noBatch" ).keypress(function(e) {
                    var keyZ = e.keyCode;
                    if ((keyZ<48||(keyZ>57 && keyZ <68)||(keyZ > 90 && keyZ < 97)|| keyZ > 122)) {  // 0-9
                        e.preventDefault();
                    }

                });
            })
            </script>


    </body>
</html>
