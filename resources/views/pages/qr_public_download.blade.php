<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital Grave Memory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body style="background: #5F6F52 !important">
    <style>

    </style>
 
    <div style="width: 500px;height:100%;background:white;margin:0 auto">
       <br>
       <br>
        <div style="position: relative;width: 74%;margin: 0 auto;" id="qr_img_mail"> 
            <img style="width: 23rem;height: 25.3rem " src="{{asset("assets/images/imagesqr.jpeg")}}" alt="">
           <div class="download_qr_code" style="position: absolute; top: 17px;left: 17px">
            {{App\Http\Controllers\QR::downloadQRCode($id)}} 
           </div>
        </div>
        <div>
            <br>
            <a href="" download="digital graveme mory.png" id="download_a" class="btn btn-warning  d-flex w-50" style="margin: 0 auto;justify-content:center">Download</a>
            <br>
           </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>

    function handle_download_qr(){
    html2canvas(document.getElementById('qr_img_mail')).then(canvas => {
        let convart_base_64 =  canvas.toDataURL('image/png')
         document.getElementById(`download_a`).href= convart_base_64;
    });
    }
    handle_download_qr();
  </script>
</body>
</html>