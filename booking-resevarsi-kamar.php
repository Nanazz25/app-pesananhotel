<?php
include_once('templates/header.php');
?>


<main id="main" class="main">

    <div class="card shadow mb-4">
        <div class="card-body">
            <h5 class="card-title">Resevarsi Kamar Hotel</h5>

            <!-- Horizontal Form -->
            <form>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">No. Identitas</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">No. Telp</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputTelp">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Check In</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="checkIn">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Check Out</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="checkOut">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Tipe Kasur</label>
                    <div class="col-sm-10">
                        <select id="inputState" class="form-select">
                            <option selected>...</option>
                            <option>Single Bed</option>
                            <option>Twin Bed</option>
                            <option>Double Bed</option>
                            <option>King Size</option>
                        </select>
                    </div>
                </div>

                <div class="col d-flex flex-column mb-3">
                    <label for="" class="col-sm-2 col-form-label">Pilih Kamar</label>

                    <!-- Bagian A -->
                    <div class="row g-1 mb-1">
                        <div class="col">
                            <label for="" class="form-check-label">A1</label>
                            <input type="checkbox" class="form-check-input">
                        </div>
                        <div class="col">
                            <label for="" class="form-check-label">A2</label>
                            <input type="checkbox" class="form-check-input">
                        </div>
                        <div class="col">
                            <label for="" class="form-check-label">A3</label>
                            <input type="checkbox" class="form-check-input">
                        </div>
                        <div class="col">
                            <label for="" class="form-check-label">A4</label>
                            <input type="checkbox" class="form-check-input">
                        </div>
                        <div class="col">
                            <label for="" class="form-check-label">A5</label>
                            <input type="checkbox" class="form-check-input">
                        </div>
                        <div class="col">
                            <label for="" class="form-check-label">A6</label>
                            <input type="checkbox" class="form-check-input">
                        </div>
                        <div class="col">
                            <label for="" class="form-check-label">A7</label>
                            <input type="checkbox" class="form-check-input">
                        </div>
                        <div class="col">
                            <label for="" class="form-check-label">A8</label>
                            <input type="checkbox" class="form-check-input">
                        </div>
                        <div class="col">
                            <label for="" class="form-check-label">A9</label>
                            <input type="checkbox" class="form-check-input">
                        </div>
                        <div class="col">
                            <label for="" class="form-check-label">A10</label>
                            <input type="checkbox" class="form-check-input">
                        </div>
                    </div>

                    <!-- Bagian B -->
                    <div class="row g-1 mb-3">
                        <div class="col">
                            <label for="" class="form-check-label">B1</label>
                            <input type="checkbox" class="form-check-input">
                        </div>
                        <div class="col">
                            <label for="" class="form-check-label">B2</label>
                            <input type="checkbox" class="form-check-input">
                        </div>
                        <div class="col">
                            <label for="" class="form-check-label">B3</label>
                            <input type="checkbox" class="form-check-input">
                        </div>
                        <div class="col">
                            <label for="" class="form-check-label">B4</label>
                            <input type="checkbox" class="form-check-input">
                        </div>
                        <div class="col">
                            <label for="" class="form-check-label">B5</label>
                            <input type="checkbox" class="form-check-input">
                        </div>
                        <div class="col">
                            <label for="" class="form-check-label">B6</label>
                            <input type="checkbox" class="form-check-input">
                        </div>
                        <div class="col">
                            <label for="" class="form-check-label">B7</label>
                            <input type="checkbox" class="form-check-input">
                        </div>
                        <div class="col">
                            <label for="" class="form-check-label">B8</label>
                            <input type="checkbox" class="form-check-input">
                        </div>
                        <div class="col">
                            <label for="" class="form-check-label">B9</label>
                            <input type="checkbox" class="form-check-input">
                        </div>
                        <div class="col">
                            <label for="" class="form-check-label">B10</label>
                            <input type="checkbox" class="form-check-input">
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </form><!-- End Horizontal Form -->

        </div>
    </div>

</main><!-- End #main -->


<?php
include_once('templates/footer.php');
?>