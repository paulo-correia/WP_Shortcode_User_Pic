<h2>Shortcode para WordPress que exibe a foto do usuário</h2>

Para instalar entre no diretório onde está instalado o seu WordPress, localize a pasta wp-content e entre nela, dentro dela localize a pasta themes, dentro desta pasta estarão todos os temas que instalou, mas para instalar este shortcode tem que verificar no Painel/"Dashboard" do WordPress qual é o tema que está ativo.

Mas, vamos supor que o seu tema ativo é o Twenty Sixteen neste caso lozalize a pasta twentysixteen e entre nela.

Dentro desta pasta existirão vários arquivos, localize o arquivo functions.php e faça uma cópia dele com o nome functions.ori.

Usando um Editor de sua preferência, no final deste arquivo adicione o código PHP abaixo:

```
function display_userpic() {
	if (is_user_logged_in()) {
		$current_user = wp_get_current_user();
		$id=$current_user->ID;
		return get_avatar($id, 0, 'userpic' );
	} 
}
add_shortcode('userpic','display_userpic');
```
Salve o arquivo e feche o editor.

Em qualquer página ou post do wordpress adicione o shortcode [userpic], se o usuário tiver foto no seu perfil e estiver digitado o usuário e senha a foto dele será exibida na página ou post.

