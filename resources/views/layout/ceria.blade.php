<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

    <!-- CSS Ceria -->

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/ceria.css') }}">

    <!-- End Of CSS Ceria -->

    <!-- Date time picker CSS and also BS3 -->

      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">


		<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    	<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
		<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>




    <!--    END Date time picker CSS and also BS3 -->


    </head>
    <body>
        <div class="container-fluid">
            <div class="row main">

                <!-- Sidebar -->
                <div class="col-sm-2">
                    <nav>
                        <ul class="links">
                            <li class="sec">
                                <a class="nav-link first-link" href="#">DB Pweb</a>
                                </li>
                            <li class="sec">
                            <a class="nav-link" href="/pegawai">Pegawai</a>
                            </li>
                            <li class="sec">
                            <a class="nav-link" href="/absen">Absen</a>
                        </li>
                        <li class="sec">
                            <a  class="nav-link" href="/Tugas">Tugas</a>
                        </li>
                        <li class="sec">
                            <a  class="nav-link" href="soon">Praktikum 1</a>
                        </li>
                        <li class="sec">
                            <a  class="nav-link" href="/praktikum">Praktikum</a>
                        </li>
                    </nav>
                </div>
                <!-- End Of Sidebar -->

                <div class="col-sm-10">
                    <div class="sec2">
                    <!-- Header -->
                    <div class="row header domo">
                        <img class="col-sm-1 img-responsive  profile-pic" src="{{URL::asset('/images/ceria/profile.jpeg')}}" alt="profile Pic" >

                        <div class="col-sm-10">

                        <p class="greeting">Hello,</p>

                        <p class="nrpAidhil">5026201106</p>
                        <p class="namaAidhil"> Aidhil Akbar Nurdin </p>

                        </div>
                     </div>

                <!-- End Of Header -->


                <div class="isi">


                    <div class="row rowback">

                        <p class="titleHalaman"> @yield('judulHalaman')</p>


                    </div>

                    <br/>
                    <br/>

                @section('isikonten')
                @show


                </div>
                </div>
            </div>
         </div>


                    <footer>
                        <p class="footer-text">Hak Cipta oleh 5026201106 - AIDHIL AKBAR N </p>
                    </footer>
                </div>


</body>
</html>
