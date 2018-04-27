<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <center>
          <h2>Selamat Datang di <br>
              Sistem Informasi Praktek Kerja Langsung <br>
              Jurusan Teknologi Informasi <br>
              Politeknik Negeri Samarinda</h2>
      </center>

      <br><br><br>
        <form action="{{route('login')}}" method="get">
          <div class="row text-center">
            <div class="col-md-offset-4 col-md-1">
              <button class="btn btn-info" type="submit" name="button" value="{{md5('mahasiswa')}}">
                Mahasiswa
              </button>
            </div>
            <div class="col-md-1">
              <button class="btn btn-warning" type="submit" name="button" value="{{md5('dosen')}}">
                Dosen
              </button>
            </div>
            <div class="col-md-1">
              <button class="btn btn-success" type="submit" name="button" value="{{md5('perusahaan')}}">
                Perusahaan
              </button>
            </div>

          </div>
        </div>
      </form>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
