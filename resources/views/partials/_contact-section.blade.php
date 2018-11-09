<div class="container">
  <div class="row bg-left-form">
    <div class="col-12 col-md-8 ml-auto">
     <div id="form-card">
        <div id="form-card-header">
          <h2>profitez de nos <span>offres de lancement</span> pour <span>devenir propriétaire!</span></h2>
          <p>En saisissant vos coordonnées, un conseiller vous recontactera dans les plus brefs délais.</p>
        </div>
        <div id="form-card-body" class="ml-auto">
          <form action="/contact" method="POST">
            
            <div class="form-row">
              <div class="col-12">
                <div class="control-group d-flex justify-content-center">
                  
                  <div id="mme" class="d-flex align-item-center">
                    <span class="control-span">Madame</span>
                    <label class="control control-radio" id="03 | Madame">
                      <input type="radio" name="civilite" class="mme-radio" value="mme" checked="checked" />
                      <div class="control_indicator"></div>
                    </label>
                  </div>
                  
                  <div id="mr" class="d-flex align-item-center">
                    <label class="control control-radio" id="mme">
                      <input type="radio" class="mr-radio" name="civilite" value="02 | Monsieur" />
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
                  <input type="tel" name="telephone" class="form-control" id="inputnePhone" placeholder="Téléphone *" required>
                </div>
              </div>
              
              <div class="col-12 col-md-6">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email *" required>
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
              <div class="col-12 col-md-6 d-flex flex-column align-items-center">
                <span id="actions-title">Vous souhaitez *</span>
                <div class="actions d-flex align-items-center">
                  <a href="#" id="habiter-action" class="action checked transition">
                    Habiter
                    <input type="radio" name="type-demande" id="habiter-radio" value="Habiter" checked="checked" hidden/>
                  </a>
                   <a href="#" id="investir-action" class="action transition">
                    Investir
                    <input type="radio" name="type-demande" id="investir-radio" value="Investir" hidden/>
                  </a>
                </div>
              </div>
              
              <div class="col-12 col-md-6">
                  <div class="">
                    <div class="form-check form-check-inline">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="optin" value="OUI" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label cgu"  for="customCheck1">J’accepte de recevoir des alertes et des contenus personnalisés de la part de Pitch Promotion, Faubourg Immobilier et Fiminco m’informant de leurs produits et services.</label>
                      </div>
                    </div>
                  </div>
                </div>
              
            </div>
            <div class="form-row d-flex flex-column align-items-center">
              <button type="submit" id="submit-btn" class="d-block mx-auto transition">
                je m'inscris
              </button>
              <span class="cgu">* champs obligatoires</span>
            </div> 
            
          </form>
          <p id="contact-notices">
            Les données signalées ci-dessus par un astérisque sont nécessaires pour nous permettre de répondre à votre demande (rappel et demande d’information). Elles sont collectées et traitées informatiquement par COVALENS (société du groupe ALTAREA COGEDIM) uniquement sur la base de votre consentement et sont destinées à ses services internes et à ses sous-traitants techniques, aux seules fins de répondre à votre demande. Ces informations ne font l’objet d’aucun transfert en dehors du territoire de l’UE. Vos données sont conservées pendant le seul délai nécessaire à la gestion de votre demande, et si vous y consentez ci-après, dans le cadre de nos opérations de prospection commerciale à concurrence d’un délai de 3 ans au terme duquel elles sont définitivement effacées sauf en cas de nouvelle demande de votre part. En application de la règlementation applicable à la protection des données personnelles, vous disposez sur ces données de droits (i) d’accès, (ii) de rectification, (iii) d’effacement, (iv) de limitation et (v) de portabilité vers un prestataire tiers le cas échéant. Vous pouvez en outre vous opposer à tout moment au traitement de vos données. Vous pourrez faire valoir ces droits en écrivant au DPO à dpo@altareacogedim.com, en justifiant de votre identité. En cas de litige, vous disposez également du droit de saisir la CNIL
          </p>
        </div>
      </div>
    </div>
  </div>
  <div id="form-card-footer"></div>
</div>