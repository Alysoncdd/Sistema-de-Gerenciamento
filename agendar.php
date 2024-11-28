<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $paciente = $_POST['paciente'];
    $medico = $_POST['medico'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];

    // Insere o agendamento no banco de dados
    $stmt = $pdo->prepare("INSERT INTO consultas (paciente, medico_id, data, horario) VALUES (?, ?, ?, ?)");
    $stmt->execute([$paciente, $medico, $data, $horario]);

    // Redireciona para uma página de sucesso
    header("Location: /sucesso.html");
    exit;
}
?>