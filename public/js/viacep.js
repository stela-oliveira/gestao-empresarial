document.addEventListener('DOMContentLoaded', function() {
    
    const cepInput = document.getElementById('cep');
    
    // escutador de evento onblur
    cepInput.addEventListener('blur', function() {
        let cep = this.value;

        // limpa caracteres não numéricos
        cep = cep.replace(/\D/g, '');
        if (cep.length === 8) {
            toggleAddressFields(true);
            
            // faz a requisição ao API do ViaCEP
            fetch(`https://viacep.com.br/ws/${cep}/json/`)
                .then(response => response.json())
                .then(data => {
                    if (data.erro) {
                        alert('CEP não encontrado.');
                        clearAddressFields();
                    } else {
                        document.getElementById('logradouro').value = data.logradouro;
                        document.getElementById('bairro').value = data.bairro;
                        document.getElementById('cidade').value = data.localidade;
                        document.getElementById('uf').value = data.uf;
                    }
                })
                .catch(error => {
                    console.error('Erro ao buscar CEP:', error);
                    alert('Não foi possível buscar o CEP.');
                    clearAddressFields();
                })
                .finally(() => {
                    toggleAddressFields(false);
                });
        } else {
            clearAddressFields();
        }
    });

    function toggleAddressFields(disabled) {
        document.getElementById('logradouro').disabled = disabled;
        document.getElementById('bairro').disabled = disabled;
        document.getElementById('cidade').disabled = disabled;
        document.getElementById('uf').disabled = disabled;
    }

    function clearAddressFields() {
        document.getElementById('logradouro').value = '';
        document.getElementById('bairro').value = '';
        document.getElementById('cidade').value = '';
        document.getElementById('uf').value = '';
    }
});
