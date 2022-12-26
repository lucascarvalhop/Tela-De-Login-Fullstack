export default function cadastro() {
  if (window.location.pathname == '/testejs/cadastro.php') {
    const inputNome = document.querySelector('.nomeInput');
    const emailInput = document.querySelector('.emailInput');
    const primeiraSenha = document.querySelector('.passInput');
    const segundaSenha = document.querySelector('.secondPassInput');
    const submitButton = document.querySelector('.submit');

    function handleSubmit(event) {
      if (
        inputNome.value.length <= 2 ||
        emailInput.value === '' ||
        primeiraSenha.value === '' ||
        primeiraSenha.value !== segundaSenha.value ||
        primeiraSenha.value.length <= 8
      ) {
        event.preventDefault();
      }

      if (inputNome.value.length <= 2) {
        document.querySelector('.nomeWarning').innerHTML =
          'Nome não pode ter menos de 3 caracteres.';
      }
      if (emailInput.value === '') {
        document.querySelector('.emailWarning').innerHTML =
          'E-mail não pode estar vazio.';
      }
      if (primeiraSenha.value.length <= 8) {
        document.querySelector('.senhaVaziaWarning').innerHTML =
          'Defina uma senha com pelo menos 9 caracteres';
      }
      if (primeiraSenha.value !== segundaSenha.value) {
        document.querySelector('.senhasDiferentesWarning').innerHTML =
          'Senhas não coincidem.';
      }
    }

    function handleInputNomeKeyUp() {
      document.querySelector('.nomeWarning').innerHTML = '';
    }

    function handleEmailInputKeyUp() {
      document.querySelector('.emailWarning').innerHTML = '';
    }

    function handlePrimeiraSenhaKeyUp() {
      document.querySelector('.senhaVaziaWarning').innerHTML = '';
    }

    primeiraSenha.addEventListener('keyup', handlePrimeiraSenhaKeyUp);
    emailInput.addEventListener('keyup', handleEmailInputKeyUp);
    inputNome.addEventListener('keyup', handleInputNomeKeyUp);
    submitButton.addEventListener('click', handleSubmit);
  }
}
