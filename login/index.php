<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login To Nevoting</title>
    <link rel="stylesheet" href="../assets/css/bulma.min.css">
</head>
<body>
    <section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                    <div class="has-text-centered" style = "margin-bottom: 30px">
                        <figure class="image container is-96x96" style="margin-bottom: 10px">
                            <img src="../assets/images/nesas.png">
                        </figure>
                        <h1 class = "is-size-4">Selamat Datang</h1>
                        Pastikan anda memilih dengan benar dan tidak ada paksaan ataupun dorongan dari orang lain.
                    </div>
                    <form action="validation.php" method="POST">
                        <div class="field">
                            <div class="control">
                                <input name="nis" type="text" placeholder="Masukkan NIS anda" class="input" required>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input name="password" type="password" placeholder="Masukkan password anda" class="input" required>
                            </div>
                        </div>
                        <div class="field">
                            <button type="submit" class="button is-warning has-text-white is-fullwidth">
                                MASUK
                            </button>
                        </div>
                        <?php 
                            if(isset($_GET['code'])){
                                if($_GET['code'] == 2){
                                    echo "
                                        <div class='field'>
                                            <div class='notification is-success'>
                                                Berhasil logout.
                                            </div>
                                        </div>
                                    ";
                                } else if($_GET['code'] == 1){
                                    echo "
                                        <div class='field'>
                                            <div class='notification is-danger'>
                                                NIS atau password salah.
                                            </div>
                                        </div>
                                    ";
                                }
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
</body>
</html>