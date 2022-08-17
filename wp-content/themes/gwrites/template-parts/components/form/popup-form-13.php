<div id="main-form-popup" class="popup-wrap _hidden">
    <div class="popup-big _white _pt_lg _pb_sm">
        <div class="popup-close"></div>
        <div class="popup-head">
            <div class="popup-big__subtitle _center">
                Das Ausfüllen des Formulars dauert maximal 1 Minute
            </div>
            <div class="popup-big__title _center">
                Fordern Sie einen unverbindlichen Kostenvoranschlag an
            </div>
        </div>
        <div class="popup-body">
        <form class="_white js-form" onsubmit="ym(<?= \DE\Helpers::getIdYM(); ?>, 'reachGoal', 'fullform'); return true;">
                <div class="form-row">
                    <div class="form-col _size_4 _size_md_6">
                        <div class="form-select _pb_xxs">
                            <label class="form-select__label" for="main-form-type-online-popup">
                            Art der Arbeit
                            </label>
                            <div class="form-select__btn" >Art des Auftrags auswählen </div>
                            <?php get_template_part('template-parts/components/form/select-type-online'); ?>
                            <input class="form-select__input-hidden"
                                   id="main-form-type-online-popup"
                                   name="type-inline-popup"
                                   type="text"
                            />
                        </div>
                    </div>
                    <div class="form-col _size_2 _size_md_6">
                        <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="abgabetermin-online-popup">Abgabetermin</label>
                            <div class="form-date">
                                <input class="form-date__input"
                                       placeholder="Abgabetermin"
                                       id="abgabetermin-online-popup"
                                       autocomplete="off"
                                       name="abgabetermin-online-popup_name"
                                       type="text"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-col _size_4 _size_md_6">
                        <div class="form-select _pb_xxs">
                            <label class="form-select__label" for="main-form-specialization-online-popup">
                                Fachrichtung
                            </label>
                            <div class="form-select__btn" >Wählen Sie eine Fachrichtung</div>
                            <?php get_template_part('template-parts/components/form/select-specialties'); ?>
                            <input class="form-select__input-hidden"
                                   id="main-form-specialization-online-popup"
                                   name="specialization-online-popup"
                                   type="text"
                            />
                        </div>
                    </div>
                    <div class="form-col _size_2 _size_md_3">
                        <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="main-form-nachricht-online-popup">Ihre Nachricht an uns (optional)</label>
                            <input class="form-input__input"
                                   placeholder="..."
                                   id="main-form-nachricht-online-popup"
                                   type="text"
                                   name="nachricht-online-popup"
                            />
                        </div>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-col _size_4 _size_md_6">
                        <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="main-form-der-arbeit-online-popup">Thema der Arbeit</label>
                            <input class="form-input__input"
                                   placeholder="Thema der Arbeit"
                                   id="main-form-der-arbeit-online-popup"
                                   type="text"
                                   name="der-arbeit-online-popup"
                            />
                        </div>
                    </div>
                    <div class="form-col _size_2 _size_md_6">
                        <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="main-form-name-online-popup">Vorname / Nickname</label>
                            <input class="form-input__input"
                                   placeholder="Vorname / Nickname"
                                   id="main-form-name-online-popup"
                                   type="text"
                                   name="name-online-popup"
                            />
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-col _size_4 _size_md_6">
                        <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="main-form-bearbeitet-sein-online-popup">Bis wann muss der Auftrag von unseren Experten bearbeitet sein?</label>
                            <input class="form-input__input"
                                   placeholder="..."
                                   id="main-form-bearbeitet-sein-online-popup"
                                   type="text"
                                   name="bearbeitet-sein-online-popup"
                            />
                        </div>

                        <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="main-form-die-anzahl-online-popup">Die Anzahl der auszuführenden Übungsaufgaben</label>
                            <input class="form-input__input"
                                   placeholder="..."
                                   id="main-form-die-anzahl-online-popup"
                                   type="text"
                                   name="die-anzahl-online-popup"
                            />
                        </div>

                    </div>
                    <div class="form-col _size_2 _size_md_6">

                                <div class="form-input _pb_xxs">
                                    <label class="form-input__label_sm" for="popup-call-me-phone-online-popup">
                                    Telefon/WhatsApp 
                                    </label>
                                    <input class="form-input__input"
                                           id="popup-call-me-phone-online-popup"
                                           placeholder="Telefon/WhatsApp"
                                           name="phone-online-popup"
                                           type="tel"
                                    />
                                </div>

                        <!-- <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="main-form-whatsapp">WhatsApp</label>
                            <input class="form-input__input"
                                   placeholder="WhatsApp"
                                   id="main-form-whatsapp"
                                   name="whatsapp"
                                   type="text"
                            />
                        </div> -->
                        <div class="form-input _pb_xxs">
                            <label class="form-input__label_sm" for="main-form-email-online-popup">E-Mail</label>
                            <input class="form-input__input"
                                   placeholder="E-Mail"
                                   id="main-form-email-online-popup"
                                   name="email-online-popup"
                                   type="text"
                            />
                        </div>
                    </div>
                </div>
                <div class="form-row _pb_xxs">
                    <div class="form-col _size_6 _size_md_12">
                    <label class="form-input__label_sm" for="main-form-drop-online-popup">Files</label>
                        <div class="drop-zone">
                            <span class="drop-zone__prompt">Drag & Drop</span>
                            <span class="drop-zone__prompt"><span class="drop-zone__prompt-v2">oder</span><br>Dateien auswählen</span>
                            <input type="file" id="main-form-drop-online-popup" name="myFilepopup" class="drop-zone__input">
                        </div>
                    </div>
                </div>
                <div class="form-row _pb_xxs btn-form-online">
                    <div class="form-col ">
                        <button class="btn btn_orange _w-100 gtm-full-form">
                            DAS FORMULAR abschicken
                        </button>
                    </div>
                </div>
                <div class="form-row _pb_xxs">
                    <div class="form-col _size_6 _size_md_12">
                        <div class="form-text form-text-online form-text_sm">
                            Vor dem Abschicken des Formulars prüfen Sie bitte die Korrektheit Ihrer E-Mail-Adresse
                        </div>
                    </div>
                </div>
                <!-- <div class="form-row _pb_xxs">
                    <div class="form-col _size_4 _size_md_6">
                        <div class="form-text form-text_sm">
                            Vor dem Abschicken des Formulars prüfen Sie bitte die Korrektheit Ihrer E-Mail-Adresse
                        </div>
                    </div>
                    <div class="form-col _size_2 _size_md_6">
                        <button class="btn btn_orange _w-100 gtm-full-form">
                            DAS FORMULAR abschicken
                        </button>
                    </div>
                </div> -->
                <input type="hidden" name="form-id" value="full-form-online-popup">
                <input type="hidden" name="recaptcha_response" class="recaptchaResponse">
            </form>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
  const dropZoneElement = inputElement.closest(".drop-zone");

  dropZoneElement.addEventListener("click", (e) => {
    inputElement.click();
  });

  inputElement.addEventListener("change", (e) => {
    if (inputElement.files.length) {
      updateThumbnail(dropZoneElement, inputElement.files[0]);
    }
  });

  dropZoneElement.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropZoneElement.classList.add("drop-zone--over");
  });

  ["dragleave", "dragend"].forEach((type) => {
    dropZoneElement.addEventListener(type, (e) => {
      dropZoneElement.classList.remove("drop-zone--over");
    });
  });

  dropZoneElement.addEventListener("drop", (e) => {
    e.preventDefault();

    if (e.dataTransfer.files.length) {
      inputElement.files = e.dataTransfer.files;
      updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
    }

    dropZoneElement.classList.remove("drop-zone--over");
  });
});

/**
 * Updates the thumbnail on a drop zone element.
 *
 * @param {HTMLElement} dropZoneElement
 * @param {File} file
 */
function updateThumbnail(dropZoneElement, file) {
  let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

  // First time - remove the prompt
  if (dropZoneElement.querySelector(".drop-zone__prompt")) {
    dropZoneElement.querySelector(".drop-zone__prompt").remove();
  }

  // First time - there is no thumbnail element, so lets create it
  if (!thumbnailElement) {
    thumbnailElement = document.createElement("div");
    thumbnailElement.classList.add("drop-zone__thumb");
    dropZoneElement.appendChild(thumbnailElement);
  }

  thumbnailElement.dataset.label = file.name;

  // Show thumbnail for image files
  if (file.type.startsWith("image/")) {
    const reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = () => {
      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
    };
  } else {
    thumbnailElement.style.backgroundImage = null;
  }
}

</script>