<div class="form-card">
  <div class="form-card-header">
    <div class="text-center">
      <img src="/img/logo-coeurmougins.png" class="img-fluid logo" style="width: 100px;margin-bottom: 20px;">
      <h2>INSCRIVEZ-VOUS</h2>
      <p>pour profiter des offres exceptionnelles limitées et être contacté(e) par un conseiller immobilier</p>
    </div>
  </div>
  <div class="form-card-body">
    <form action="/contact" method="POST">
      <input type="text" name="program" hidden value="{{ $route == 'getProgram' ? $data['slug'] : 'home' }}" />
      <input type="hidden" name="utm_source" value="{{ app('request')->has('utm_source') ? app('request')->input('utm_source') : 'accès direct' }}"/>
      <input type="hidden" name="utm_medium" value="{{ app('request')->input('utm_medium') }}"/>
      <input type="hidden" name="utm_campaign" value="{{ app('request')->has('utm_campaign') ? app('request')->input('utm_campaign') : 'accès direct' }}"/>
      <input type="hidden" name="utm_content" value="{{ app('request')->input('utm_content') }}"/>
      <input type="hidden" name="utm_term" value="{{ app('request')->input('utm_term') }}"/>
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
          <div class="form-group" style="margin-bottom: 0;">
            <div class="control-group" style="margin-bottom: 5px;">
              <label class="control control-checkbox fs-16">
                  Oui, je souhaite être alerté(e) des opportunités immobilières
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
        <span class="cgu">*Champs obligatoire Les données signalées ci-dessus par un astérisque sont nécessaires pour nous permettre de répondre à votre demande d'information. Elles sont collectées et traitées informatiquement par COVALENS (société du groupe ALTAREA COGEDIM) uniquement sur la base de votre consentement et sont destinées à ses services internes et à ses sous-traitants techniques, aux seules fins de répondre à votre demande. Ces informations ne font l’objet d’aucun transfert en dehors du territoire de l’UE. Vos données sont conservées pendant le seul délai nécessaire à la gestion de votre demande, et si vous y consentez ci-dessus, dans le cadre de nos opérations de prospection commerciale à concurrence d’un délai de 3 ans au terme duquel elles sont définitivement effacées sauf en cas de nouvelle demande de votre part. En application de la règlementation applicable à la protection des données personnelles, vous disposez sur ces données de droits (i) d’accès, (ii) de rectification, (iii) d’effacement, (iv) de limitation et (v) de portabilité vers un prestataire tiers le cas échéant. Vous pouvez en outre vous opposer à tout moment au traitement de vos données. Vous pourrez faire valoir ces droits en écrivant au DPO à dpo@altareacogedim.com, en justifiant de votre identité. En cas de litige, vous disposez également du droit de saisir la CNIL.</span>
      </div> 
    </form>
  </div>
</div>