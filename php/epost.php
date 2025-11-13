  <section id="epostsub" class="epost">
    <div class="epost-container">
      <h2>Gå med i Kinforma Circle.</h2>
      <h3>Köp ett plagg – få tillgång till livslång omsorg, förköp och rösträtt i nästa släpp.</h3>
      <ul>
        <li>Påverka designen: rösta på färger, moduler och drops.</li>
        <li>Möt andra: lokala träffar, arkivkvällar.</li>
      </ul>
      <div class="epost-input">
        <h3>Skriv in din e-post</h3>
        <form action="#epostsub" method="post">
        <label for= "email"></label>
        <input type="email" name="email" placeholder="e-post">
        <button type="submit">Gå med</button>
        <?php 

        if (isset($_POST['email']) && $_POST['email'] != ""){
            $email = $_POST['email']; ?>
        <p> <?= "Tack för att du vill vara en del av vår resa! Du kommer att få ett välkomstmail till $email inom kort.";?> </p>
        <?php }
        ?>  
      </div>
    </div>
  </section> 

