<?php
require_once('db_conection.php');


# Conexão ao banco de dados (Supabase)
try {
	$dsn = "pgsql:host=$dbHost;port=$dbPort;dbname=$dbname";
	// make a database connection
	$connection = new PDO(dsn: $dsn, username: $dbUser, password: $dbPass, options: [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
    ]);

	if ($pdo) {
		echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	die($e->getMessage());
} finally {
	if ($pdo) {
		$pdo = null;
	}
}

# Captura e sanitização inicial dos dados enviados via POST
$Data = array_map('trim', $_POST);

# Tratamento específico de campos
$Data['cpf_cnpj'] = isset($Data['cpf_cnpj']) ? preg_replace('/\D/', '', $Data['cpf_cnpj']) : '';
$Data['cep'] = isset($Data['cep']) ? preg_replace('/\D/', '', $Data['cep']) : '';
$Data['numero'] = isset($Data['numero']) ? (int)$Data['numero'] : 0;
$Data['data_nasc'] = isset($Data['data_nasc']) ? date("Y-m-d", strtotime(str_replace('/', '-', $Data['data_nasc']))) : '';

# Sanitização adicional para evitar XSS
$Data = array_map(function($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}, $Data);


if ($connection) echo "Pemba";
# Definição e preparação da query SQL
$sql = "INSERT INTO cadastros
        (nome, pessoa_fisica, cpf_cnpj, contato, email, cep, endereco,  numero, complemento, observacoes)
        VALUES (:nome, :pessoa_fisica, :cpf_cnpj, :contato, :email, :cep,  :endereco, :numero, :complemento, :observacoes)";

$stmt = $connection->prepare($sql);

# Execução da query com os parâmetros tratados
$stmt->execute([
    ':nome' => $Data['nome'] ?? '',
    ':pessoa_fisica' => $Data['pessoa_fisica'] ?? '',
    // ':data_nasc' => $Data['data_nasc'] ?? '',
    ':cpf_cnpj' => $Data['cpf_cnpj'],
    ':contato' => $Data['contato'] ?? '',
    ':email' => $Data['email'] ?? '',
    ':cep' => $Data['cep'],
    ':endereco' => $Data['endereco'] ?? '',
    ':numero' => $Data['numero'],
    ':complemento' => $Data['complemento'] ?? '',
    ':observacoes' => $Data['observacoes'] ?? ''
]);

?>