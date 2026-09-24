<?php

include __DIR__ . '/../config/database.php';

// Contoh query
$query = mysqli_query($conn, "SELECT * FROM education");

if (!$query) {
    die("Query gagal: " . mysqli_error($conn));
}
?>

<!-- =========================
     BIODATA
========================= -->

<section class="biodata-section" id="biodata">

    <div class="container">

        <div class="biodata-box">


            <!-- =========================
                 FOTO
            ========================= -->

            <div class="biodata-photo">

                <img src="albert.jpeg" class="profile-photo" alt="Foto Albert">

            </div>


            <!-- =========================
                 DATA DIRI
            ========================= -->

            <div class="biodata-content">

                <p class="biodata-title">
                    About Me
                </p>


                <h2>
                    BIODATA <span>DIRI</span>
                </h2>


                <p class="biodata-description">

                    Halo, perkenalkan nama saya Albert Wahyu.
                    Saya adalah mahasiswa yang sedang belajar
                    dan mengembangkan kemampuan di bidang teknologi.

                </p>


                <!-- =========================
                     DATA BIODATA
                ========================= -->

                <div class="biodata-data">


                    <!-- NAMA -->

                    <div class="data-row">

                        <span>Nama</span>

                        <strong>
                            Albert Wahyu Wibisono
                        </strong>

                    </div>


                    <!-- NIM -->

                    <div class="data-row">

                        <span>NIM</span>

                        <strong>
                            20242002
                        </strong>

                    </div>


                    <!-- TEMPAT TANGGAL LAHIR -->

                    <div class="data-row">

                        <span>Tempat, Tanggal Lahir</span>

                        <strong>
                            Sukoharjo, 9 Juli 2005
                        </strong>

                    </div>


                    <!-- JENIS KELAMIN -->

                    <div class="data-row">

                        <span>Jenis Kelamin</span>

                        <strong>
                            Laki-laki
                        </strong>

                    </div>


                    <!-- PROGRAM STUDI -->

                    <div class="data-row">

                        <span>Program Studi</span>

                        <strong>
                            Mechatronics
                        </strong>

                    </div>


                    <!-- =========================
                         RIWAYAT PENDIDIKAN
                    ========================= -->

                    <div class="data-row">

                        <span>Riwayat Pendidikan</span>

                        <strong>

                            <?php

                            if (mysqli_num_rows($result) > 0) {

                                while ($education = mysqli_fetch_assoc($result)) {

                                    ?>

                                    <?php echo $education['school']; ?>

                                    -

                                    <?php echo $education['major']; ?>

                                    (<?php echo $education['year']; ?>)

                                    <br>

                                    <?php

                                }

                            } else {

                                echo "Belum ada data pendidikan";

                            }

                            ?>

                        </strong>

                    </div>


                </div>

            </div>

        </div>

    </div>

</section>