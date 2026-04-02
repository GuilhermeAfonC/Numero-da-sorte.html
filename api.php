<?php
// Fala pro navegador que vai receber um JSON
header('Content-Type: application/json');

// Recebe a pergunta enviada pelo JS
$pergunta = htmlspecialchars($_POST['pergunta'] ?? '');

if(empty($pergunta)) {
    echo json_encode(['resposta' => 'Resposta inválida.']);
    exit;
}

// Array de respostas possíveis
$respostas = [
    'Boa, acerrtou',
    'Não foi desta vez.',
    'Quase lá, tente novamente.',
    'A resposta está dentro de você.',
];

// Sorteia uma resposta aleatória do array
$resposta = $respostas[array_rand($respostas)];

// Devolve o JSON pro JS
echo json_encode(['resposta' => $resposta]);
