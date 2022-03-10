<form class="application-form" method="post" action="<?= $page->url() ?>" enctype="multipart/form-data">
<div class="honeypot">
        <label for="website">Website <abbr title="required">*</abbr></label>
        <input type="website" id="website" name="website">
        <input type="email" id="mail" name="mail" value="<?= $data['mail'] ?? null ?><?= $site->email() ?>" size="40" class="form-control"  required>
        <input type="email" id="from" name="from" value="<?= $data['from'] ?? null ?><?= $site->from() ?>" size="40" class="form-control"  required>
    </div>
    <?php
      // if the form input does not validate, show a list of alerts
      if($alerts): ?>
      <div class="alert">
        <ul>
          <?php foreach($alerts as $message): ?>
          <li><?= kirbytext($message) ?></li>
          <?php endforeach ?>
        </ul>
      </div>
      <?php endif ?>
    <div class="row contacts__req">
        <div class="col-sm-12">
            <span class="your-name"><input type="text" id="name" name="name" value="<?= $data['name'] ?? null ?>" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Vor-und Nachname" required></span>
            <?= isset($alert['name']) ? '<span class="alert error">' . html($alert['name']) . '</span>' : '' ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <span class="company"><input type="text" id="company" name="company" value="<?= $data['company'] ?? null ?>" size="40" class="form-control" aria-invalid="false" placeholder="Firmenname" /></span>
        </div>
        <div class="col-sm-6">
            <span class="city"><input type="text" id="location" name="location" value="<?= $data['location'] ?? null ?>" size="40" class="form-control" aria-invalid="false" placeholder="Ort" /></span>
        </div>
    </div>
    <div class="row contacts__req">
        <div class="col-sm-6">
            <span class="your-email"><input type="email" id="email" name="email" value="<?= $data['email'] ?? null ?>" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="E-Mail" required></span>
            
        </div>
        <div class="col-sm-6">
            <span class="your-phone"><input type="tel" id="tel" name="tel" value="<?= $data['tel'] ?? null ?>" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Telefon" /></span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="contacts__upload">
                <label for="fileFF"><i class="icon__upload"></i><span class="input__file-button-text">Datei hochladen</span></label>
                <input id="fileFF"  name="file[]" type="file" multiple/>
            </div>
        </div>
    </div>
    <div class="row contacts__req">
        <div class="col-sm-12">
            <span class="your-message">
                <textarea id="message" name="message" cols="40" rows="6" class="form-control" aria-required="true" aria-invalid="false" placeholder="Erzählen Sie uns von Ihrem Anliegen..." required><?= $data['message'] ?? null ?></textarea>
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <span class="terms">
                <span>
                    <span class="form-list-item">
                        <label>
                            <input type="checkbox" name="terms" value="1" aria-invalid="false" required />
                            <span class="form-list-item-label">
                                Ja, ich habe die <a href="#">Datenschutzerklärung</a> zur
                                Kenntnis genommen und bin damit einverstanden, dass die von mir
                                angegebenen Daten elektronisch erhoben und
                                gespeichert werden. Meine Daten werden dabei nur streng
                                zweckgebunden zur Bearbeitung und Beantwortung meiner Anfrage
                                genutzt.
                            </span>
                        </label>
                    </span>
                </span>
            </span>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-sm-6 col-6">
            <input class="form-form-control form-submit" type="submit" name="submit" id="submitFF" value="Absenden">
        </div>
        <div class="col-sm-6 col-6 text-right required">
            <strong><span style="color: rgb(113, 205, 85);">*</span> Pflichtfelder</strong>
        </div>
    </div>
</form>
<style>
    .honeypot {
    position: absolute;
    left: -9999px;
}
</style>