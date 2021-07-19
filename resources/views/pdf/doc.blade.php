<html lang="en">
<head>    
    <title>Descarga de PDF</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
</head>
<body>
    <form action="{{ url('/data')}}" method="post" enctype="multipart/form-data">
        @csrf
    
        <div class="container">
            <div class="row justify-content-center">
                <!-- Material form login -->
                <div class="card col-sm-6">
                    <div class="  info-color row" >
                        <h5 class="white-text text-center py-4">
                            <strong>ID a Buscar</strong>
                          </h5>
                    </div>
                  <!--Card content-->
                  <div class="card-body px-lg-5 pt-0">
                    <!-- Form -->
                    <div class="text-center" style="color: #757575;">
                      
                      <div class="md-form">
                        <input type="number" class="form-control @error('Valor') is-invalid @enderror" name="id" id="id" ><br>
                        <label for="Valor">Valor de Prestamo </label>
                        @error('Valor')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      
                      
                      
                    
                    
                      <!-- Sign in button -->
                      <input type="submit" value="Guardar" id="Enviar" class="btn btn-outline-info btn-rounded  my-4 waves-effect z-depth-0">
                      <a href="{{ url('/') }}" class="btn btn-outline-info btn-rounded  my-4 waves-effect z-depth-0">Cancelar</a>
    
                    </div>
                    <!-- Form -->
                  </div>
                </div>
                <!-- Material form login -->
        </div>
        </div>
    
    
    </form>
    
</body>
</html>