<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Kelola Mobil</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link href="../css/style.css" rel="stylesheet">
        {{-- <link rel="stylesheet" href="{{ asset('public/css/style.css') }}"> --}}
        {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}

    </head>
    <body class="mb-4">
        <h1 class="text-center mb-4">Daftar Mobil</h1>
        <div class="container">
            <a href="/tambahmobil" type="button" class="btn btn-primary">Tambah +</a>
            <div class="row">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
 {{ $message }}
</div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Mobil</th>
                            <th scope="col">No.Pol</th>
                            <th scope="col">Warna</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Harga Sewa</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
             
                    @php
                        $nomor=1;
                    @endphp

                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $nomor++ }}</th>
                        <td>{{ $row->id_mobil }}</td>
                        <td>{{ $row->no_polisi }}</td>
                        <td>{{ $row->warna }}</td>
                        <td>{{ $row->jenis }}</td>
                        <td>{{ $row->harga_sewa }}</td> 
                        <td>
                            <button type="button" class="btn btn-info">
                                Detail
                                  </button>
                                <a href="/tampilkandata/{{ $row->id_mobil }}" class="btn btn-success">
                                    Edit
                                </a>
                          
                                <a href="/delete/{{ $row->id_mobil }}" type="button" class="btn btn-danger">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div> 
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
{{-- @php
    $no = 1;
    foreach ($variable as $key => $value) {
        # code...
    }
    endforeach
@endphp --}}