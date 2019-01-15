<div id="form-card">
  <div id="form-card-header">
    <h2>Lorem Ipsum</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
  </div>
  <div id="form-card-body" class="">
    <form action="/contact" method="POST">
      <div class="form-row">
        <div class="col-12">
          <div class="control-group d-flex justify-content-center">
            <div id="mme" class="d-flex align-items-center">
              <span class="control-span">Madame</span>
              <label class="control control-radio" id="03 | Madame">
                <input type="radio" name="civilite" class="mme-radio" value="MME" checked="checked" />
                <div class="control_indicator"></div>
              </label>
            </div>
            <div id="mr" class="d-flex align-items-center">
              <label class="control control-radio" id="mme">
                <input type="radio" class="mr-radio" name="civilite" value="M" />
                <div class="control_indicator"></div>
              </label>
              <span class="control-span">Monsieur</span>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-group">
            <input type="text" name="nom" class="form-control" id="inputName" placeholder="Nom *" required>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-group">
            <input type="text" name="prenom" class="form-control" id="inputFirstname" placeholder="Prénom *" required>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-group">
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email *" required>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-group">
            <input type="tel" name="telephone" class="form-control" id="inputnePhone" placeholder="Téléphone *" required>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-group">
            <input type="number" name="cp" class="form-control" id="inputZipcode" placeholder="Code postal *" required>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-group">
            <input type="text" name="ville" class="form-control" id="inputCity" placeholder="Ville *" required>
          </div>
        </div>
      </div>
      <div class="form-row d-flex align-items-center">
        <div class="col-12 col-md-6 mx-auto">
          <div class="form-group">
            <span id="actions-title">Lorem Ipsum</span>
          </div>
        </div>
        <div class="col-12 col-md-6 mx-auto d-flex" id="">
          <div class="form-group d-flex">
            <div id="" class="d-flex align-items-center projet-fields">
                <span class="control-span d-inline-block">Habiter</span>
                <label class="control control-radio" id="">
                  <input type="radio" name="projet" class="" value="habiter" checked="checked" />
                  <div class="control_indicator"></div>
                </label>
              </div>
            <div id="" class="d-flex align-items-center projet-fields">
                <label class="control control-radio" id="">
                  <input type="radio" class="" name="projet" value="investir" />
                  <div class="control_indicator"></div>
                </label>
                <span class="control-span d-inline-block">Investir</span>
              </div>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-12">
          <div class="form-group">
            <div class="form-check form-check-inline">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" name="optin" value="OUI" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label optin" for="customCheck1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="little-text">
        <div class="row">
          <div class="col-12">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
          </div>
        </div>  
      </div>
      <div class="form-row d-flex flex-column align-items-center">
        <button type="submit" id="submit-btn" class="d-block mx-auto transition">
          Lorem Ipsum
        </button>
        <span class="cgu">* champs obligatoires</span>
      </div> 
    </form>
  </div>
</div>