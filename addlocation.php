<!--Adds Locations-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">

    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Add Location</title>
</head>

<body class="signup">
    <div class="l-form">
        <div class="shape1"></div>
        <div class="shape2"></div>

        <div class="form">

            <form method="GET" entype="multipart/form-data" action="add_location.php" class="form__content signup">
                <h1 class="form_title"><span>Add Location</span></h1>

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
                        <i class='bx bx-location-plus'></i>
                    </div>

                    <div class="form__div-input">
                        <label for="" class="form__label">Latitude</label>
                        <input name="lat" type="text" class="form__input">
                    </div>
                </div>


                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-location-plus'></i>
                    </div>

                    <div class="form__div-input">
                        <label for="" class="form__label">Longitude</label>
                        <input name="long" type="text" class="form__input">
                    </div>
                </div>

                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-calendar'></i>
                    </div>

                    <div class="form__div-input">
                        <label for="" class="form__label"></label>
                        <input name="date" type="date" class="form__input">
                    </div>
                </div>
                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-time'></i>
                    </div>

                    <div class="form__div-input">
                        <label for="" class="form__label"></label>
                        <input name="time" type="time" class="form__input">
                    </div>
                </div>



                <input type="submit" class="form__button" value="Next">

            </form>
        </div>

    </div>

    <script src="mi.js"></script>
</body>

</html>