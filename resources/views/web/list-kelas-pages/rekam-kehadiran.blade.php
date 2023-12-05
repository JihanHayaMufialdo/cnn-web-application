@extends('layout.dashboard-dosen-layout')

@section('main')
    <video id="camera-view"></video>
    <button id="capture"
        class="bottom-5 left-5 active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">Take</button>
    <canvas id="output" class="hidden"></canvas>
    <img id="result">
    <script>
        const [camera_view, output, capture, result] = [
            document.getElementById('camera-view'),
            document.getElementById('output'),
            document.getElementById('capture'),
            document.getElementById('result')
        ];

        navigator.mediaDevices.getUserMedia({
            audio: false,
            video: {
                width: 360,
                height: 360
            }
        })
        .then((stream) => {
            camera_view.srcObject = stream;
            camera_view.play();
        })
        .catch((err) => {
            console.error(err);
        });

        capture.addEventListener('click', () => {
            const context = output.getContext('2d');
            const randomFileName = 'captured_image_' + Math.random().toString(36).substring(2, 8) + '.png';

            output.width = 360;
            output.height = 360;

            context.drawImage(camera_view, 0, 0, output.width, output.height);
            result.src = output.toDataURL();
            console.log(camera_view);

            // Menyimpan gambar ke localStorage
            try {
                localStorage.setItem(randomFileName, result.src);
                alert('Image saved locally!');
            } catch (e) {
                console.error('LocalStorage is full or not available:', e);
            }
        });
    </script>
@endsection
