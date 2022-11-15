const form = document.getElementById('form');
const errorContainer = document.getElementById('error-container');

let errorSpans = [];

form.addEventListener('submit', (ev) => {
    ev.preventDefault();

    // reset error container
    errorContainer.classList.remove('active');
    errorContainer.replaceChildren();

    // reset error spans
    for (const span of errorSpans) {
        span.remove();
    }
    errorSpans = [];

    // validate
    const fields = Object.values(form);

    let errors = [];

    for (const field of fields) {
        field.classList.remove('error');

        // console.log(
        //     `%cInput %c${field.id || '[other]'} %chas value %c${field.value}`, 
        //     'color: #fff', 
        //     'color: #0f0', 
        //     'color: #fff', 
        //     'color: #0f0');

        let error = null;
        switch(field.id) {
            case 'name':
                error = validateName(field.value);
                break;
            case 'email':
                error = validateEmail(field.value);
                break;
            case 'phone':
                error = validatePhone(field.value);
                break;
            case 'body':
                error = validateBody(field.value);
                break;
            case 'agree':
                error = validateCheckmark(field.checked);
                break;
            default:
                break;
        }

        if (error !== null) {
            errors.push(error);
            addErrorToField(field.id, error);
        }

    }

    // console.log(errors);

    if (errors.length > 0) {
        errorContainer.classList.add('active');

        for (const error of errors) {
            
            const el = document.createElement('li');
            el.innerText = error;
            errorContainer.appendChild(el);

        }
    } else {
        form.submit();
    }
});

function addErrorToField(fieldId, error) {
    const field = document.getElementById(fieldId);
    field.classList.add('error');

    const el = document.createElement('span');
    el.classList.add('error');
    el.innerText = error;
    errorSpans.push(el);

    field.after(el);
}

function validateName(value) {
    const lengthValid = value.length > 2 && value.length < 30;
    const isCapitalized = /[A-Z][a-zA-Z\-]+/.test(value);

    const isValid = lengthValid && isCapitalized;

    if (!isValid) {

        return 'Name is incorrect';
    }

    return null;
}

function validateEmail(value) {
    const hasAt = value.includes('@');
    const hasDot = value.includes('.');
    const hasThreePartsOrMore = value.split(/\@|\./).length >= 3;

    const isValid = hasAt && hasDot && hasThreePartsOrMore;

    if (!isValid) {

        return 'Email is incorrect';
    }

    return null;
}

function validatePhone(value) {
    const isLengthCorrect = value.length >= 7 && value.length <= 15;
    const isNumbersOnly = /[0-9]+/.test(value);

    const isValid = isLengthCorrect && isNumbersOnly;

    if (!isValid) {
        return 'Phone number is incorrect';
    }

    return null;
}

function validateBody(value) {
    const isValid = value.length >= 100 && value.length <= 2000;

    if (!isValid) {
        return 'Body lenght must be between 100 and 2000 characters';
    }

    return null;
}

function validateCheckmark(checked) {
    const isValid = checked;

    if (!isValid) {
        return 'You must agree';
    }

    return null;
}