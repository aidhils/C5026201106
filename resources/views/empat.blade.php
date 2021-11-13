<!DOCTYPE html>
<html>
    <head>
        <title>5026201106</title>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
h3{
    font-size: 4em;
}


#welcome{
  display: flex;
  flex-direction: column;
  width: 100vw;
  height: 100vh;
justify-content: center;
  align-items: center;
  background-color: #7F4AA4

;
}
  #we-text{
    font-size: 10em;
    color: white;
    font-family: 'Poppins', sans-serif;

}

#phones{
    background-color: #FBB80F;
}

#phonetext{
    font-size: 10em;
}
#btn-phone
{
    font-size: 2em;
}

#tablet{
    background-color: #FBEE0F;
}
#tabletdesc{
    font-size: 10em;
    font-family: 'Poppins', sans-serif;
}

#btn-tablet{
    font-size: 2em;
}
.click{
    font-size: 5em;
    border-radius: 5%;

}
.offertext{
    font-size: 7em;
}

</style>

<script>
    $(document).ready(function(){
  $("#btn-phone").click(function(){
    $("#phone1").fadeToggle(500);
    $("#phone2").fadeToggle(600);
    $("#phone3").fadeToggle(700);
  });
});
</script>

<script>
    $(document).ready(function(){
  $("#btn-tablet").click(function(){
    $("#tab1").fadeToggle(500);
    $("#tab2").fadeToggle(600);

  });
});
</script>


    </head>
    <body>


     <div class="container-fluid coltem">
        <section id="welcome">
            <h1 id="we-text" class="col-xs-1 center-block"> Welcome to our store!</h1>
            <a class="btn btn-primary click pt-3 pb-3 pl-lg-5 pr-lg-5" href="#offer" role="button">Click here!</a>
            </section>


<section id="phones">
    <div class="row"></div>
<h1 class="text-center mt-lg-5 offertext" id="offer"> Apa yang kami tawarkan?</h1>


<!-- Phone -->
                    <h3 class="text-lg-center pt-lg-3" id="phonetext">Handphone</h3>
                    <div class="d-flex justify-content-center">
                    <button class="btn btn-primary mt-lg-4 mb-lg-4 " id="btn-phone">Sembunyikan/Tampilkan List Handphone</button>
                </div>
            <div class="row phone" id="phone1">

                <div class="col-4">
                    <img src="https://i01.appmifile.com/webfile/globalimg/id/cms/5A3A926D-6611-87A3-8962-5E0122B6CE83.jpg" class="img-fluid">
                </div>

                <div class="col-8 descphone">
                    <div class="container d-flex h-100">
                        <div class="row justify-content-center align-self-center">
                            <h3>Mi 11 Ultra</h3>
                        </div>
                    </div>


                </div>

            </div>

            <div class="row phone" id="phone2">

                <div class="col-4" id="phone">
                    <img src="https://i01.appmifile.com/webfile/globalimg/id/cms/A321057E-9F30-E6FF-F7F6-787278C742B9.jpg" class="img-fluid">
                </div>

                <div class="col-8 descphone">

                    <div class="container d-flex h-100">
                        <div class="row justify-content-center align-self-center">
                            <h3>Redmi Note 10 Pro</h3>
                        </div>
                    </div>


                </div>

            </div>

            <div class="row phone" id="phone3">

                <div class="col-4">
                    <img src="https://i01.appmifile.com/webfile/globalimg/id/cms/6F2DA7AE-6D81-297B-1E4E-140E86F02E92.jpg" class="img-fluid">
                </div>

                <div class="col-8 descphone">

                    <div class="container d-flex h-100">
                        <div class="row justify-content-center align-self-center">
                            <h3>Redmi 9T</h3>
                        </div>
                    </div>


                </div>

            </div>
        </section>

<!-- Tablet -->
<section id="tablet" class="pt-lg-5">
    <div class="row"></div>
    <div class="row"></div>


        <h3 class="text-lg-center pt-lg-3" id="tabletdesc">Tablet</h3>
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary mt-lg-4 mb-lg-4 " id="btn-tablet">Sembunyikan/Tampilkan List Handphone</button>
        </div>
        <div class="row mt-lg-5 pb-lg-5">

            <div class="col-6 mt-lg-5">


                    <div class="row tablet" id="tab1">

                        <div class="col-4">
                        <img src="https://consumer-img.huawei.com/content/dam/huawei-cbg-site/common/mkt/pdp/tablets/matepad-11/new-img/imgs/HUAWEI-MatePad-11-2.png" class="img-fluid">
                        </div>

                        <div class="col-8">
                            <div class="container d-flex h-100">
                                <div class="row justify-content-center align-self-center">
                                    <h3>Huawei MatePad 11</h3>
                                </div>
                            </div>

                        </div>
                    </div>

            </div>


            <div class="col-6">
                <div class="row tablet" id="tab2">

                    <div class="col-4">
                            <img src="
                            https://tekno.esportsku.com/wp-content/uploads/2020/10/image-15_dk5t.png" class="img-fluid pull-right">
                            </div>

                            <div class="col-8">
                                <div class="container d-flex h-100">
                                    <div class="row justify-content-center align-self-center">
                                        <h3>Huawei MatePad PRO</h3>
                                    </div>
                                </div>


            </div>
            </div>
            </div>
        </section>
<!-- End of tablet-->





    </div>


    </body>
</html>
