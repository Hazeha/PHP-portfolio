

<div class="row information">
    <section class="col-md-8">
        <article class="blog-post">
            <h2 class="blog-post-title">A Day as Nikolaj Drejer</h2>
            Jeg er en idérig og nysgerrig
            multimediedesigner/programmør med en
            stor passion for design og systemer. Jeg
            brænder for at udvikling og design.
            Jeg har leget med computere siden 11 års
            alderen og begyndte at udvikle mine egne
            programmer, scripts, hjemmesider mv. Til
            spil og lego robotter.


            <h3>Til Perfektion</h3>
            Jeg bestræber mig efter at skabe flere erfaringer og for at dygtiggøre mig indenfor webdesign og webudvikling samt funktionalitet og optimering. Jeg kan tilbyde gode kode egenskaber, innovative designs, funktioner samt søgemaskineoptimering.

            <hr>
        </article><!-- /.blog-post -->

        <article class="blog-post">
            <h2 class="blog-post-title">Career Timeline</h2>
            <div class="timeline">
                <div class="container left">
                    <div class="content">
                        <h2>2013 - Nu</h2>
                        <h4>Schæffergården | Teknikker</h4>
                        <p>Jeg arbejder som teknikker på hotel og konference centeret Schæffergården i
                            Gentofte. Hvor jeg har haft ansvaret for det tekniske udstyr til konferencerne om
                            aftenen. Dertil har jeg også hjulpet med hjemmeside og info system på hotellets TV
                            skærme på værelser og gange. Samt service af Spektra booking system/servere.</p>
                    </div>
                </div>
                <h2 class="blog-post-title">Study Timeline</h2>

                <div class="container right">
                    <div class="content">
                        <h2>2016-2018</h2>
                        <h4>HØJERE FORBEREDELSESEKSAMEN</h4>
                        <p>Jeg tog en HF da jeg tidligere havde været i lære som datamatiker i Lyngby,
                            men fandt universitetsvejen mere spændende, som jeg skulle have en gymnasial
                            uddannelse for at kunne påbegynde.</p>
                    </div>
                </div>
                <div class="container left">
                    <div class="content">
                        <h2>2018-2020</h2>
                        <h4>Multimedie Design</h4>
                        <p>Jeg er i gang som Multimediedesigner på ZIBAT i køge. Jeg har bestået de 3
                            første semestre med karaktererne 7 ,10 og 10 og mangler nu en praktikplads før
                            hovedopgaven.</p>
                    </div>
                </div>
                <div class="container right">
                    <div class="content">
                        <h2>2020 - Nu</h2>
                        <h4>Webudvikling</h4>
                        <p>Studere webudvikling i Roskilde. Valget med at studere videre tog jeg på baggrund af at mangle udfordringer indenfor design og UX</p>
                    </div>
                </div>

            </div>


        </article><!-- /.blog-post -->


        <article class="blog-post">
            <h2 class="blog-post-title">All Projects</h2>
            <ul>
                <?php
                Link::getAll();
                ?>
            </ul>

        </article><!-- /.blog-post -->

        <nav class="blog-pagination" aria-label="Pagination">
            <a class="btn btn-outline-primary load-more" href="#">Load more</a>
        </nav>

    </section>
    <!-- sidebar -->
    <aside class="col-md-4">
        <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">About</h4>
            <p class="mb-0">The name is Nikolaj Drejer, Ive been around computers all my life and spend alot of time learning my self how they work and how to make different kind of software..</p>

        </div>

        <div class="p-4">
            <h4 class="fst-italic">Languages</h4>
            <ol class="list-unstyled mb-0">
                <div class="icons">
                    <i class="html5 fab fa-html5"></i>
                    <div class="css3">css</div>
                    <div class="sass"><i class="fab fa-sass"></i></div>
                    <div class="scss">scss</div>
                    <div class="bootstrap"><i class="fab fa-bootstrap"></i></div>
                    <div class="javascript"><i class="fab fa-js-square"></i></div>
                    <div class="typescript">TS</div>
                    <div class="vue"><i class="fab fa-vuejs"></i></div>
                    <div class="react"><i class="fab fa-react"></i></div>
                    <div class="angular"><i class="fab fa-angular"></i></div>
                    <div class="nodejs"><i class="fab fa-node"></i></div>
                    <div class="php"><i class="fab fa-php"></i></div>
                    <div class="c"><i>C#</i></div>
                    <div class="sql"><i class="fas fa-database"></i></div>
                    <div class="firebase"><i class="fab fa-free-code-camp"></i></div>
                    <div class="threejs"><i class="fas fa-dice-three"></i></div>
                    <div class="un4"><i class="fas fa-vr-cardboard"></i></div>
                    <div class="unity"><i class="fab fa-unity"></i></div>
                </div>
            </ol>
        </div>

        <div class="p-4">
            <h4 class="fst-italic">Follow Me</h4>
            <ol class="list-unstyled">
                <li><a href="#">GitHub</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
            </ol>
        </div>
    </aside>
</div><!-- /.row -->
