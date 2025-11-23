<link rel="stylesheet" href="style.css">
<footer>
    <div class="upper-foot">
        <div class="newsletter" id="newsletters">
            <h2>Håll dig uppdaterad</h2>
            <form action="#newsletters" method="post">
                <div class="mail">
                    <input type="email" name="news" placeholder="epost*">
                    <button type="submit">></button>
                </div>
                <div class="useragreements">
                    <input type="checkbox" name="terms" id="terms">
                    <label for="terms">Jag har läst och accepterat <a href="">användarvillkoren</a></label>
                </div>
            </form>
            <?php

            if (isset($_POST['news']) && isset($_POST['terms'])) {
                $news = $_POST['news'];
                $terms = $_POST['terms']; ?>
                <small> <?= "Klart!"; ?> </small>
                <small> Tryck <a href="">här</a> för att avprenumerera</small>

            <?php }
            ?>
        </div>
        <div class="links">
            <div class="link">
                <h3>Kundservice</h3>
                <button type="button">+</button>
            </div>
            <div class="link">
                <h3>Kinforma</h3>
                <button type="button">+</button>
            </div>
        </div>
        <div class="socials">
            <h3>Följ oss</h3>
            <img src="images/instagram.svg" alt="instagram icon">
            <img src="images/facebook.svg" alt="facebook icon">
            <img src="images/linkedin.svg" alt="linkdin icon">
        </div>
    </div>
    <div class="lower-foot">
        <div class="payments">
            <h3>SE/SEK</h3>
            <img src="images/glob.svg" alt="sek icon">
            <img src="images/klarna.svg" alt="klarna icon">
            <img src="images/visa.svg" alt="visa icon">
            <img src="images/master.svg" alt="mastercard icon">
        </div>
        <div class="copy">
            <small>&copy; Kinforma</small>
            <small> <a href="">cookieinställningar</a></small>
        </div>

    </div>
</footer>

<script src="/script.js"></script>


</body>

</html>