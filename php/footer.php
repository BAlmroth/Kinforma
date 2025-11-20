<link rel="stylesheet" href="style.css">
    <section class="foot">
        <div class="newsletter" id="Newsletter">
            <h3>Följ vårt nyhetsbrev</h3>
        <form action="#Newsletter" method="post">
            <label for= "email"></label>
            <input type="email" name="email" placeholder="epost*">
        </div>
        <div class="footer-links">
            links
        </div>
        <div class="payment">
            betalning
        </div>
        <div class="copy">

        </div>
    </section>

    <script>
window.addEventListener("scroll", function() {
    const header = document.querySelector("header");
    if (window.scrollY > 810) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});
</script>

</body>
</html>