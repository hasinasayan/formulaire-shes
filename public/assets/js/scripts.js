document.addEventListener('DOMContentLoaded', function(event) {

    document.getElementById('contact_form_video').addEventListener('change', function(e){
        var filename = e.target.files[0].name;
        document.querySelector('.file-name').innerHTML = filename; 
    })
    var form = document.getElementById('contact-information');
        form.addEventListener('submit', onSubmit);

    var loader = document.getElementById('loader');
    var submitBtn = document.getElementById('contact_form_save');
    var spanErrors = document.querySelectorAll('span.error');
    function onSubmit(event) {
        event.preventDefault();

        loader.style.display = 'block';
        submitBtn.disabled = true;
        spanErrors.forEach(function (elem){
            elem.style.display = 'none';
        })
        var form = document.getElementById('contact-information');
        var fileField = document.getElementById('contact_form_video');
        /*if( fileField.files.length === 0) {
            // alert('Veuillez choisir un fichier');
            var element ='#contact_form_'+'video';
            document.querySelector(element+' ~.error').innerHTML = 'Veuillez choisir un fichier. ';
            document.querySelector(element).parentElement.scrollIntoView({
                behavior: 'smooth'
            });
            // return;
        }*/
        var formData = new FormData(form);
        var xhr = new XMLHttpRequest();
            xhr.open("POST", form.action);
            xhr.setRequestHeader("X-Requested-With","XMLHttpRequest");
            xhr.addEventListener('load', onRequestComplete, false);
            xhr.upload.addEventListener("load", onUploadComplete, false);
            xhr.upload.addEventListener("progress", onUploadProgress, false);
            xhr.upload.addEventListener("error", onUploadError, false);
            xhr.send(formData);
    }

    function onRequestComplete(event) {
        serverResponse = JSON.parse(event.target.response);
        document.getElementById('progress-status').innerHTML = serverResponse.success;
        document.querySelectorAll('.error').forEach(function(e){e.innerHTML=''});
        if (serverResponse.success){
            window.location.href='/confirmation';
            
        } else {
            var errors = serverResponse.errors;

            loader.style.display = 'none';
            submitBtn.disabled = false;
            spanErrors.forEach(function (elem){
                elem.style.display = 'block';
            })
            Object.entries(errors).forEach(([k, value]) => {
                try{
                    // console.log('error', k, value.message);
                    var element ='#contact_form_'+k;
                    document.querySelector(element+' ~.error').innerHTML = value.message;
                    document.querySelector('#contact_form_'+k).parentElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                } catch(e){}
            });
        }
    }
    function onUploadComplete(event) {
        document.getElementById('file-progress').value = 0;
    }
    function onUploadProgress(event) {
        document.getElementById('progress-loaded').innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
        var percent = (event.loaded / event.total) * 100;
        document.getElementById('file-progress').value = Math.round(percent);
        document.getElementById('progress-status').innerHTML = Math.round(percent) + "% uploaded... please wait";
    }

    function onUploadError(event) {
        document.getElementById('progress-status').innerHTML = 'Error on upload.';
    }
})

