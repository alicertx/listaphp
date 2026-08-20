# listaphp
conexão.php vai fazer a conexão do banco e vai verificar se tem erro com a conexão do banco de dados.

index.php Esse código cria uma tela de login e pega o e-mail e a senha que o usuário digitou. Depois, ele verifica no banco de dados se o e-mail e a senha estão corretos. Se estiverem certos, o usuário entra no painel.php; se estiverem errados, aparece Falha ao logar. ele tambem faz a seleção de usuarios e protege contra caracteres especiais com o real escape,e define enviar pelo metodo post.

logout.php Primeiro, ele verifica se a sessão ainda não foi iniciada. Se não estiver iniciada, ele a inicia com session_start. Depois, usa session_destroy para apagar todos os dados da sessão atual, como o ID e o nome do usuário logado. Em seguida, com header("Location: index.php"), ele manda o usuário de volta para a página de login.ele encerra a sessão e leva o usuário para a área de acesso.

painel.php Esse código é a página do painel, que só aparece para usuários logados. Ele inclui protect.php para verificar se o usuário está autenticado, mostra o nome dele com $_SESSION nome e oferece um link para sair com logout.php

protect.php Esse código protege a página e garante que só usuários logados possam acessá-la. Ele inicia a sessão se necessário e verifica se $_SESSION id existe; se não existir, encerra a execução e mostra uma mensagem dizendo que o usuário não está logado, com um link para entrar novamente.
