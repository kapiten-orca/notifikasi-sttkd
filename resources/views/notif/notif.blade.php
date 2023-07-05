<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        navigator.serviceWorker.register("sw.js");

        function requestPermission() {
            Notification.requestPermission().then((permission) => {
                if (permission === 'granted') {
                    
                    // get service worker
                    navigator.serviceWorker.ready.then((sw) =>{
                        
                        // subscribe
                        sw.pushManager.subscribe({
                            userVisibleOnly: true,
                            applicationServerKey:"BC5zel9JoqeOY2yVTJjDhiE1IisJTVHq-_p4rxC3zd60gQSqXzra_7_m7B12axwI42tZIUXYGXhIJ-t5MolKjNY"
                        }).then((subscription) => {

                            // subscription successful
                            fetch("/api/push-subscribe", {
                                method: "post",
                                body:JSON.stringify(subscription)
                            }).then( alert("ok") );
                        });
                    });
                }
            });
        }
    </script>
    <button onclick="requestPermission()">Enable Notification</button>
    <a href="{{ url('/admin/notify') }}">Kirim Notifikasi Manual</a>       
    <button onclick="document.location='data-dumy'">Masukan Data Dumy</button>
    <a href="{{ url('/admin/webhookNotif') }}">Test Notifikasi Otomatis</a>
    <form onsubmit="return confirm('Yakin akan menghapus data?')" class="d-inline" action="{{url ('/destroy')}}" method="POST">
        @csrf
        @method('DELETE')
    <button type="submit" name="submit"class="btn btn-danger btn-sm">Disable Notification</button>
    </form>
</body>
</html>