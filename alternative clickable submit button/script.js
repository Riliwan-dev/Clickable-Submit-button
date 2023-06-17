// const inputField = document.getElementById('input-field');
// const submitButton = document.getElementById('submit-button');

// inputField.addEventListener('input', () => {
//     if(inputField.value.trim() !== ''){
//         submitButton.removeAttribute('disabled');   
//     }else{
//         submitButton.setAttribute('disabled', ''); 
//     }
// });

// submitButton.addEventListener('click', () => {
// //  Handle form submission
// });
        // Javascript code
        
            var emails = document.getElementById('email');  
            var texts = document.getElementById('text');
            var numbers = document.getElementById('number');
            var tel = document.getElementById('tel');
            var dates = document.getElementById('date');
            var submit = document.getElementById('submit');

            function validateinput(){
                var emailvalue = emails.value.trim();
                var textvalue = texts.value.trim();
                var numbervalue = numbers.value.trim();
                var telvalue = tel.value.trim();
                var datevalue = dates.value.trim();

                if(emailvalue === "" || textvalue === "" || numbervalue === "" || telvalue === "" || datevalue === ""){
                    submit.disabled = true;
            }else{
                submit.disabled = false;
            }
        }

        emails.addEventListener('input', validateinput);
        texts.addEventListener('input', validateinput);
        numbers.addEventListener('input', validateinput);
        tel.addEventListener('input', validateinput);
        dates.addEventListener('input', validateinput);