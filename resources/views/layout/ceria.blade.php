<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

    <!-- CSS Ceria -->

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/ceria.css') }}">

    <!-- End Of CSS Ceria -->

    <!-- BS 4 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>
    <body>




        <div class="container-fluid px-0">

            <div class="row no-gutters">

                <!-- Side bar -->

                <div class="col-sm-2">

                    <nav class="sticky-top">
                        <div class="row pt-lg-5 pr-lg-4">
                            <div class="col-sm-1">

                            </div>

                            <img class="col-sm-5 img-responsive  profile-pic" src="{{URL::asset('/images/ceria/profile.jpeg')}}" alt="profile Pic" >

                        <div class="col-sm-4">
                           <p class="nameceria">Hallo,</p>
                           <p class="nameceria">Aidhil Akbar Nurdin</p>
                           <p class="nameceria">5026201106</p>
                       </div>

                                <div class="col-sm-2">

                              </div>
                       </div>


                        <ul class="links">

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
                            <a  class="nav-link" href="/mobil">Praktikum Modul 3</a>
                             </li>


                            <li class="sec">
                                <a  class="nav-link" href="/keranjangbelanja">UAS</a>
                                </li>

                        </ul>
                    </nav>

                </div>

                <!-- End Of Sidebar -->


                <div class="col-sm-10 isi">

                    <div class="container-fluid pl-4 boxmain">

                                <p class="titleHalaman"> @yield('judulHalaman')</p>


                        @section('isikonten')
                        @show
                    </div>


                </div>

                <footer class="col-sm-12">
                    <p class="footer-text">Hak Cipta oleh 5026201106 - AIDHIL AKBAR N </p>
                </footer>

            </div>


        </div>



</body>
</html>
