<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>VALIDASI SURAT KETERANGAN DOKTER</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Simple line icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css"
        rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
        rel="stylesheet" type="text/css" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('template/css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="#page-top"><img src="{{ asset('img/logo-1.jpg') }}" style="width: 150px"
                    alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead d-flex align-items-center" style="background-image: {{ asset('img/logokmc.png') }}">
        <div class="container px-4 px-lg-5 text-center">
            <h1 class="mb-1" style="f">VALIDASI</h1>
            <h3 class="mb-5"><em>SURAT KETERANGAN DOKTER</em></h3>
            <div class="container" style="display: flex; justify-content:center;">
                <div id="reader" style="width:500px" style="background-color: white;"></div>
                <div>
                    <input style="margin:100px;" type="text" id="result" name="result">
                </div>
            </div>
        </div>
    </header>
    <section class="content-section bg-primary text-white">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-4">The buttons below are impossible to resist...</h2>
            <a class="btn btn-xl btn-light me-4" href="#!">Click Me!</a>
            <a class="btn btn-xl btn-dark" href="#!">Look at Me!</a>
        </div>
    </section>
    <!-- Map-->
    <div class="map" id="contact">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.9626135038216!2d108.61989897487216!3d-7.013679868702382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f0d7f3b5a6a79%3A0x17d7f158723b935e!2sKMC%20Luragung!5e0!3m2!1sid!2sid!4v1706445833692!5m2!1sid!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <br />
        <small><a
                href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a></small>
    </div>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container px-4 px-lg-5">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="#!"><i
                            class="icon-social-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="#!"><i
                            class="icon-social-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="#!"><i
                            class="icon-social-github"></i></a>
                </li>
            </ul>
            <p class="text-muted small mb-0">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('template/js/scripts.js') }}"></script>
    <script src="{{ asset('html5-qrcode.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://raw.githubusercontent.com/mebjas/html5-qrcode/master/minified/html5-qrcode.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // function onScanSuccess(decodedText, decodedResult) {
        //     $('#result').val(decodedText);
        //     let id = decodedText;
        //     html5QrcodeScanner.clear().then(_ => {
        //         var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        //         $.ajax({
        //             url: "{{ route('scan') }}",
        //             type: 'POST',
        //             data: {
        //                 _method : "POST",
        //                 _token : CSRF_TOKEN,
        //                 qr_code: id
        //             },
        //             success: function(response) {
        //                 if (response.status == 404) {

        //                     Swal.fire({
        //                         title:'',
        //                         confirmButtonText:'',
        //                         denyButtontext:'',
        //                     }).then((reult) ==>{
        //                         if (result.isConfirmed) {
        //                             location.reload();
        //                         } else if (result.idDismissed) {
        //                             consol.log("deny")
        //                         }
        //                     });

        //                 } else {
        //                     Swal.fire({
        //                         title:'',
        //                         icon: '',
        //                         html:
        //                             '',
        //                             '',
        //                         showCloseButton: true;
        //                         showCancelButton: false;
        //                         focusConfirm,
        //                     })
        //                 }

        //             }
        //         });
        //     }).catch(error => {
        //         alert('something wrong');
        //     });
        // }

        // let html5QrcodeScanner = new Html5QrcodeScanner(
        //     "reader", {
        //         fps: 10,
        //         qrbox: {
        //             width: 250,
        //             height: 250
        //         }
        //     },
        //     /* verbose= */
        //     false);
        // html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>

    <script>
        // $('#result').val('test');
        function onScanSuccess(decodedText, decodedResult) {
            // alert(decodedText);
            $('#result').val(decodedText);
            let id = decodedText;
            var dsid = decodedText;
            html5QrcodeScanner.clear().then(_ => {
                window.location="hasil/" + dsid
                // var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                // $.ajax({
                //     url: "{{ route('scan') }}",
                //     type: 'GET',
                //     data: {
                //         _methode: "GET",
                //         _token: CSRF_TOKEN,
                //         qr_code: id
                //     },
                //     success: function(response) {
                //         consol.log(response);
                //         if (response.status == 400) {

                //         } else {

                //         }

                //     }
                // });
            }).catch(error => {
                alert('something wrong');
            });

        }

        function onScanFailure(error) {
            // handle scan failure, usually better to ignore and keep scanning.
            // for example:
            // console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: {
                    width: 250,
                    height: 250
                }
            },
            /* verbose= */
            false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
</body>

</html>
