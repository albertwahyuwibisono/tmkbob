<?php

include __DIR__ . '/../config/database.php';

$query = mysqli_query($conn, "SELECT * FROM contact");

if (!$query) {
    die("Query gagal: " . mysqli_error($conn));
}

?>

<!-- =========================
     CONTACT
========================= -->

<section class="section" id="contact">

    <div class="container">

        <div class="section-title">

            <h2>
                Contact <span>Us</span>
            </h2>

            <p>
                Hubungi kami melalui media sosial
            </p>

        </div>

        <div class="text-center social-icons">

            <?php while ($row = mysqli_fetch_assoc($query)) { ?>

                <a 
                    href="<?= htmlspecialchars($row['url']); ?>" 
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    <i class="bi <?= htmlspecialchars($row['icon']); ?>"></i>
                </a>

            <?php } ?>

        </div>

    </div>

</section>
```