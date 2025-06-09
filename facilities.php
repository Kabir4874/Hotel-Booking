<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Hotel - Facilities</title>

    <?php require('inc/links.php'); ?>

    <style>
        .pop:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s ease;
        }
    </style>
</head>

<body class="bg-light">
    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit eos unde vero aperiam quam aspernatur cum accusamus enim ea nulla!</p>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/IMG_43553.svg" alt="wifi" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas cupiditate facilis veniam molestias? Commodi, enim.</p>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>