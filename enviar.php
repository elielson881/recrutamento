<?php
$to = "elielsondasilvabarbosa@outlook.com
";
$subject = "Novo recrutamento para o clan";
$message = "Nome: " . $_POST['nome'] . "\n";
$message .= "Idade: " . $_POST['idade'] . "\n";
$message .= "Nick: " . $_POST['nick'] . "\n";
$message .= "Motivo: " . $_POST['motivo'] . "\n";
$headers = "From: no-reply@seusite.com";

if(mail($to, $subject, $message, $headers)) {
    echo "Formulário enviado com sucesso!";
} else {
    echo "Erro ao enviar o formulário.";
}
?>
