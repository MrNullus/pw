<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=q, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
    <title>God Of War</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column bg-black">
        <header class="d-flex flex-wrap justify-content-center pt-2 mb-1">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <img src="{{ url('/images/logoPreto.png') }}" alt="" class="logo-header"/>
            </a>

            <ul class="nav nav-pills align-items-center">
                <li class="nav-item"><a href="/" class="nav-link active bg-light text-dark font-weight-700" aria-current="page">Introdução</a></li>
                <li class="nav-item"><a href="/guia" class="nav-link color-link-red">Guia da Franquia</a></li>
                <li class="nav-item"><a href="/iscoming" class="nav-link color-link-red">Is coming</a></li>
            </ul>
        </header>
    </div>

    <main>
        <div class="d-md-flex  w-100" style="flex-direction: column;">
            <div class="text-bg-dark pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="bg-dark shadow-sm mx-auto guia-imagem" style="height: 300px; border-radius: 21px 21px 0 0; background-image: url({{ url('/images/guia/god-of-war-ascension-001-1060x596.jpg'); }});"></div>

                <div class="my-3 py-3">
                    <h2 class="display-5">God of War Ascension</h2>
                    <p class="lead">God of War Ascension apesar de ser um último título lançado para o PlayStation 3 pode ser considerado o primeiro jogo na cronologia.</p>
                    <p class="lead">O título conta a história de como Kratos quebrou seu juramento com Ares, o Deus da Guerra original. Durante a trama, Kratos descobre que a única forma de acabar com seu laço com Ares é derrotar as três Fúrias: Megera, Tisífone e Alecto. </p>
                    <p class="lead">Kratos tem a mente manipulada pelas Fúrias algumas vezes, mas consegue sair vitorioso graças a uma ajuda de Orkos, o filho das Fúrias.</p>
                    <p class="lead">Infelizmente para Orkos, as Fúrias usaram seu corpo como selo para juramento entre Ares e Kratos. No fim, Kratos precisa matar a única divindade que tentou ajudá-lo de forma verdadeira. </p>
                    <p class="lead">God of War Ascension é um jogo que não acrescenta informações importantes para a franquia. Entretanto, apresenta algumas mudanças na jogabilidade como a manipulação do tempo e também a implementação de um modo multiplayer online em que o jogador assume o controle de um campeão dos deuses. </p>
                    <p class="lead">Esse também foi o último jogo em que Terence Carlson deu voz a Kratos. </p>
                </div>
                <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 100px; border-radius: 21px 21px 0 0;"></div>
            </div>
            <div class="bg-light pt-3  pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="bg-dark shadow-sm mx-auto guia-imagem" style="height: 300px; border-radius: 21px 21px 0 0; background-image: url({{ url('/images/guia/god-of-war-chains-of-olympus-002-1060x596.jpg'); }});"></div>

                <div class="my-3 p-3">
                    <h2 class="display-5">God of War: Chains of Olympus</h2>
                    <p class="lead">Lançado para PSP e depois portado para PS3, God of War: Chains of Olympus apresenta fatos anteriores ao primeiro título da série. </p>
                    <p class="lead">O jogo começa com Kratos procurando por Hélio, o deus sol para evitar que a névoa negra de Morfeu mantivesse o mundo inteiro em um sono profundo. </p>
                    <p class="lead">Kratos vai até o submundo e chega aos Campos Elíseos, onde as almas puras podem descansar. Kratos abdica de seus poderes para ficar no local com sua filha Calíope.</p> 
                    <p class="lead">Após abrir mão dos poderes, Kratos descobre que tudo era um plano de Perséfone, a esposa de Hades cujo objetivo era soltar o titã Atlas, fazendo com ele não segurasse mais o Monte Olimpo e no processo matasse a todos, incluindo a própria Perséfone e as almas presentes nos Elíseos. </p>
                    <p class="lead">No fim do game, Kratos abre a Caixa de Pandora, consegue o poder necessário para derrotar Ares, mas, em contrapartida, libera os males pelo mundo, gerando consequências para o enredo dos jogos seguintes. Na última cena do game, Atena informa que com a morte de Ares, existe uma vaga disponível no Olimpo.</p>
                    
                </div>
                <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 100px; border-radius: 21px 21px 0 0;"></div>
            </div>
            <div class="text-bg-dark pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="bg-dark shadow-sm mx-auto guia-imagem" style="height: 300px; border-radius: 21px 21px 0 0; background-image: url({{ url('/images/guia/god-of-war-1-1060x596.jpg'); }});"></div>

                <div class="my-3 py-3">
                    <h2 class="display-5">God of War</h2>
                    <p class="lead">A trajetória de Kratos começa em 2005 no game dirigido por David Jaffe. Boa parte de sua história é contada em flashback, com o protagonista saltando da montanha mais alta da Grécia e os fatos apresentados se passando antes desse momento, explicando a história, motivações de Kratos e como ele fez seu pacto com Ares, após estar prestes a perder uma batalha contra os bárbaros do oeste.</p> 
                    <p class="lead">O ponto crucial é quando Kratos ataca uma cidade e após matar muitas pessoas em um templo, ele vê que as últimas vítimas do massacre são sua esposa e filha. O oráculo da cidade faz com que as cinzas da família de Kratos cubram sua pele, gerando o apelido de “Fantasma de Esparta”.</p>
                    <p class="lead">No decorrer da história é visto que Ares colocou a família de Kratos no vilarejo para que Kratos perdesse qualquer vínculo com a humanidade e se tornasse o guerreiro perfeito.</p>
                </div>
                <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 100px; border-radius: 21px 21px 0 0;"></div>
            </div>

            <div class="bg-light pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="bg-light shadow-sm mx-auto guia-imagem" style="height: 300px; border-radius: 21px 21px 0 0; background-image: url({{ url('/images/guia/god-of-war-2-1060x596.jpg'); }});"></div>

                <div class="my-3 p-3">
                    <h2 class="display-5">God of War II </h2>
                    <p class="lead">Após assumir o posto de Deus da Guerra, Kratos ataca cidades protegidas por outros deuses. Durante o ataque à cidade de Rhodes, Kratos perde seus poderes ao colocar toda sua energia na Lâmina do Olimpo, enviada por Zeus. </p>

                    <p class="lead">Kratos é jogado ao submundo e salvo por Gaia, uma das titãs sobreviventes da grande guerra contra os deuses e os dois decidem fazer uma aliança.</p>

                    <p class="lead">O espartano vai ao encontro das Irmãs do Destino, responsáveis por controlarem o fluxo do tempo. Dessa forma, Kratos poderia voltar no tempo e evitar a traição de Zeus.</p>

                    <p class="lead">Durante a jornada, Kratos encontra Atlas novamente. O titã não queria cooperar, mas o ódio pelos deuses era maior que o ódio por Kratos e assim cede um pouco de seu poder ao espartano.</p>

                    <p class="lead">Kratos vence as Irmãs do Destino e consegue voltar no tempo para impedir que Zeus tome seus poderes. O espartano descobre que Zeus é seu pai e após vencer a batalha, Kratos volta no tempo mais uma vez. </p>
                </div>
                <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 100px; border-radius: 21px 21px 0 0;"></div>
            </div>

            <div class="text-bg-dark pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="text-bg-dark shadow-sm mx-auto guia-imagem" style="height: 300px; border-radius: 21px 21px 0 0; background-image: url({{ url('/images/guia/god-of-war-iii-001-1060x596.jpg'); }});"></div>

                <div class="my-3 p-3">
                    <h2 class="display-5">God of War III</h2>
                    <p class="lead">God of War III começa com os titãs escalando o Monte Olimpo para enfrentar os deuses. Durante essa primeira batalha, Kratos mata Poseidon, o que gera um cataclismo com inúmeras inundações.</p>

                    <p class="lead">Kratos vai parar no submundo, porém desta vez, para enfrentar Hades. Em certos pontos o game mostra alguns easter eggs, como a possibilidade de ver o corpo de Perséfone em uma sala. Pois é, esposa de Hades e principal vilã em God of War: Chains of Olympus faz uma pequena aparição aqui.</p>

                    <p class="lead">A lista de baixas no Olimpo aumenta: desta vez Hélio, Hermes, Hércules, Hefesto, Hera e Cronos entram no obituário de Kratos. O espartano está à procura de Pandora que seria a detentora do segredo para acabar com Zeus.</p>

                    <p class="lead">Zeus e Kratos lutam no interior do corpo de Gaia até que Kratos empala Zeus com sua espada junto ao coração de Gaia, matando ambos.</p>

                    <p class="lead">A grande virada acontece quando Kratos vence Zeus e Atena aparece, exigindo que o guerreiro ceda seu poder para que ela construa um novo mundo. Kratos se recusa, e ao perceber que se tratava de mais um plano dos deuses, decide tirar a própria vida para evitar que o pior acontecesse.</p>
                </div>
                <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 100px; border-radius: 21px 21px 0 0;"></div>
            </div>

            <div class="bg-light pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="bg-dark shadow-sm mx-auto guia-imagem" style="height: 300px; border-radius: 21px 21px 0 0; background-image: url({{ url('/images/guia/Como-jogar-god-of-war-001-1060x596.jpg'); }});"></div>
                
                <div class="my-3 p-3">
                    <h2 class="display-5">God of War</h2>
                    <P class="lead">God of War lançado para PlayStation 4 em 2018 funciona como um reboot e também como sequência. Agora, Kratos está em um contexto completamente novo na mitologia nórdica — afinal, não sobraram muitos deuses no Olimpo — e, além disso, ele mantém todas as lembranças do que aconteceu na Grécia.</P>

                    <p class="lead">Kratos tenta viver pacificamente, longe dos fantasmas do passado, mas após a morte de sua esposa, decide realizar seu último desejo e jogar suas cinzas do ponto mais alto dos nove reinos. Para isso ele precisa preparar seu filho para uma longa jornada. Contudo, um dia, eles são atacados inesperadamente por um homem misterioso que parecia não sentir dor. </p>

                    <p class="lead">Atreus fica doente durante a viagem e os aliados falam que Kratos deve revelar ao seu filho que ele não é humano, mas sim um deus. Não ter conhecimento sobre essa condição agrava a doença do garoto.</p>

                    <p class="lead">Após derrotar Baldur, o homem que não sentia dor, e chegar a Jötunheim, Kratos e Atreus completam sua missão. Quando entram em um templo, encontram um mural em que os gigantes previram toda a jornada. Neste ponto também é descoberto que Faye, a mãe de Atreus, na verdade, era uma gigante que decidiu viver no reino dos humanos. </p>

                    <p class="lead">Assim descobrimos que Atreus não é apenas metade deus e metade humano, mas sim metade deus e metade gigante. Além disso, seu nome original seria Loki, antes de Kratos mudá-lo para homenagear um companheiro.</p>
                    <p class="lead">O jogo termina com um gancho de que Thor virá para confrontá-los. </p>
                </div>
                <div class="text-bg-dark shadow-sm mx-auto" style="width: 80%; height: 100px; border-radius: 21px 21px 0 0;"></div>
            </div>

            <div class="text-bg-dark text-center overflow-hidden">
                <div class="bg-dark shadow-sm mx-auto guia-imagem" style="height: 300px; border-radius: 21px 21px 0 0; background-image: url({{ url('/images/guia/god-of-war-ragnarok-001.jpg'); }});"></div>

                <div class="my-3 p-3">
                    <h2 class="display-5">God of War Ragnarok</h2>
                    <P class="lead">O jogo vai se passar três anos após os eventos de God of War, visto que o Fimbulwinter, o inverno nórdico que precede o Ragnarok chegou.</P>

                    <p class="lead">Resta aguardar para ver quais perigos aguardam os protagonistas e como esse capítulo vai encerrar a cronologia de God of War.</p>

                    <p class="lead">Atreus fica doente durante a viagem e os aliados falam que Kratos deve revelar ao seu filho que ele não é humano, mas sim um deus. Não ter conhecimento sobre essa condição agrava a doença do garoto.</p>

                    <p class="lead">Após derrotar Baldur, o homem que não sentia dor, e chegar a Jötunheim, Kratos e Atreus completam sua missão. Quando entram em um templo, encontram um mural em que os gigantes previram toda a jornada. Neste ponto também é descoberto que Faye, a mãe de Atreus, na verdade, era uma gigante que decidiu viver no reino dos humanos. </p>

                    <p class="lead">Assim descobrimos que Atreus não é apenas metade deus e metade humano, mas sim metade deus e metade gigante. Além disso, seu nome original seria Loki, antes de Kratos mudá-lo para homenagear um companheiro.</p>
                    <p class="lead">O jogo termina com um gancho de que Thor virá para confrontá-los. </p>
                </div>
                <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 100px; border-radius: 21px 21px 0 0;"></div>
            </div>
        </div>
    </main>

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column bg-black">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">&copy; 2022 Company, Inc</p>

            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="./" class="nav-link px-2 text-muted color-link-red">Home</a></li>
                <li class="nav-item"><a href="github.com/MrNullus" class="nav-link px-2 text-muted">Mr. Nullus</a></li>
                <li class="nav-item"><a href="github.com/" class="nav-link px-2 text-muted">Teu GitHub</a></li>
            </ul>
        </footer>
    </div>
</body>

</html>