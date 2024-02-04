<html>

<head>
    <title>Html-Qrcode Demo</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="container-xxl" style="display: flex; justify-content:center; padding-top:10rem;">
        <div class="container">
            <div id="qr-reader" style="width:500px"></div>
            <div id="result">
                DATA berhasil di scan,
                <button> CARI </button>
            </div>
        </div>
        {{-- <input type="hidden" id="result" name="result"> --}}
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('html5-qrcode.min.js') }}"></script>
    <script>
        // $('#result').val('test');
        $(function() { //otomatis aktif ketika page di jalankan
        //fungsi untuk load csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
        function onScanSuccess(decodedText, decodedResult) {
            // alert(decodedText);
            $('#result').val(decodedText);
            let id = decodedText;
            html5QrcodeScanner.clear().then(_ => {
                $.ajax({

                    url: "{{ route('scan') }}",
                    type: 'PUT',
                    data: {
                        qr_code: id
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.status == 200) {
                            location.href = '/scan';
                        } else {
                            alert('gagal');
                        }

                    }
                });
            }).catch(error => {
                alert('something wrong');
            });
                // location.href= '/hasil'
        }

        function onScanFailure(error) {
            // handle scan failure, usually better to ignore and keep scanning.
            // for example:
            // console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", {
                fps: 10,
                qrbox: 250
            });
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
</body>

</html>
