<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar os dados do formulário
    $instrutor = $_POST["instrutor"];
    $modalidade = $_POST["modalidade"];
    $local = $_POST["local"];
    
    $aula1_data = $_POST["aula1_data"];
    $aula1_alunos = $_POST["aula1_alunos"];
    $aula2_data = $_POST["aula2_data"];
    $aula2_alunos = $_POST["aula2_alunos"];
    $observacoes_turmaA = $_POST["observacoes_turmaA"];
    
    $aula1_data_b = $_POST["aula1_data_b"];
    $aula1_horario_b = $_POST["aula1_horario_b"];
    $aula1_alunos_b = $_POST["aula1_alunos_b"];
    $aula2_data_b = $_POST["aula2_data_b"];
    $aula2_horario_b = $_POST["aula2_horario_b"];
    $aula2_alunos_b = $_POST["aula2_alunos_b"];
    $observacoes_turmaB = $_POST["observacoes_turmaB"];
    
    $conteudos = $_POST["conteudos"];
    $etapas = $_POST["etapas"];
    
    // Processar os dados (aqui você pode salvar em um banco de dados, enviar por email, etc.)
    
    // Exemplo de saída para demonstração
    echo "<h1>Dados Recebidos:</h1>";
    echo "<p>Instrutor: $instrutor</p>";
    echo "<p>Modalidade: $modalidade</p>";
    echo "<p>Local: $local</p>";
    echo "<p>1ª Aula Turma A - Data: $aula1_data, Alunos: $aula1_alunos</p>";
    echo "<p>2ª Aula Turma A - Data: $aula2_data, Alunos: $aula2_alunos</p>";
    echo "<p>Observações Turma A: $observacoes_turmaA</p>";
    echo "<p>1ª Aula Turma B - Data: $aula1_data_b, Horário: $aula1_horario_b, Alunos: $aula1_alunos_b</p>";
    echo "<p>2ª Aula Turma B - Data: $aula2_data_b, Horário: $aula2_horario_b, Alunos: $aula2_alunos_b</p>";
    echo "<p>Observações Turma B: $observacoes_turmaB</p>";
    echo "<p>Conteúdos: $conteudos</p>";
    echo "<p>Etapas: $etapas</p>";
} else {
    echo "Erro: Método de requisição inválido.";
}
?>
