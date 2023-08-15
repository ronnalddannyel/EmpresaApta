<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Aula</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Formulário de Aula</h2>
            <form action="process_form.php" method="post">
                <div class="mb-3">
                    <label for="instrutor" class="form-label">Nome do Instrutor</label>
                    <input type="text" class="form-control" id="instrutor" name="instrutor" required>
                </div>
                <div class="mb-3">
                    <label for="modalidade" class="form-label">Modalidade</label>
                    <input type="text" class="form-control" id="modalidade" name="modalidade" required>
                </div>
                <div class="mb-3">
                    <label for="local" class="form-label">Local e Endereço da Aula</label>
                    <input type="text" class="form-control" id="local" name="local" required>
                </div>
                
                <h4>Turma A</h4>
                <div class="mb-3">
                    <label for="aula1_data" class="form-label">1ª Aula - Dia </label>
                    <input type="date" class="form-control" id="aula1_data" name="aula1_data" required>
                </div>
                <div class="mb-3">
                    <label for="aula1_data" class="form-label">1ª Aula - Hora inicial</label>
                    <input type="time" class="form-control" id="aula1_data" name="aula1_data" required>
                </div>
                <div class="mb-3">
                    <label for="aula1_data" class="form-label">1ª Aula - Hora FINAL</label>
                    <input type="time" class="form-control" id="aula1_data" name="aula1_data" required>
                </div>
                <div class="mb-3">
                    <label for="aula1_alunos" class="form-label">1ª Aula - Quantidade de Alunos</label>
                    <input type="number" class="form-control" id="aula1_alunos" name="aula1_alunos" required>
                </div>

                <div class="mb-3">
                    <label for="aula2_data" class="form-label">2ª Aula - Dia e Hora inicial</label>
                    <input type="datetime-local" class="form-control" id="aula2_data" name="aula2_data" required>
                </div>
                <div class="mb-3">
                    <label for="aula2_alunos" class="form-label">2ª Aula - Quantidade de Alunos</label>
                    <input type="number" class="form-control" id="aula2_alunos" name="aula2_alunos" required>
                </div>
                <div class="mb-3">
                    <label for="observacoes_turmaA" class="form-label">Observações Turma A</label>
                    <textarea class="form-control" id="observacoes_turmaA" name="observacoes_turmaA"></textarea>
                </div>
                
                <h4>Turma B</h4>
                <div class="mb-3">
                    <label for="aula1_data_b" class="form-label">1ª Aula - Dia</label>
                    <input type="date" class="form-control" id="aula1_data_b" name="aula1_data_b" required>
                </div>
                <div class="mb-3">
                    <label for="aula1_horario_b" class="form-label">1ª Aula - Horário</label>
                    <input type="time" class="form-control" id="aula1_horario_b" name="aula1_horario_b" required>
                </div>
                <div class="mb-3">
                    <label for="aula1_alunos_b" class="form-label">1ª Aula - Quantidade de Alunos</label>
                    <input type="number" class="form-control" id="aula1_alunos_b" name="aula1_alunos_b" required>
                </div>
                <div class="mb-3">
                    <label for="aula2_data_b" class="form-label">2ª Aula - Dia</label>
                    <input type="date" class="form-control" id="aula2_data_b" name="aula2_data_b" required>
                </div>
                <div class="mb-3">
                    <label for="aula2_horario_b" class="form-label">2ª Aula - Horário</label>
                    <input type="time" class="form-control" id="aula2_horario_b" name="aula2_horario_b" required>
                </div>
                <div class="mb-3">
                    <label for="aula2_alunos_b" class="form-label">2ª Aula - Quantidade de Alunos</label>
                    <input type="number" class="form-control" id="aula2_alunos_b" name="aula2_alunos_b" required>
                </div>
                <div class="mb-3">
                    <label for="observacoes_turmaB" class="form-label">Observações Turma B</label>
                    <textarea class="form-control" id="observacoes_turmaB" name="observacoes_turmaB"></textarea>
                </div>
                


<!---TURMA C-->

<h4>Turma C</h4>
                <div class="mb-3">
                    <label for="aula1_data_b" class="form-label">1ª Aula - Dia</label>
                    <input type="date" class="form-control" id="aula1_data_b" name="aula1_data_b" required>
                </div>
                <div class="mb-3">
                    <label for="aula1_horario_b" class="form-label">1ª Aula - Horário</label>
                    <input type="time" class="form-control" id="aula1_horario_b" name="aula1_horario_b" required>
                </div>
                <div class="mb-3">
                    <label for="aula1_alunos_b" class="form-label">1ª Aula - Quantidade de Alunos</label>
                    <input type="number" class="form-control" id="aula1_alunos_b" name="aula1_alunos_b" required>
                </div>
                <div class="mb-3">
                    <label for="aula2_data_b" class="form-label">2ª Aula - Dia</label>
                    <input type="date" class="form-control" id="aula2_data_b" name="aula2_data_b" required>
                </div>
                <div class="mb-3">
                    <label for="aula2_horario_b" class="form-label">2ª Aula - Horário</label>
                    <input type="time" class="form-control" id="aula2_horario_b" name="aula2_horario_b" required>
                </div>
                <div class="mb-3">
                    <label for="aula2_alunos_b" class="form-label">2ª Aula - Quantidade de Alunos</label>
                    <input type="number" class="form-control" id="aula2_alunos_b" name="aula2_alunos_b" required>
                </div>
                <div class="mb-3">
                    <label for="observacoes_turmaB" class="form-label">Observações Turma B</label>
                    <textarea class="form-control" id="observacoes_turmaB" name="observacoes_turmaB"></textarea>
                </div>
                


<!---Turma D--->

<h4>Turma D</h4>
                <div class="mb-3">
                    <label for="aula1_data_b" class="form-label">1ª Aula - Dia</label>
                    <input type="date" class="form-control" id="aula1_data_b" name="aula1_data_b" required>
                </div>
                <div class="mb-3">
                    <label for="aula1_horario_b" class="form-label">1ª Aula - Horário</label>
                    <input type="time" class="form-control" id="aula1_horario_b" name="aula1_horario_b" required>
                </div>
                <div class="mb-3">
                    <label for="aula1_alunos_b" class="form-label">1ª Aula - Quantidade de Alunos</label>
                    <input type="number" class="form-control" id="aula1_alunos_b" name="aula1_alunos_b" required>
                </div>
                <div class="mb-3">
                    <label for="aula2_data_b" class="form-label">2ª Aula - Dia</label>
                    <input type="date" class="form-control" id="aula2_data_b" name="aula2_data_b" required>
                </div>
                <div class="mb-3">
                    <label for="aula2_horario_b" class="form-label">2ª Aula - Horário</label>
                    <input type="time" class="form-control" id="aula2_horario_b" name="aula2_horario_b" required>
                </div>
                <div class="mb-3">
                    <label for="aula2_alunos_b" class="form-label">2ª Aula - Quantidade de Alunos</label>
                    <input type="number" class="form-control" id="aula2_alunos_b" name="aula2_alunos_b" required>
                </div>
                <div class="mb-3">
                    <label for="observacoes_turmaB" class="form-label">Observações Turma B</label>
                    <textarea class="form-control" id="observacoes_turmaB" name="observacoes_turmaB"></textarea>
                </div>
                



                <div class="mb-3">
                    <label for="fotos_atividades" class="form-label">Fotos da Atividades</label>
                    <input type="file" class="form-control" id="fotos_atividades" name="fotos_atividades">
                </div>
                <div class="mb-3">
                    <label for="fotos_frequencia" class="form-label">Fotos da Frequência</label>
                    <input type="file" class="form-control" id="fotos_frequencia" name="fotos_frequencia">
                </div>
                
                <div class="mb-3">
                    <label for="conteudos" class="form-label">Conteúdos passados em sala de aula</label>
                    <textarea class="form-control" id="conteudos" name="conteudos" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="etapas" class="form-label">Etapas da aula</label>
                    <textarea class="form-control" id="etapas" name="etapas" required></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
