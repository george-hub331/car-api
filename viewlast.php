<!--view last x locations of a car-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">

    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>View Last Locations</title>
</head>

<body class="signup">
    <div class="l-form">
        <div class="shape1"></div>
        <div class="shape2"></div>

        <div class="form">

            <form method="GET" entype="multipart/form-data" action="last_known.php" class="form__content signup">
                <h1 class="form_title"><span>View Last Locations</span></h1>

                <div class="form__div form__div-one <?php echo isset($_GET['mode']) ? 'focus' : ''; ?>">
                    <div class="form__icon">
                        <i class='bx bx-user'></i>
                    </div>

                    <div class="form__div-input">
                        <label for="" class="form__label">Unique Id</label>
                        <input name="id" type="text" <?php echo isset($_GET['mode']) ? 'value="' . $_GET['mode'] . '"' : ''; ?> class="form__input">
                    </div>
                </div>


                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-map-pin'></i>
                    </div>

                    <div class="form__div-input">
                        <label for="" class="form__label">Last X Locations</label>
                        <input name="num" type="text" class="form__input">
                    </div>
                </div>


                <input type="submit" class="form__button" value="Next">

            </form>
        </div>

    </div>

    <script src="mi.js"></script>
</body>

</html>