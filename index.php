<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/assets/css/main.css">
    <title>Math PB</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="./src/assets/img/kvks.png" alt="logo">
            </div>
        </nav>
    </header>
    <div class="main-container">
        <center>
            <form method="Post">
                <div class="form-box">
                    <p class="white b-2">Student Survey</p>
                    <div class="user-box">
                        <input required name="user-email" type="text">
                        <label class="ani-label">Email</label>
                    </div>
                    <div class="user-box">
                        <input required name="user-name" type="text">
                        <label class="ani-label">Nama Penuh</label>
                    </div>
                    <div class="user-box">
                        <input required name="user-name" type="text">
                        <label class="ani-label">Kelas</label>
                    </div>
                    <div class="user-box">
                        <label class="ani-label">Jenis Telco</label>
                        <br>
                        <p class="reminder">Anda boleh memililh lebih dari satu telco</p>
                        <div class="telco-selector">
                            <div class="input">
                                <input  type="checkbox" name="celcom" id="checkbox">
                                <!-- celcom -->
                                <label for="celcom">Celcom</label><br>
                            </div>
                            <div class="input">
                                <input type="checkbox" name="digi" id="checkbox">
                                <label for="digi">Digi</label><br>
                            </div>
                            <div class="input">
                                <input type="checkbox" name="umobile" id="checkbox">
                                <label for="umobile">Umobile</label><br>
                            </div>
                        </div>
                        <br>
                    </div>
                    <a href="#">
                    <input class="submit-btn" type="submit" value="Submit">
                    </a>
                </div>
            </form>
        </center>
    </div>
</body>
</html>