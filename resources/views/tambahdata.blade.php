<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Tambah Data Mobil</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form
                                action="/insertdata"
                                method="post"
                                enctype="multipart/form-data"
                            >
                                @csrf
                                
                                <div class="mb-3">
                                    <label
                                        for="idmobil"
                                        class="form-label"
                                        >Id Mobil</label
                                    >
                                    <input
                                        name="idmobil"
                                        type="text"
                                        class="form-control"
                                        id="idmobil"
                                        aria-describedby="emailHelp"
                                        value="{{ 'MO' }}"
                                        @required(true)
                                        {{-- @disabled(true) --}}
                                    />
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="nopol"
                                        class="form-label"
                                        >No Polisi</label
                                    >
                                    <input
                                        name="nopol"
                                        type="text"
                                        class="form-control"
                                        id="nopol"
                                        aria-describedby="emailHelp"
                                        @required(true)
                                    />
                                </div>
                                <div class="mb-3">
                                    <label
                                        for="warna"
                                        class="form-label"
                                        >Warna</label
                                    >
                                    <select
                                        name="warna"
                                        class="form-select form-select-lg mb-3"
                                        aria-label="Large select example"
                                    >
                                        <option selected>Warna</option>
                                        <option value="Hitam">Hitam</option>
                                        <option value="Putih">Putih</option>
                                        <option value="Kuning">Kuning</option>
                                        @required(true)
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="jenis"
                                        class="form-label"
                                        >Jenis</label
                                    >
                                    <input
                                        name="jenis"
                                        type="text"
                                        class="form-control"
                                        id="jenis"
                                        aria-describedby="emailHelp"
                                        @required(true)
                                    />
                                </div>
                                <div class="mb-3">
                                    <label
                                        for="hargasewa"
                                        class="form-label"
                                        >Harga Sewa</label
                                    >
                                    <input
                                        name="hargasewa"
                                        type="number"
                                        class="form-control"
                                        id="hargasewa"
                                        aria-describedby="emailHelp"
                                        @required(true)
                                    />
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
