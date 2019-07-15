<?php
require_once 'classes/traffic.php';
new Traffic();
require_once 'header.php';

?>
    <div class="banner">
        <div class="title">
            <h2>OUSE INOVAR!</h2>
            <h3>Criamos experiência e estabelecemos ações estratégicas que conectam marcas a consumidores </h3>
        </div>
        <div class="buttons">
            <button class="btn-cadastrar">Cadastrar<i class="fa fa-arrow-circle-right"></i></button>
            <button class="btn-sobre">Sobre<i class="fa fa-question-circle"></i></button>
        </div>
    </div>
    <main class="servicos">
        <article class="servico">
            <a href="#"><img src="img/criacoes.jpg" alt="Campanhas publicitárias"></a>
            <div class="inner">
                <a href="#">Campanhas publicitárias</a>
                <h1>Impressos, VTs e Jingles</h1>
                <p>Se você está precisando de criação de algum material em específico, conte com a nossa equipe de profissionais. Eles farão toda campanha publicitária. VT, outdoor, folder, anúncio e muito mais pela sua empresa no mais alto padrão de qualidade.</p>
            </div>
        </article>
        <article class="servico">
            <a href="#"><img src="img/md.jpg" alt="Campanhas publicitárias"></a>
            <div class="inner">
                <a href="#">Marketing Digital</a>
                <h1>Administração de Redes Sociais</h1>
                <p>Como agência de publicidade aplicamos estratégias nos meios digitais para que a seu negócio seja visto por milhões de usuários. O Brasil é o 5° país mais conectado do mundo. Por este motivo, o seu negócio não pode ficar fora do do mercado digital</p>
            </div>
        </article>
        <article class="servico">
            <a href="#"><img src="img/cs.jpg" alt="Campanhas publicitárias"></a>
            <div class="inner">
                <a href="#">Criação de Sites</a>
                <h1>Sites Administráveis</h1>
                <p>Agora você pode administrar seu site quando e como quiser. E melhor ainda pois você pode pagar por este serviço, pois desenvolvemos de forma. Seu site atualizado, com seus últimos produtos, integração com redes sociais, agora é possível.</p>
            </div>
        </article>
    </main>
    <!-- NEWSLATTER-->
    <section class="newslatter">
        <h2>Inscreva-se agora!</h2>
        <h3>Receba novidades, dicas e muito mais</h3>
        <form>
            <input type="email" name="email" placeholder="Digite seu email">
            <button>Cadastrar</button>
        </form>
    </section>

<?php
require_once 'footer.php';

?>
