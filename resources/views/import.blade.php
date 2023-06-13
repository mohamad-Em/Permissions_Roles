<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(Session::has('success'))
    <h4>{{ Session::get('success') }}</h4>
    @endif
    <form action="{{ route('importSave') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <input type="file" name="file">
        </div>
        @error('file')
        <h5>{{ $message }}</h5>
        @enderror
        <input type="submit" value="save">
    </form>
</body>
</html>
