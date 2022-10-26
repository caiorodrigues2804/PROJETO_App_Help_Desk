<?php 

	// print '<pre>';
	// 	print_r($_POST);
	// print '</pre>';
	session_start();
	
	$usuario_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;

	$perfis = array(1 => 'Administrativo', 2 => 'Usuário');

	// ---> Relação de usuarios do sistema
	$usuario_app = array(
		array('id' => 1,'email' => 'adm@teste.com.br', 'password' => '123456', 'perfil_id' => 1),
		array('id' => 2,'email' => 'user@teste.com.br', 'password' => '123456', 'perfil_id' => 1),
		array('id' => 3,'email' => 'caio@teste.com.br', 'password' => 'abcd', 'perfil_id' => 2),
		array('id' => 4,'email' => 'jose@teste.com.br', 'password' => 'abcd1','perfil_id' => 2),
	);

	foreach($usuario_app as $user){
		if ($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']) {
			$usuario_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
		}
	}

	
	print '<hr/>';

	if ($usuario_autenticado) {
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_id'] = $usuario_perfil_id;
		header('Location: home.php');
	} else{
		$_SESSION['autenticado'] = 'NÃO';
		header('Location: index.php?login=error');
	}


	// print '<pre>';
	// 	print_r($usuario_app);
	// print '<pre>';

	// print '<pre>';
	// 	print_r($_POST);
	// print '</pre>';

?>