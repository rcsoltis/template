<!doctype html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta charset="utf-8">
    <meta name="author" content="cary soltis">

    <title>Title | Event</title>

    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/helper.css" rel="stylesheet" type="text/css">
    <link href="css/grid.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>

    <?php include 'includes/nav.inc.html.php';?>
    <?php include 'includes/header.inc.html.php';?>

    <main>
        <section>
            <h2>Heading 2 (h2)</h2>
            <div class="section group">
                <p class="col span_6_of_12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p class="col span_6_of_12">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </section>
        <div class="section group">
            <section class="col span_6_of_12" id="event">
                <h2>Heading 2 (h2)</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </section>

            <section class="col span_6_of_12">
                <h2>Heading 2 (h2)</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </section>
        </div>
        <section id="register">
            <h2>Heading 2 (h2)</h2>
            <form action="">
                <label>First name:</label><input type="text" name="fname"><br>
                <label>Last name:</label><input type="text" name="lname"><br>
                <label>E-mail:</label><input type="email" name="lname"><br>
                <label>Emergency Contact:</label><input type="text" name="lname"><br>
                <label>Any Accom?:</label><input type="text" name="lname"><br>

                <label>Age:</label>
                <label>(select)</label><input type="radio"><br>
                <label>Gender ID:</label>
                <label>(select)</label><input type="radio"><br>
                <label>Race Type:</label>
                <label>(select)</label><input type="radio"><br>
                <label>Role:</label>
                <label>(select)</label><input type="radio"><br>


                <input type="submit" value="Submit">

            </form>

        </section>

        <div class="section group">

            <section class="col span_6_of_12">
                <h2>Heading 2 (h2)</h2>
                <ul>
                    <li>FAQ</li>
                    <li>FAQ</li>
                    <li>FAQ</li>
                    <li>FAQ</li>
                    <li>FAQ</li>
                </ul>
            </section>

            <section class="col span_6_of_12" id="images">
                <h2>Heading 2 (h2)</h2>
                <img src="images/grey-rectangle.png">(Image Gallery)
            </section>
        </div>
    </main>
    <!--<footer>
        <h3>Header (h3)</h3>

        <form id="contact" action="">
            <label>First name:</label><input type="text" name="fname">
            <label>Last name:</label><input type="text" name="lname">
            <label>Question or Comment?</label><textarea rows="6"></textarea><br>
            <label>Role:</label>
            <label>(select)</label><input type="radio"><br>
            <input type="submit" value="Submit">
        </form>
        <div class="section group">
            <aside class="col span_4_of_12">
                <div class="fb-page" data-href="https://www.facebook.com/cas222cascade/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/cas222cascade/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cas222cascade/">CAS 222</a></blockquote>
                </div>
            </aside><br>
            <aside class="col span_4_of_12">
                <a class="twitter-timeline" data-width="340" data-height="500" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </aside>
            <aside class="col span_4_of_12">
                <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="original">PORTLAND WEATHER</a>
                <script>
                    ! function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = 'https://weatherwidget.io/js/widget.min.js';
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, 'script', 'weatherwidget-io-js');

                </script>
                <p>Copyright&copy;<?php echo date("Y");?> Ace in the Hole</p>
                <img src="images/Triathlon_all_3_stages_pictogram.svg" alt="triathlon logo" height="160px" width="160px">
            </aside>
        </div>
    </footer> -->
<?php include 'includes/footer.inc.html.php';?>
    <!--Link to external JavaScript stylesheet for nav-->

    <script src="js/style.js">
    </script>
</body>

</html>
