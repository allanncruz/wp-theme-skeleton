<?php
    get_header();
    the_post() ?>

    <section class="page">
        <div class="container page-area mt-5">
            <div class="text-center">
                <h1 class="title"><?php the_title(); ?></h1>
            </div>  
            
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <article class="px-md-5 px-2">
                        <?php the_content(); ?>

                        <form 
                            action="<?php bloginfo("template_directory"); ?>/envio.php"  
                            class="" 
                            method="post" 
                            enctype="multipart/form-data"
                            >

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="Nome">
                                            DIGITE SEU NOME:*
                                            <input 
                                                class="form-control"
                                                id="Nome"
                                                type="text" 
                                                name="nome" 
                                                required 
                                                >
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Email">
                                            E-Mail*
                                            <input 
                                                class="form-control"
                                                id="Email"
                                                type="email" 
                                                name="email"
                                                required 
                                                >
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Phone">
                                            Telefone*
                                            <input 
                                                class="form-control" 
                                                id="Phone" 
                                                type="text" 
                                                name="telefone" 
                                                required
                                                >
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="Msg">
                                            Mensagem
                                            <textarea 
                                                class="form-control" 
                                                id="Msg" 
                                                rows="5"
                                                name="mensagem"
                                                ></textarea>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row text-center">

                                <div class="col-12 d-flex justify-content-center">
                                    <div class="g-recaptcha" data-sitekey=""></div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="submit" value="Solicitar" class="btn btn-primary mt-4">
                                        <input type="hidden" name="recipient" value="contato@allancruz.com.br">
                                        <input type="hidden" name="redirect" value="<?php bloginfo("url") ?>/obrigado">
                                        <input type="hidden" name="subject" value="Contato - Engine FrontEnd Wordpress">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <script src='https://www.google.com/recaptcha/api.js'></script>
                    </article>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>