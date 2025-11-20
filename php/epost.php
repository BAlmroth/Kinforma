  <section id="epostsub" class="epost">
    <div class="epost-container">
      <div class="exclusive">
        <span> Exclusive membership </span>
      </div>
      <h2>Gå med i Kinforma Circle.</h2>
      <h3>Köp ett plagg – få tillgång till livslång omsorg, förköp och rösträtt i nästa släpp.</h3>
      <div class="epost-ul">
        <ul>
          <li>Påverka designen: rösta på färger, moduler och drops.</li>
          <li>Möt andra: lokala träffar, arkivkvällar.</li>
        </ul>
      </div>
      <div class="epost-input">
        <h3>Skriv in din e-post</h3>
        <form action="#epostsub" method="post">
        <label for= "email"></label>
        <input type="email" name="email" placeholder="namn.efternamn@kinmail.com">
        <button type="submit">Gå med</button>
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

