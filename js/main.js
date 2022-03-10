window.addEventListener('load', function () {
    var form = document.querySelector('form');
    var message = document.getElementById('message');
    var fields = {};
    form.querySelectorAll('[name]').forEach(function (field) {
        fields[field.name] = field;
    });

    // Displays all error messages and adds 'error' classes to the form fields with
    // failed validation.
    var handleError = function (response) {
        var errors = [];
        for (var key in response) {
            if (!response.hasOwnProperty(key)) continue;
            if (fields.hasOwnProperty(key)) fields[key].classList.add('error');
            Array.prototype.push.apply(errors, response[key]);
        }
        message.innerHTML = errors.join('<br>');
    }

    var onload = function (e) {
        if (e.target.status === 200) {
            message.innerHTML = 'Success!'
        } else {
            handleError(JSON.parse(e.target.response));
        }
    };

    var submit = function (e) {
        e.preventDefault();
        var request = new XMLHttpRequest();
        request.open('POST', e.target.action);
        request.onload = onload;
        request.send(new FormData(e.target));
        // Remove all 'error' classes of a possible previously failed validation.
        for (var key in fields) {
            if (!fields.hasOwnProperty(key)) continue;
            fields[key].classList.remove('error');
        }
    };
    form.addEventListener('submit', submit);
});