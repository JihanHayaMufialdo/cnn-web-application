@extends('layout.dashboard-dosen-layout')

@section('main')
    <video id="video" width="720" height="560" autoplay muted></video>
    <canvas id="canvas" width="720" height="560"></canvas>

    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
    <script src="https://cdn.jsdelivr.net/npm/@vladmandic/face-api@1/dist/face-api.js"></script>

    <script>
        // Mendapatkan elemen video dan canvas
        const video = document.getElementById('video');
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d');

        // Mengizinkan akses ke kamera pengguna
        navigator.mediaDevices.getUserMedia({
                video: {}
            })
            .then((stream) => {
                video.srcObject = stream;
            })
            .catch((err) => {
                console.error('Error accessing the camera:', err);
            });

        // Memuat model face-api.js dan melakukan face tracking
        Promise.all([
            faceapi.nets.blazeFace.load(),
            faceapi.nets.faceLandmark68Net.load()
        ]).then(async () => {
            // Memulai face tracking ketika video telah dimuat
            video.addEventListener('play', async () => {
                const displaySize = {
                    width: video.width,
                    height: video.height
                };
                faceapi.matchDimensions(canvas, displaySize);

                setInterval(async () => {
                    const detections = await faceapi.detectAllFaces(video, new faceapi
                        .BlazeFaceOptions()).withFaceLandmarks();
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                    ctx.drawImage(video, 0, 0, canvas.width, canvas.height);

                    // Menggambar hasil face tracking
                    detections.forEach((detection) => {
                        const box = detection.box;
                        const x = box._x;
                        const y = box._y;
                        const width = box._width;
                        const height = box._height;

                        // Menggambar kotak sebagai bingkai untuk setiap wajah yang terdeteksi
                        ctx.beginPath();
                        ctx.strokeStyle = 'blue'; // Warna garis kotak
                        ctx.lineWidth = 2; // Ketebalan garis kotak
                        ctx.rect(x, y, width, height);
                        ctx.stroke();

                        const landmarks = detection.landmarks._positions;
                        for (let i = 0; i < landmarks.length; i++) {
                            const x = landmarks[i]._x;
                            const y = landmarks[i]._y;

                            ctx.beginPath();
                            ctx.fillStyle = 'red';
                            ctx.arc(x, y, 1 /*radius*/ , 0, 2 * Math.PI);
                            ctx.fill();
                        }
                    });

                    console.log('Jumlah wajah terdeteksi:', detections
                        .length); // Menampilkan jumlah wajah terdeteksi pada console
                }, 100); // Interval waktu untuk face tracking
            });
        }).catch((err) => {
            console.error('Error loading face-api.js models:', err);
        });
    </script>
@endsection
