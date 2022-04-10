let loginForm= document.querySelector('#login-form');
if (loginForm!=undefined){
    loginForm.addEventListener('submit', (event) => {
        event.preventDefault();
        event.stopPropagation();

        let form = event.target;
        let formData = new FormData(form);
        var object = {};
        object['remember-me'] = 'off'
        formData.forEach(function (value, key) {
            object[key] = value;
        });
        object['endpoint'] = 'login';
        let data = new FormData();
        data.append('data', JSON.stringify(object))
        const options = {
            method: 'POST',
            body: data,
        };
        fetch('includes/ajax.inc.php', options)
            .then(data => {
                return data.json();
            })
            .then(result => {
                if (result.success) {
                    window.location.href = 'http://localhost/lab387/index.php?page=dashboard';
                } else {

                }
            });
    });
}

let registerForm = document.querySelector('#register-form');
if (registerForm != undefined) {
    registerForm.addEventListener('submit', (event) => {
        event.preventDefault();
        event.stopPropagation();

        let form = event.target;
        let formData = new FormData(form);
        var object = {};
        formData.forEach(function (value, key) {
            object[key] = value;
        });
        console.log('Bilo sta');
        object['endpoint'] = 'register';
        let data = new FormData();
        data.append('data', JSON.stringify(object))
        const options = {
            method: 'POST',
            body: data,
        };
        fetch('includes/ajax.inc.php', options)
            .then(data => {
                return data.json();
            })
            .then(result => {
                if (result.success) {
                    window.location.href = 'http://localhost/lab387/index.php?page=login';
                }
            });
    });

}




