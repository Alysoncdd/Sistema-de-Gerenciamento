document.getElementById('formAgendamento').addEventListener('submit', function(event) {
    const paciente = document.getElementById('paciente').value;
    const medico = document.getElementById('medico').value;
    const data = document.getElementById('data').value;
    const horario = document.getElementById('horario').value;

    if (!paciente || !medico || !data || !horario) {
        alert('Por favor, preencha todos os campos!');
        event.preventDefault();
    }
});