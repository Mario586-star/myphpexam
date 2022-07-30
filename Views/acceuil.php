<div class="tete">

<h1 style="margin-top: 70px;"></h1>  

 <section class="mb-5">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <img src="/mine/PHP/assets/img/logo.png" alt="logo">
        </div>
      </div>

      <div class="col-md-12">
        <h1>
          Bienvenue à 
        </h1>

        <p class="tagline">
        ESTI
        </p>
        <a class="btn btn-success rounded" href="#features">Accedez au menu</a>
      </div>
    </div>
  </section>

</div>
<?php 
if (isset($_SESSION["status"])) {
  echo $_SESSION["status"];  
}
?>


<section class="features" id="features">
    <div class="container">
      <h2 class="text-center">
        MENU
      </h2>

      <div class="row">
        <div class="feature-col col-lg-5 offset-lg-1 col-xs-12">
          <div class="card card-block text-center border-dark">
            <div>
            <a href="index.php?page=Ctrl_etudiants" class="text-dark">
              <div class="feature-icon">
              <img class="bg-dark rounded-circle mt-1" src="/mine/PHP/assets/img/Nos_etudiant.png" alt="img" style="width: 80px;">
              </div>
            </div>
            <div>
              <h3>
                NOS ETUDIANTS 
              </h3></a>
              <p>
                Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
              </p>
            </div>
          </div>
        </div>

        <div class="feature-col col-lg-5 col-xs-12">
          <div class="card card-block text-center border-warning">
            <div>
            <a <?php if ($_SESSION["status"] != 'etudiant') {?>href="index.php?page=Ctrl_profs" class="text-dark"<?php } else { ?> class="text-muted"<?php } ?>>
              <div class="feature-icon">
              <img class="bg-dark rounded-circle mt-1" src="/mine/PHP/assets/img/Nos_prof.png" alt="img" style="width: 80px;">
              </div>
            </div>
            <div>
            <h3>NOS PROFS</h3></a>
              <p <?php if ($_SESSION["status"] != 'etudiant') {?>class="text-dark"<?php } else { ?> class="text-muted"<?php } ?>>
                Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="feature-col col-lg-5 offset-lg-1 col-xs-12">
          <div class="card card-block text-center border-success">
              <div>
                <a href="index.php?page=Ctrl_modules" class= "text-dark">
                <div class="feature-icon">
                    <img class="bg-dark rounded-circle mt-1" src="/mine/PHP/assets/img/Nos_module.png" alt="img" style="width: 80px;">
                </div>
              </div>
                <div>
                    <h3>  
                    NOS MODULES
                    </h3>
                </a>
                    <p>
                        Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                    </p>
                </div>
          </div>
        </div>
        <div class="feature-col col-lg-5 col-xs-12">
          <div class="card card-block text-center border-success">
              <div>
                <a href="index.php?page=Ctrl_contacts" class= "text-dark">
                <div class="feature-icon">
                    <img class="bg-dark rounded-circle mt-1" src="/mine/PHP/assets/img/Nos_module.png" alt="img" style="width: 80px;">
                </div>
              </div>
                <div>
                    <h3>  
                    NOS CONTACTS
                    </h3>
                </a>
                    <p>
                        Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                    </p>
                </div>
          </div>
        </div>
        </div>
</section>




