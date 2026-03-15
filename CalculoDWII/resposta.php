<?php
// recebe e armazena os dados do formulario
$nome  = $_POST['nome'];
$nota1 = (float) $_POST['nota1'];
$nota2 = (float) $_POST['nota2'];

// calcula a media das notas em DWII
$media = ($nota1 + $nota2) / 2;

// verifica a aprovacao, min nota 6
$aprovado = $media >= 6;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resposta — DWII</title>
</head>
<body>

  <h1>Resposta - Desenvolvimento Web II</h1>

  <p><strong>Aluno:</strong> <?php echo htmlspecialchars($nome); ?></p>
  <p><strong>1ª Nota:</strong> <?php echo number_format($nota1, 1, ',', ''); ?></p>
  <p><strong>2ª Nota:</strong> <?php echo number_format($nota2, 1, ',', ''); ?></p>
  <p><strong>Média Final:</strong> <?php echo number_format($media, 2, ',', ''); ?></p>

  <?php if ($aprovado): ?>
    <p><strong>Situação:</strong> Aprovado(a)!</p>
  <?php else: ?>
    <p><strong>Situação:</strong> Reprovado(a). A média mínima para aprovação é 6,0.</p>
  <?php endif; ?>

  <br>
  <a href="home.html">← Novo lançamento</a>

</body>
</html>