export default function login() {
  if (window.location.pathname == '/testejs/index.php') {
    const emailInput = document.querySelector('.emailInput');
    const passInput = document.querySelector('.passInput');
    const submitButton = document.querySelector('.submit');

    function handleSubmit(event) {
      if (emailInput.value === '' || passInput.value === '') {
        event.preventDefault();
      }
      if (emailInput.value === '') {
        document.querySelector('.mail').innerHTML = 'Preencha seu E-mail';
      }
      if (passInput.value === '') {
        document.querySelector('.pass').innerHTML = 'Preencha sua senha';
      }
    }

    function handleKeyUp(event) {
      if (passInput.value != '') {
        document.querySelector('.pass').innerHTML = '';
      }
      if (emailInput.value != '') {
        document.querySelector('.mail').innerHTML = '';
      }
    }

    emailInput.addEventListener('keyup', handleKeyUp);
    passInput.addEventListener('keyup', handleKeyUp);
    submitButton.addEventListener('click', handleSubmit);
  }
}
