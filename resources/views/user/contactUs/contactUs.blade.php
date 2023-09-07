{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./aboutUs.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body> --}}
    @extends('section.layout.home')
    @section('home')
        @include('section.home.navbar')

    <div class="main-aboutUs">
        <section>
            <div class="container pb-5">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="pt-5">
                            <button class="aboutUs-content-btn2" style="font-family: p5;">Contact Us</button>
                        </div>
                        <div class="pt-5">
                            <h1 class="text-white" style="font-family: p5; font-size: 4em;">Shop with Us with the Best Price</h1>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-center justify-content-lg-endend">
                        <div>
                            <div class="pt-5">
                                <img src="{{asset('/assets/about_Us/Vector.png')}}" alt="">
                            </div>
                            <div class="pt-5">
                                <p class="text-white" style="font-family: p5;">Mail Us: <br>
                                    BILLION STORY TECHNOLOGIES PVT LIMITED <br>
                                    5/449, 2nd FLOOR, <br>
                                    MARIYA PLAZA, <br>
                                    NORTH KALAMASSERY, <br>
                                    ERNAKULAM - 683 104
<br><br>
                                    Registered Office Address: <br><br>

BILLION STORY TECHNOLOGIES PVT LIMITED <br>
5/449, 2nd FLOOR, <br>
MARIYA PLAZA, <br>
NORTH KALAMASSERY, <br>
ERNAKULAM - 683 104 <br>
KERALA, INDIA <br>
PH : +91 81389 18171 <br>
www.benefitshops.com</p>
                            </div>
                            <div>
                                <div class="pt-5">
                                    <img src="{{asset('/assets/about_Us/Vector phone.png')}}" alt="">
                                </div>
                                <div class="pt-5">
                                    <h4 class="text-white" style="font-family: p5;">+91 9876 543 210</h4>
                                    <h4 class="text-white" style="font-family: p5;">+91 9876 543 210</h4>
                                </div>
                                <div>
                                    <img src="{{asset('/assets/about_Us/Line 37.png')}}" alt="">
                                </div>
                                <div>
                                  <a href=""><i style="font-size: 25px;" class="fa-brands fa-facebook-f mx-2"></i></a>
                                  <a href=""><i style="font-size: 25px;" class="fa-brands fa-instagram"></i></a>
                                  <a href=""><i style="font-size: 25px;" class="fa-brands fa-youtube mx-2"></i></a>
                                  <a href=""><i style="font-size: 25px;" class="fa-brands fa-twitter"></i></a>
                                  <a href=""><i style="font-size: 25px;" class="fa-brands fa-whatsapp mx-2"></i></a>
                                    {{-- <img src="" alt="facebook">
                                    <img src="" alt="instagram">
                                    <img src="" alt="youtube">
                                    <img src="" alt="twitter">
                                    <img src="" alt="whatsapp"> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@include('section.home.footer')
    @endsection
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html> --}}
