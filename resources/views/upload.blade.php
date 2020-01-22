<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Subir Imagenes</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        .file-upload-form,
        .image-preview {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            padding: 20px;
        }

        img.preview {
            width: 200px;
            background-color: white;
            border: 1px solid #DDD;
            padding: 5px;
        }

    </style>
</head>
<body>

    <div class="container py-3" id="app">
        <h3 class="text-center">Subir Imagenes</h3>
        <form action="{{route('upload.store')}}" @change="previewImage" class="file-upload-form" method="POST" enctype=multipart/form-data>
            @csrf
            <label>Imagenes</label>
            <input type="file" name="avatar[]" class="btn btn-outline-success" accept="image/*" multiple>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        <div class="image-preview row" v-if="imageData.length > 0">
            <div v-for="item in imageData" class="py-2">
                <div class="col-md-2">
                    <img class="preview" :src="item">
                </div>
            </div>
        </div>
    </div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>