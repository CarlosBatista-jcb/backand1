<?php
	//alterei aqui
	//include("dados.php");
	require("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<!-- //alterei aqui -->
				<li><a href="#HOME" title="HOME" alt="Tutoriais">HOME</a></li>
				<li><a href="#" title="Blog" alt="blog">Blog</a></li>
				<li><a href="#" title="Conheça a Dona Dirce" alt="Conheça a Dona Dirce">Conheça a Dona Dirce</a></li>
				<li><a href="#" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">

				<header class="main_tutorial_header">
                    <h1><h1><a name="HOME">Dona Rita, Sabor caseiro em suas Refeições</h1></h1>
                    </header>
                    <p>Desfrute do melhor da cozinha Mineira</p>
                    <p><a href="#HOME" class="btn">Saiba Mais</a></p>


				<header class="main_tutorial_header">
				<!-- //alterei aqui -->
				</div>
            </article>
        </div>
		
		<section class="main_tutorial">
		<header class="main_tutorial_header">
				<!-- //alterei aqui -->
				<h1><a name="HOME">Conheça Nossas Opções</h1></a>
				<p>Telefone para entrega na Aba Contato</p>
			</header>
			<?php
			//validar se array existe e se não está vazio
			if(is_array($tutoriais) && !empty($tutoriais)){
				foreach($tutoriais as $key => $value){
			?>

			
			<article>
				<!-- passar o titulo da noticia para ser impresso no title da página -->
				<a href="pagina2.php?id=<?=$value['id'];?>">
				<!-- //alterei aqui -->
				<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>"></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 150);?>...</p>
			</article>
			<?php
			}
		}else{
			echo "Sem Tutoriais no momento!!!";
		}
			?>
			
		</section>
		<!--suport -->
        <article class="main_suport">
            <div class="main_suport_content">
                <header>
				<li><a href="#HOME" title="HOME" alt="Tutoriais">HOME</a></li> 
				<li><a href="#" title="Conheça a Dona Dirce" alt="Conheça a Dona Dirce">Conheça a Dona Dirce</a></li>
                </header>
                
               
				
            </div>
			<center><font color="white">José Carlos Batista Id Unicessumar RA 1818374-5</font></center></br>
				
			<center><a href="https://api.whatsapp.com/send?phone=41995212462" style="color:white" target="_blank" >FAÇA SE PEDIDO VIA WHATSSAP</a></center>
        </article>
        <!--3ª dobra-->
	</main>

	<footer>
	<!-- preparar o footer -->
	</footer>
	
</body>
</html>