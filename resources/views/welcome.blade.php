<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Upload Image</title>
    
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">    
            
    {!!Html::style('/css/bootstrap.min.css')!!} 
    {{-- {!!Html::style('/css/dropzone.css')!!}  --}}
    {!!Html::style('/css/upload.css')!!}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">       
    
    {!!Html::script('/js/jquery-3.2.1.js')!!}
    {!!Html::script('/js/bootstrap.min.js')!!}
    {!!Html::script('/js/dropzone.js')!!}         

</head>

<body>

    <div align="center" class="container"> 

        <hr>

        <div align="center" class="parrafo">
            
            <h4>Hello! Welcome to this example of how to upload an Image to the server, store its path into the database and show the uploaded files using <strong>Laravel</strong> Project</h4>                           

        </div>             

        <div align="center" class="columna">

            <h1 id="try-it-out">Try it out!</h1>            

            <form method="POST" action="/upload" id="demo-upload" enctype="multipart/form-data">

                {{ csrf_field() }}

                <input type="file" name="img"/>                           

                <br>

                <button class="btn btn-primary">Upload</button>

            </form>
        
        </div> 
                
        <hr>

    </div>

    @if($countFiles >= 1)

        <div align="center" class="container">
            
            <h4>Uploaded Images</h4>
            
            <ul>
                @foreach($uploads as $upload)
                    <li><img src="{{ $upload->img }}"></li>
                @endforeach
            </ul>

        </div>

    @endif
    
</body>
</html>