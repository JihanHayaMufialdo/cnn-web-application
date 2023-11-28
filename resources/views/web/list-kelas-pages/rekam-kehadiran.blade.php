@extends('layout.dashboard-dosen-layout')

@section('main')
    <video id="camera-view" width="640" height="480" autoplay></video>

    <script>
        // menyalakan kamera
        async function startCamera() {
            try {
                const stream = await navigator.mediaDevices.getUserMedia({
                    video: true
                });
                const videoElement = document.getElementById('camera-view');
                videoElement.srcObject = stream;
            } catch (err) {
                console.error('Error accessing the camera:', err);
            }
        }

        // memulai kamera
        window.onload = startCamera;
    </script>
@endsection
