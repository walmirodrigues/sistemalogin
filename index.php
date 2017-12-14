<!DOCTYPE html>
<html > 
	<head>
	  <meta charset="UTF-8">
	  <title>Formulário de Login</title>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	  <link rel="stylesheet" href="css/estilo.css">
        <script type="text/javascript">
            function validar_form_contato(){
                var usuario = formcontato.usuario.value;
                var senha = formcontato.senha.value;
                
                if(usuario == ""){
                    alert("Campo Usuário obrigatorio");
                    formcontato.usuario.focus();
                    return false;
                }if(senha == ""){
                    alert("Campo Senha obrigatorio");
                    formcontato.senha.focus();
                    return false;
                }
            }
        </script>
        
	</head>

	<body>
		<div class="login">
			<h1>Login de Acesso</h1>
			<form name= "formcontato" method="post" action="acesso.php">
		    	<input type="text" name="usuario" placeholder="Usuário" required="required" />
		        <input type="password" name="senha" placeholder="Senha" required="required" />
	        	<button onclick="return validar_form_contato()" type="submit" class="btn btn-primary btn-block btn-large">Entrar</button>
	    	</form>
	 	</div>
	</body>
</html>
