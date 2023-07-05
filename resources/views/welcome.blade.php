    @extends('layouts.master')
    @section('konten')
    <script>
        navigator.serviceWorker.register('{{asset('sw.js')}}');
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
                            fetch("admin/push-subscribe", {
                                method: "post",
                                headers: {
                                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                body:JSON.stringify(subscription)
                            }).then( alert("ok") );
                        });
                    });
                }
            });
        }
    </script>
    <div class="m-4">
        <button onclick="requestPermission()" class="btn btn-primary btn-sm">Enable Notification</button>
        <form onsubmit="return confirm('Yakin akan menghapus data?')" class="d-inline" action="{{url ('/destroy')}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" name="submit"class="btn btn-danger btn-sm">Disable Notification</button>
        </form>
        <a href="{{ url('/admin/webhookNotif') }}" class="btn btn-success btn-sm">Test Notifikasi Otomatis</a>
        <a href="{{ url('/admin/notify') }}">Kirim Notifikasi Manual</a>       
    </div>
    
    @endsection