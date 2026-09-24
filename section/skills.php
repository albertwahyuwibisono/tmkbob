<?php

include __DIR__ . '/../config/database.php';

$query = "SELECT * FROM skills";
$result = mysqli_query($conn, $query);

?>

<!-- =========================
     SKILLS
========================= -->

<section class="section" id="about">

    <div class="container">

        <div class="section-title">

            <h2>
                about <span>Us</span>
            </h2>

            <p>
                Mechatronics Skills
            </p>

        </div>


        <div class="row g-4">

            <?php while ($skill = mysqli_fetch_assoc($result)) { ?>

                <div class="col-md-4">

                    <div class="skill-card">

                        <img
                            src="<?php echo $skill['img']; ?>"
                            alt="<?php echo $skill['title']; ?>"
                            class="skill-image"
                            style="height: 250px;"
                        >

                        <h3>
                            <?php echo $skill['title']; ?>
                        </h3>

                        <p>
                            <?php echo $skill['description']; ?>
                        </p>

                    </div>

                </div>

            <?php } ?>

        </div>

    </div>

</section>