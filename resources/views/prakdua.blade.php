<!DOCTYPE html>
<html>
    <head>
        <title>5026201106</title>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@700&display=swap" rel="stylesheet">


        <style>
        body{
            background-color: #05445E;
            font-family: 'DM Sans', sans-serif;
        }

        h1{
            color: white;
        }

        .container{
            background-color: #189AB4;
            border-radius: 5%;
            border-color: white;
            border-width: 8px;
            border-style: solid;

        }
        .col-form-label,.title,.form-check-label{
            color: white;
        }
        .col-form-label,.title{
            text-align: right;
        }






        /* False */
        #id_false{
            color: red;
        }
        #pw_false{
            color: red;
        }
        #name_false{
            color:red;
        }
        #country_false{
            color: red;
        }
        #zip_false{
            color: red;
        }
        #email_false{
            color: red;
        }
        #sex_false{
            color: red;
        }
        #lang_false{
            color: red;
        }


        </style>



    </head>
    <body>
            <div class="container mt-lg-5 pt-5 pl-5 pr-5 pb-5 mb-lg-5 ">


                <!-- Title -->
                <h1 class="text-center pt-lg-4 pb-lg-4 mb-lg-5">Registration Form</h1>


                <!-- Form Begin -->
                <form action="https://www.linkedin.com/in/aidhilakbar/">


                            <!-- User ID -->
                            <div class="form-group row">
                                <label for="user_id" class="col-sm-2 col-form-label">User ID :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Your User ID" id="user_id" name= "user_id" minlength="5" maxlength="12" required >
                                        <p id="id_false"></p>
                                    </div>
                            </div>



                            <!-- Password -->
                            <div class="form-group row">
                                <label for = "pwd" class = "col-sm-2 col-form-label">Password :</label>
                                <div class= "col-sm-10">
                                    <input type="password" class="form-control" id="pwd" name="pwd"  placeholder="Your Password"  minlength="7" maxlength="12" required>
                                    <p id="pw_false"></p>
                                </div>
                            </div>

                            <!-- Name -->
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name :</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name= "name"  placeholder="Your User Name"  required >
                                        <p id="name_false"></p>
                                    </div>
                            </div>


                               <!-- Address -->
                               <div class="form-group row">
                                <label for = "adr" class = "col-sm-2 col-form-label">Address :</label>
                                <div class= "col-sm-10">
                                    <input type="text" class="form-control" id="adr" name="adr"  placeholder="Your Adress(OPTIONAL)">
                                </div>
                            </div>



                              <!-- Country -->
                              <div class="form-group row">
                                <label for = "country" class = "col-sm-2 col-form-label">Country :</label>
                                <div class= "col-sm-10">
                                    <select  class="form-control" id="country" name="country" required>
                                        <option disabled selected value>Asean Country</option>
                                        <option value="ind">Indonesia</option>
                                        <option value="mys">Malaysia</option>
                                        <option value="sgp">Singapura</option>
                                        <option value="thd">Thailand</option>
                                        <option value="fpn">Filipina</option>
                                        <option value="bds">Brunei Darussalam</option>
                                        <option value="vnm">Vietnam</option>
                                        <option value="lao">Laos</option>
                                      </select>
                                      <p id="country_false"></p>
                                </div>
                            </div>


                             <!-- ZIP Code -->
                             <div class="form-group row">
                                <label for = "zip" class = "col-sm-2 col-form-label">ZIP Code :</label>
                                <div class= "col-sm-10">
                                    <input type="text" class="form-control" id="zip" name= "zip"  placeholder="Your ZIP-CODe" required >
                                    <p id="zip_false"></p>
                                </div>
                            </div>


                              <!-- Email -->
                              <div class="form-group row">
                                <label for = "email" class = "col-sm-2 col-form-label">Email :</label>
                                <div class= "col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email"  placeholder="Your ZIP-emaIl">
                                    <p id="email_false"></p>
                                </div>
                            </div>

                              <!-- Sex -->
                              <div class="form-group row">
                                <p class = "col-sm-2 title">Sex :</p>
                                <div class= "col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sex" id="male" value="Male">
                                        <label class="form-check-label" for="male">Male</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sex" id="female" value="Female">
                                        <label class="form-check-label" for="female">Female</label>
                                      </div>
                                      <p id="sex_false"></p>
                                </div>
                            </div>


                              <!-- Language -->
                              <div class="form-group row mt-n3">
                                <p class = "col-sm-2 title">Language :</p>
                                <div class= "col-sm-10">
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                          <input type="checkbox" id="lang" name="lang" class="form-check-input" value="English">English
                                        </label>
                                      </div>
                                      <div class="form-check-inline">
                                        <label class="form-check-label">
                                          <input type="checkbox" id="lang" name="lang" class="form-check-input" value="Non-English">Non-English
                                        </label>
                                      </div>

                                      <p id="lang_false"></p>
                                </div>
                            </div>


                            <!-- about -->
                            <div class="form-group row">
                                <label for = "about" class = "col-sm-2 col-form-label">About :</label>
                                <div class= "col-sm-10">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" id="about"></textarea>
                                    </div>
                                </div>
                            </div>


                            <!-- Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary submit pr-3 pl-3 pt-2 pb-2">Submit</button>
                            </div>


                </form>


            </div>


 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Form Validation Script-->
<script>
$( document ).ready(function() {
    $(".submit").click(function(){


        /* User ID*/
       var user_id = $("#user_id").val();
       if(user_id.length<5){
           $("#user_id").css({'border' : '2px solid red'})
           $("#id_false").text('User ID is equal or more than 5 character!');
           $("#user_id").focus();
           return false;
       }
       else if(user_id.length>=5){
        $("#user_id").css({'border' : '2px solid lightgreen'});
        $("#id_false").text('');

       }

       /* Password */
       var pwd = $("#pwd").val()
       if(pwd.length<7){
           $("pwd").css({'border' : '2px solid red'})
           $("#pw_false").text('Make sure password is equal or more than 7 character!')
           $("#pwd").focus();
           return false;
       }
       if(pwd.length>=5){
        $("#pwd").css({'border' : '2px solid lightgreen'});
        $("#pw_false").text('');
       }

       /* Name */
        var name = $('#name').val();
        var namevalid = /^[a-zA-Z\s]+$/
        if(!name.match(namevalid) || name.length <= 0)

                {
                $("#name").css({'border' : '2px solid red'})
                $("#name_false").text('Make sure name is only alphabet!')
                $("#name").focus();
                return false;
            }


          if(name.match(namevalid)){
                $("#name").css({'border' : '2px solid lightgreen'})
                $("#name_false").text('')
            }


        /* Country */
        var country = $("select option:selected").val();
        if(country==0){
            $("#country").css({'border' : '2px solid red'})
                $("#country_false").text('Please select ASEAN Country')
                $("#country").focus();
                return false;
        }
        if(country!=0){
            $("#country").css({'border' : '2px solid lightgreen'})
                $("#country_false").text('')
        }

        /* ZIP Code */
        var zip = $("#zip").val();
        if(isNaN(zip) == true || zip == 0){
            $("#zip").css({'border' : '2px solid red'})
                $("#zip_false").text('Number Only!')
                $("#zip").focus();
                return false;
        }
        if(isNaN(zip) == false){
            $("#zip").css({'border' : '2px solid lightgreen'})
                $("#zip_false").text('')
        }

        /* Email */
        var email = $('#email').val()
        var emailvalid = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

        if(!email.match(emailvalid) || name.length <= 0)

                {
                $("#email").css({'border' : '2px solid red'})
                $("#email_false").text('Make sure you are using the right emails')
                $("#email").focus();
                return false;
            }


          if(name.match(namevalid)){
                $("#email").css({'border' : '2px solid lightgreen'})
                $("#email_false").text('')
            }


        /* Sex */
        var sex= $("input[type='radio']:checked")
         if(sex.length == 0)

                {
                $("#sex").css({'border' : '2px solid red'})
                $("#sex_false").text('Sex Required!')
                $("sex").focus();
                return false;
            }


          if(sex.length != 0){
                $("#sex").css({'border' : '2px solid lightgreen'})
                $("sex_false").text('')
            }

        /* Language */
        var lang= $("input[type='checkbox']:checked")
         if(lang.length == 0)

                {
                $("#lang").css({'border' : '2px solid red'})
                $("#lang_false").text('Language Required')
                $("lang").focus();
                return false;
            }


          if(lang.length != 0){
                $("#lang").css({'border' : '2px solid lightgreen'})
                $("lang_false").text('')
            }


});
  });


  /* Auto reject keyboard */

  /* Name */
  $( "#name" ).keypress(function(e) {
                    var key = e.keyCode;
                    if ((key < 65 && key < 92) || (key > 90 && key <97) || key>122 ) {  // 0-9
                        e.preventDefault();
                    }

                });
/* ZIP */
$( "#zip" ).keypress(function(e) {
                    var keyZ = e.keyCode;
                    if ((keyZ < 48 && keyZ < 57)|| keyZ>57 ) {  // 0-9
                        e.preventDefault();
                    }

                });





</script>

    </body>
</html>
