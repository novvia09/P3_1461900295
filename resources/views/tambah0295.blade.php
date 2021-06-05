<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Siswa</title>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">
        <script
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        
    </head>

    <body>
        <div class="container">
            <div class="col-md-12">
              <a href="/">Kembali</a>
               <form action="/siswa/store" method="POST">
                  {{ csrf_field() }}                                  
                  <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama</label>                    
                    <input type="text" name="nama" required="required">
                  </div>
                  <div class="form-group">
                    <label for="alamat" class="col-sm-2 control-label">Alamat</label>            
                    <input type="text" name="alamat" required="required">        
                  </div>
                  <div class="form-group">
                    <label for="pelajaran" class="col-sm-2 control-label">Pelajaran</label>               
                    <select id="cars" name="pelajaran">
                      @foreach($data as $key => $value)
                      <option value="{{ $value->mengajar }}">{{ $value->mengajar }}</option>
                      @endforeach
                    </select> 
                  </div>
                  <br/>
                  <input type="submit" value="Save">           
               </form>
            </div>
        </div>
    </body>
</html>