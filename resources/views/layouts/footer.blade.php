<main>
    <div class="container-fluid" style="background-color:#286DA8">
        <div class="row justify-content-center">
            <div class="col-4 text-center my-5">
                <h5 class="text-light"> Tidak menemukan informasi yang anda inginkan? </h6>
                <a href="{{ url("/permohonan-informasi-publik")}}" class="btn btn-light">
                    <i class="fa fa-question-circle"></i>
                    Buat Permohonan Informasi
                </a>
            </div>
        </div>
    </div>
</main>
<main>
    <footer class="page-footer font-small unique-color-dark">
        <div>
            <div class="container">
                <div class="row py-4 d-flex align-items-center">
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-0 mb-md-0">
                        <h6 class="mb-0">Terhubung dengan media sosial kami!</h6>
                    </div>
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <a class="fb-ic"><i class="fab fa-facebook-f white-text mr-4"> </i></a>
                        <a class="tw-ic"><i class="fab fa-twitter white-text mr-4"> </i></a>
                        <a class="gplus-ic"><i class="fab fa-google-plus-g white-text mr-4"> </i></a>
                        <a class="li-ic"><i class="fab fa-linkedin-in white-text mr-4"> </i></a>
                        <a class="ins-ic"><i class="fab fa-instagram white-text"> </i></a>
                    </div>
                </div>
                <hr class="deep-purple accent-2 mb-3 mt-0 d-inline-block mx-auto" style="width: 100%">
            </div>
        </div>
        <div class="container text-center text-md-left mt-3">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">{{ setting('site.title') }}</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 200px;">
                    <p>{{ setting('site.description') }}</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Group 1</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <br><a href="#">Link 1</a>
                    <br><a href="#">Link 2</a>
                    <br><a href="#">Link 3</a>
                    <br><a href="#">Link 4</a>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Group 2</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <br><a href="#">Link 4</a>
                    <br><a href="#">Link 5</a>
                    <br><a href="#">Link 6</a>
                    <br><a href="#">Link 7</a>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase font-weight-bold">Kontak</h6>
                    <hr class="deep-purple accent-2 mb-3 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <table class="table table-sm table-borderless mt-0 pt-0">
                        <tr>
                            <td><i class="fas fa-home"></i></td>
                            <td>Jl. Raya Soreang KM. 17, Soreang 40991</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-envelope"></i></td>
                            <td>ppid@kabbandung.com</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-phone"></i></td>
                            <td>(022) 5891582</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="{{ url("/")}}">{{ setting('site.title') }}</a>
        </div>
    </footer>
</main>
