

<?php

$empty_404 = <<<EOT
<section class="d-flex align-items-center mt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-md-2">
                <div class="lc-block">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_kcsr6fcp.json" background="transparent" speed="1" loop="" autoplay=""></lottie-player>
                </div>
            </div>
            <div class="col-md-6 text-center text-md-start ">
                <div class="lc-block mb-3">
                    <div editable="rich">
                        <h1 class="fw-bold h4">PAGE NOT FOUND!<br></h1>
                    </div>
                </div>
                <div class="lc-block mb-3">
                    <div editable="rich">
                        <h1 class="display-1 fw-bold text-muted">Coming soon...</h1>

                    </div>
                </div>
                <div class="lc-block mb-5">
                    <div editable="rich">
                        <p class="rfs-11 fw-light"> The page you are looking for was moved, removed, might never existed, or is not available yet.</p>
                    </div>
                </div>
                <div class="lc-block">
                    <a class="btn btn-lg btn-success" href="index.php" role="button">Back to Homepage</a>
                </div>
            </div>
        </div>
    </div>
</section>
EOT;

echo $empty_404;
?>