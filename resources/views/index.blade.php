@extends('page')
@vite("resources/css/reset.css")
@vite("resources/css/style.css")
@section('title')
@section('content')

<main class="flex column center gap">
    <h1>L'AMAP engagée</h1>
    <section class="flex column center">
        <img src="img/champ.jpg" alt="Image d'un champ d'agriculture">
        <h2>Qu'est-ce que l'AMAP ?</h2>
        <div>
            <p>Une AMAP (Association pour le Maintien d’une Agriculture Paysanne) est un partenariat entre des consommateurs
                et des producteurs locaux. </p>
            <p> Ce système permet aux consommateurs de recevoir régulièrement des produits frais, souvent biologiques, directement des agriculteurs, tout en garantissant un revenu stable aux producteurs.
                Ce qui favorise une agriculture durable et locale, réduisant ainsi l’impact environnemental et soutenant l’économie locale.</p>
            <p>
                Les consommateurs s’engagent à acheter une part de la récolte à l’avance, ce qui permet aux agriculteurs de planifier leur production en toute sécurité. </p>
        </div>
        <a class="cta" href="register">Nous rejoindre !</a>
    </section>

    <img src="img/section1.png" alt="Image d'un champ">

    <section class="flex column center">
        <h2>Vous êtes producteur ?</h2>
        <img src="img/producteur.png" alt="Image d'un producteur dans un champ">

        <p>Rejoignez notre AMAP et devenez un acteur clé dans la promotion d’une agriculture locale. En collaborant
            avec nous, vous bénéficierez d’un soutien direct et équitable de la part de consommateurs engagés, désireux de connaître l’origine de leurs produits
            et de soutenir les producteurs locaux. </p>
        <p>Ensemble, nous pouvons créer un réseau solidaire qui valorise le travail des agriculteurs et garantit des produits frais et de qualité pour tous.</p>
        </div>
        <a class="cta" href="register">Devenir Collaborateur</a>
    </section>

    <img src="img/section2.png" alt="Image d'un champ">

    <section class="flex column center">
        <h2>Vous êtes consommateurs?</h2>
        <img src="img/adherent.jpg" alt="Image d'un adhérent avec une cagette de légume">
        <div>
            <p>Découvrez le plaisir de consommer des produits frais, locaux et de saison, tout en soutenant directement les agriculteurs de votre région. En devenant membre, vous participez à un réseau solidaire qui valorise le travail des producteurs et favorise une agriculture durable et respectueuse de l’environnement.</p>
            <p>Ensemble, nous pouvons créer une communauté engagée pour une alimentation saine et responsable.</p>
        </div>
        <a class="cta" href="register">Devenir adhérent</a>
    </section>
</main>

@endsection