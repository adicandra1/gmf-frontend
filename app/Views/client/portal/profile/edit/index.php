<?= $this->extend('client/portal/app-shell') ?>

<?= $this->section('content') ?>
<link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/jquery-smartwizard/css/smart_wizard_all.min.css" type="text/css">

<div class="flashdata" style="display: none;"></div>

<div class="template alert fade show" role="alert" style="display: none;">
  <span class="message"></span>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="card">
    <div id="smartwizard">
        <ul class="nav">
            <li>
                <a class="nav-link" href="#step-1">
                    <strong>Step 1</strong> <br>
                    Personal info
                </a>
            </li>
            <li>
                <a class="nav-link" href="#step-2">
                    <strong>Step 2</strong> <br> 
                    Experience
                </a>
            </li>
            <li>
                <a class="nav-link" href="#step-3">
                    <strong>Step 3</strong> <br> 
                    Education
                </a>
            </li>
            <li>
                <a class="nav-link" href="#step-4">
                    <strong>Step 4</strong> <br> 
                    Skills
                </a>
            </li>
            <li>
                <a class="nav-link" href="#step-5">
                    <strong>Step 5</strong> <br> 
                    Supporting Files
                </a>
            </li>
        </ul>
    
        <div class="tab-content">
            <div id="step-1" class="tab-pane" role="tabpanel">
                <?= view('client/portal/profile/edit/about_me.php', $dataAboutMe); ?>
            </div>
            <div id="step-2" class="tab-pane" role="tabpanel">
                <?= view('client/portal/profile/edit/experience.php', $dataExperience); ?>
            </div>
            <div id="step-3" class="tab-pane" role="tabpanel">
                <?= view('client/portal/profile/edit/education.php', $dataEducation); ?>
            </div>
            <div id="step-4" class="tab-pane" role="tabpanel">
                <?= view('client/portal/profile/edit/skills.php', $dataSkills); ?>
            </div>
            <div id="step-5" class="tab-pane" role="tabpanel">
                <?= view('client/portal/profile/edit/uploaded_file.php', $dataFiles); ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('js-plugin') ?>

<!-- 
    ERRORNOTE:
    1. smartwizard jquery plugin can't run if jquery is not loaded before this plugin loaded. so this plugin should be always loaded after jquery
-->
<script src="<?= base_url(); ?>/assets/vendor/jquery-smartwizard/js/jquery.smartWizard.min.js"></script>

<script>
    //well TODO:
    //we need saveAll button, basically saves all form data in one click of button
    // and if user try to leave page before saving first, we warn them, modal.
    document.addEventListener("DOMContentLoaded", function() {

        let btnSaveAll = $('<button></button>')
                            .text('Save all')
                            .addClass('btn btn-info')
                            .on('click', saveAllData);

        function saveAllData() {

            //if data changed,
            let dataChanged = true;
            if (dataChanged) {
                //then submit to server,

                let data = parcelFormData(['aboutMe', 'experience', 'education', 'skills', 'additionalFiles']);

                $.ajax({
                    method  : "POST",
                    url     : "<?= base_url() . '/portal/profile/save' ?>",
                    data    : data,
                    processData: false,
                    
                    // Setting the contentType to false is imperative, since otherwise jQuery will set it incorrectly.
                    // more info:
                    // https://stackoverflow.com/questions/6974684/how-to-send-formdata-objects-with-ajax-requests-in-jquery
                    contentType: false, 
                    beforeSend: function( xhr ) {
                        // Show the loader
                        $('#smartwizard').smartWizard("loader", "show");
                    },
                }).done(function( res) {

                    // Hide the loader
                    $('#smartwizard').smartWizard("loader", "hide");
                        
                        //success
                        //print data saved and back to prev page
                        displayAlert(res.message, "success");
                    

                }).fail(function(jqXHR, textStatus) {

                    let statusCode = jqXHR.status;

                    // Hide the loader
                    $('#smartwizard').smartWizard("loader", "hide");

                    switch(statusCode) {
                        case 400: {
                            let payload = JSON.parse(jqXHR.responseText);
                            //displayAlert
                            displayAlert(payload.errors.message, "error");

                            //displayValidationErrors
                            displayValidationErrors(payload.errors.validation)
                            break;
                        }
                    }
                });
            } 
            else {
                //print no data has been changed!
            }
            
        }

        function parcelFormData(formNames = []) {
            let dataWrapper = new FormData(); // using additional FormData object

            for(var i = 0; i < formNames.length; i++){
                var form = document.forms[formNames[i]];
                var tempData = new FormData(form);
                var formValues = tempData.entries()
                for (var ent of formValues) {
                    // Note the change here 
                    dataWrapper.append(`${formNames[i]}_${ent[0]}`, ent[1])
                }
            }

            return dataWrapper;
        }

        function displayAlert(message, type) {
            let alertTemplate = $('div.template.alert').clone().removeClass('template');

            let messageContainer = $('div.flashdata');

            //cleanup routine
            messageContainer.empty();
            messageContainer.hide();
            //endofcleanup

            alertTemplate.find('span.message').text(message);
            if(type === "success") {
                alertTemplate.addClass('alert-success').show();
            }
            else if(type === "error") {
                alertTemplate.addClass('alert-danger').show();
            }

            alertTemplate.appendTo(messageContainer);
            messageContainer.show();
            
        }

        function displayValidationErrors(validation) {
            //reset error
            $('small.form-error').text('');

            validation.forms.forEach(form => {
                let formElement = $(`#${form.id}`);

                form.fields.forEach(field => {
                    let fieldErrorContainer = formElement.find(`small.form-error.text-danger.${field.name}`);
                    fieldErrorContainer.text(field.validationMessage);
                });
            });
        }


        //if the jquery loaded twice/more, or there's 2/more different jquery version loaded on site, it will conflicted, so this line solve conflicted jquery:
        //$.noConflict();
        // SmartWizard initialize
        $('#smartwizard').smartWizard({
            selected: 0,
            autoAdjustHeight: false,
            theme: 'arrows',
            enableURLhash: true,
            transition: {
                animation: 'fade', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
            },
            toolbarSettings: {
                //toolbarPosition: 'both', // both bottom
                toolbarExtraButtons: [btnSaveAll]
            }
        });

    });

    
</script>

<?= $this->endSection() ?>