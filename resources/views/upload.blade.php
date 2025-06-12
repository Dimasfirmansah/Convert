<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>JPG ke PDF Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/upload.css') }}">
</head>

<body>
    <div class="upload-container">
        <h1 class="text-white">Upload JPG ke PDF</h1>
        <div class="drop-area" id="drop-area">
            <p class="text-white">Klik atau seret file JPG ke sini</p>
        </div>

        <form id="upload-form" action="{{ route('convert') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" id="file-input" name="images[]" multiple accept=".jpg,.jpeg,.png">
            <div id="preview"></div>
            <button type="submit" id="submit-btn" class="btn btn-primary mt-3">Convert to PDF</button>
        </form>
    </div>


    <script src="{{ asset('js/upload.js') }}"></script>
</body>

</html>
