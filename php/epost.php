  <section id="epostsub" class="epost">
    <div class="epost-container">
      <h2>GÅ MED I VÅR KINMUNITY</h2>
      <p>Köp ett plagg – få tillgång till livslång omsorg, förköp och rösträtt i nästa släpp.</p>
      <div class="epost-ul">
        <ul>
          <li>Påverka designen: rösta på färger, moduler och drops.</li>
          <li>Möt andra: lokala träffar, arkivkvällar.</li>
        </ul>
      </div>
      <div class="epost-input">
        <div class="form">
          <h5>SKRIV IN DIN E-POST</h5>
          <form action="#epostsub" method="post">
            <label for= "email"></label>
            <input type="email" name="email" placeholder="namn.efternamn@kinmail.com">
        </div>
        <button type="submit">SKICKA <img src="images/dot.svg"></button>
        </form>
        <?php 

        if (isset($_POST['email']) && $_POST['email'] != ""){
            $email = $_POST['email']; ?>
        <p> <?= "Tack för att du vill vara en del av vår resa! Du kommer att få ett välkomstmail till $email inom kort.";?> </p>
        <?php }
        ?>  
        </div> 
    </div>
  </section> 

