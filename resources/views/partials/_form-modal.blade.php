<div class="modal mx-auto" id="form-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">être appelé</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body form-card">
        <div class="mb20">Pour être appelé(e) par un conseiller immobilier Cogedim ou être contacté(e) par email si vous êtes injoignable, merci de nous préciser les informations suivantes :</div>
  
        <div class="form-card-body">
          <form action="{{ route('beCalled') }}" method="POST">
            <input type="text" id="program-field" name="program" value="" hidden/>
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
            <div class="form-row">
              <div class="col-12 col-md-6">
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" name="date" id="datepicker"  placeholder="Quel jour ?" />
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2"><img src="/img/calendar-white.png" height="15" width="15"/></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" name="time" id="timepicker"  placeholder="A quelle heure ?" />
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2"><img src="/img/clock-white.png" height="15" width="15"/></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-12">
                <div class="form-group">
                  <div class="control-group">
                    <label class="control control-checkbox fs-16">
                        En cochant cette case, je consens à recevoir des offres commerciales et des informations sur les produits et services Cogedim et Marignan.
                            <input type="checkbox" checked="checked" />
                        <div class="control_indicator"></div>
                    </label>
                  </div>
                </div>
              </div>
            </div>
                
          <div class="form-row d-flex flex-column align-items-center">
            <button type="submit" id="" class="d-block mx-auto transition submit-btn">
              je m'inscris
            </button>
            <span class="cgu">* champs obligatoires</span>
          </div> 
        </form>
      </div>
    </div>
  </div>
</div>
</div>