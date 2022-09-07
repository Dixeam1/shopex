showRegistration = () => { 
document.querySelector('#loginForm').classList.add('hidden'); 
document.querySelector('#registrationForm').classList.remove('hidden'); 
}

showLogin = () => { document.querySelector('#loginForm').classList.remove('hidden');
document.querySelector('#registrationForm').classList.add('hidden');   
}