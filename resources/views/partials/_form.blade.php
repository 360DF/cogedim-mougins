<div class="form-card">
  <div class="form-card-header">
    <div class="text-center">
      <img src="/img/logo-coeurmougins.png" class="img-fluid logo">
      <h2>INSCRIVEZ-VOUS</h2>
      <p>et profitez de nos offres exceptionnelles</p>
    </div>
  </div>
  <div class="form-card-body">
    <form action="/contact" method="POST">
      <input type="text" name="program" hidden value="{{ $route == 'getProgram' ? $data['slug'] : 'home' }}" />
      <div class="form-row">
        <div class="col-12">
          <div class="control-group d-flex justify-content-center">
            <div id="" class="d-flex align-items-center mme">
              <span class="control-span">Madame</span>
              <label class="control control-radio" id="03 | Madame">
                <input type="radio" name="civilite" class="mme-radio" value="MME" checked="checked" />
                <div class="control_indicator"></div>
              </label>
            </div>
            <div id="" class="d-flex align-items-center mr">
              <label class="control control-radio" id="">
                <input type="radio" class="mr-radio" name="civilite" value="M" />
                <div class="control_indicator"></div>
              </label>
              <span class="control-span">Monsieur</span>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <input type="text" name="nom" class="form-control" id="inputName" placeholder="Nom *" required>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <input type="text" name="prenom" class="form-control" id="inputFirstname" placeholder="Prénom *" required>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email *" required>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <input type="tel" name="telephone" class="form-control" id="inputnePhone" placeholder="Téléphone *" required>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <input type="number" name="cp" class="form-control" id="inputZipcode" placeholder="Code postal *" required>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <input type="text" name="ville" class="form-control" id="inputCity" placeholder="Ville *" required>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-12">
          <div class="form-group">
            <div class="control-group">
              <label class="control control-checkbox fs-16">
                  En cochant cette case, je consens à recevoir des offres commerciales et des informations sur les produits et services Cogedim et Marignan.
                      <input type="checkbox" name="optin"  />
                  <div class="control_indicator"></div>
              </label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-row d-flex flex-column align-items-center">
        <button type="submit" id="" class="submit-btn d-block mx-auto transition">
          je m'inscris
        </button>
        <span class="cgu">* champs obligatoires</span>
      </div> 
    </form>
  </div>
</div>