<?php
session_start();
// Cette page est accessible sans connexion
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holy Shop | Acceuil</title>

    <link rel="stylesheet" href="/styles/style.css">
    <link rel="shortcut icon" href="img/online-shop-ecommerce-svgrepo-com.svg">

    <script src="/scripts/hover.js" defer></script>
</head>
<style>
    img {
        width: 550px;
        height: 200px;
    }

    .image {
        display: flex;
        justify-content: center;
        z-index: 0;
    }


    h1 {
        text-align: center;
        background-color: #28a745;
        padding: 10px;
        color: white;
        font-size: 24px;
        margin: 20px 0;

    }

    video {
        display: flex;
        justify-content: center;
    }

    .Parfum,
    .Maquillage,
    .Cheveux,
    .Visage,
    .Corps {
        flex: wrap;
        display: none;
        width: 100%;
        justify-content: space-between;
        align-items: center;
        background-color: rgb(78, 76, 76);
        padding: 0;
        position: relative;
        z-index: 0;
    }

    .panier {
        display: flex;
        justify-content: space-between;
    }

    .txt {
        font-size: 10px;
    }

    .cart {
        display: flex;
        align-items: center;
        flex-direction: column;
    }


    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .card {
        height: max-content;
        background: white;
        border-radius: 10px;
        box-shadow: 0 9px 15px rgba(0, 0, 0, 0.1);
        margin: 15px;
        padding: 15px;
        width: 200px;
        text-align: center;

    }

    .cardio {
        height: max-content;
        background: white;
        border-radius: 10px;
        box-shadow: 0 9px 15px rgba(0, 0, 0, 0.1);
        margin: 15px;
        padding: 15px;
        width: 200px;
        text-align: center;

    }

    .card img {
        width: 100%;
        border-radius: 10px;
    }

    .card h3 {
        font-size: 12px;
        margin: 5px 0;
    }

    .card h2 {
        font-size: 16px;
        margin: 8px 0;
    }

    .cardio h3 {
        font-size: 12px;
        margin: 5px 0;
    }

    .cardio h2 {
        font-size: 16px;
        margin: 8px 0;
    }


    .card p {
        font-size: 14px;
        color: #666;
    }

    .buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
        background-color: transparent;
        height: 30px;
    }

    .buttons button {
        border: none;
        padding: 8px 12px;
        border-radius: 5px;
        border: 2px solid black;
        cursor: pointer;
    }


    /* From Uiverse.io by LilaRest */
    #heart {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 5px;
        box-shadow: rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
        background-color: #e8e8e8;
        border-color: #ffe2e2;
        border-style: solid;
        border-width: 1px;
        border-radius: 15px;
        transition: transform 400ms cubic-bezier(.68, -0.55, .27, 2.5),
            border-color 400ms ease-in-out,
            background-color 400ms ease-in-out;
        word-spacing: -2px;

    }

    @keyframes movingBorders {
        0% {
            border-color: #fce4e4;
        }

        50% {
            border-color: #ffd8d8;
        }

        90% {
            border-color: #fce4e4;
        }
    }

    #heart:hover {
        background-color: #eee;
        transform: scale(105%);
        animation: movingBorders 3s infinite;
    }

    .filled,
    .empty {
        fill: rgb(255, 110, 110);
        transition: opacity 100ms ease-in-out;
    }

    .filled {
        position: absolute;
        opacity: 0;
    }

    @keyframes beatingHeart {
        0% {
            transform: scale(1);
        }

        15% {
            transform: scale(1.15);
        }

        30% {
            transform: scale(1);
        }

        45% {
            transform: scale(1.15);
        }

        60% {
            transform: scale(1);
        }
    }

    #heart:hover .empty {
        opacity: 0;
    }

    #heart:hover .filled {
        opacity: 1;
        animation: beatingHeart 1.2s infinite;
    }


    .cart-btn {
        background-color: #28a745;
        color: white;
        font-size: 10px;
        font-weight: bold;
    }

    .cart-btn:hover {
        background-color: black;
        color: green;
        font-weight: bold;
    }
</style>

<body>

    <script src="/scripts/fav.js"></script>

    <main>
        <header class="header">
            <div class="navbar-container">
                <!-- logo -->
        
                <a href="/" class="logo">HOLY<span>SHOP</span></a>
        
                <!-- barre de recherche -->
        
                <div class="search-container">
                    <input type="text" class="search-box" placeholder="Que recherchez-vous ?">
                    <button class="search-button">Rechercher</button>
                </div>
        
                <!-- Icones -->
                <div class="panier">
        
                    <div class="cart">
                        <a href="create_account.html"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="black" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                    clip-rule="evenodd" />
                            </svg></a>
                        <a href="#" style="text-decoration: none; Color:black" class="txt">Se connecté</a>
                    </div>
                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                    <div class="cart">
                        <a href="favorites.html"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="black" viewBox="0 0 24 24">
                                <path
                                    d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                            </svg></a>
                        <a href="#" style="text-decoration: none; Color:black" class="txt">Fav</a>
                    </div>
                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                    <div class="cart">
                        <a href="cart.html"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="black" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M14 7h-4v3a1 1 0 0 1-2 0V7H6a1 1 0 0 0-.997.923l-.917 11.924A2 2 0 0 0 6.08 22h11.84a2 2 0 0 0 1.994-2.153l-.917-11.924A1 1 0 0 0 18 7h-2v3a1 1 0 1 1-2 0V7Zm-2-3a2 2 0 0 0-2 2v1H8V6a4 4 0 0 1 8 0v1h-2V6a2 2 0 0 0-2-2Z"
                                    clip-rule="evenodd" />
                            </svg></a>
                        <a href="#" style="text-decoration: none; Color:black" class="txt">Votre panier</a>
                    </div>
                </div>
            </div>
            <div>
                <!-- link des page -->
                <nav class="navbar">
                    <a href="index.html">Accueil</a>
                    <a href="parfums.html" class="parfume">Parfum</a>
                    <a href="maquillage.html" class="maquillage">Maquillage</a>
                    
                </nav>
            </div>
        
        </header>
        <div class="Parfum">
            <div class="container-list">
                <div class="Parfum-femme">
                    <p class="cathégorie-nom">Offres et nouveautés</p>
                    <a href="#">Meilleurs ventes</a>
                    <a href="#">Livraison</a>
        
                </div>
                <div class="Parfum-femme">
                    <a href="#" class="cathégorie-nom">Parfum femme</a>
                    <a href="eau_de_parfum_femme.html" id="">Eau de parfum</a>
                    <a href="Eau_de_toilette_pour_femme.html">Eau de toilette</a>
        
                </div>
                <div class="Parfum-femme">
                    <a href="#" class="cathégorie-nom">Parfum homme</a>
                    <a href="eau_de_parfum_homme.html">Eau de parfum</a>
                    <a href="Eau_de_toilette_pour_homme.html">Eau de toilette</a>
        
                </div>
        
            </div>
        </div>
        <div class="Maquillage">
            <div class="container-list">
                <div class="Parfum-femme">
                    <a href="#" class="cathégorie-nom">Teint</a>
                    <a href="#">Fonds de teint</a>
                    <a href="#">Blush</a>
                    <a href="#" class="cathégorie-nom">Pallettes maquillage</a>
                    <a href="#" class="cathégorie-nom">Coffrets maquillage</a>
        
                </div>
                <div class="Parfum-femme">
                    <p class="cathégorie-nom">Accessoires maquillage</p>
                    <a href="#">Pinceaux maquillage et éponges</a>
                    <a href="#">Soin du corps</a>
                </div>
        
            </div>
        </div>
        
        
        <div class="image">
            <img src="/img/fr_be_desk_hp_premium_w13_25_09.jpg" alt="">
            <img src="/img/fr_be_desk_bp_issey-miyake_gwp_w13_25.jpg" alt="">
            <img src="/img/fr_desk_cp_frag_spring_niche_w11_25_01.jpg" alt="">
        </div>
        <br>
        <h1>Nos produits en vogue</h1>
        <div class="container">
            <!-- Exemple d'un parfum -->
            <div class="card">
                <img loading="lazy" alt="Chopard Oud Malaki Eau de Parfum pour homme 80 ml"
                    src="https://cdn.notinoimg.com/list_2k//chopard/3607347336914_01-o__220722.jpg"
                    srcset="https://cdn.notinoimg.com/list//chopard/3607347336914_01-o__220722.jpg 160w, https://cdn.notinoimg.com/list_2k//chopard/3607347336914_01-o__220722.jpg 320w"
                    style="width: 40px; height: auto;">
                <h2>Chopard</h2>
                <h3>Oud Malaki</h3>
                <p>Eau de Parfum pour homme 80 ml</p>
                <p style="color: red; font-weight: bold;">56,60€</p>
                <div class="buttons">
                    <!-- From Uiverse.io by LilaRest -->
                    <button id="heart">
                        <svg class="empty" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                            <path fill="none" d="M0 0H24V24H0z"></path>
                            <path d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z"></path>
                        </svg>
                        <svg class="filled" height="32" width="32" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0H24V24H0z" fill="none"></path>
                            <path d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z"></path>
                        </svg>
                    </button>

                    <button class="cart-btn">Ajouter</button>
                </div>
            </div>
            <div class="card">
                <img loading="lazy" alt="Jimmy Choo I Want Choo Eau de Parfum pour femme"
                    src="https://cdn.notinoimg.com/list_2k//jimmy-choo/3386460119252_01-o__240730.jpg"
                    srcset="https://cdn.notinoimg.com/list//jimmy-choo/3386460119252_01-o__240730.jpg 160w, https://cdn.notinoimg.com/list_2k//jimmy-choo/3386460119252_01-o__240730.jpg 320w"
                    style="width: 43px; height: auto;">
                <h2>Jimmy-choo</h2>
                <h3>I Want Choo</h3>
                <p>Eau de Parfum pour femme 35 ml</p>
                <p style="color: red; font-weight: bold;">36,00€</p>
                <div class="buttons">
                    <!-- From Uiverse.io by LilaRest -->
                    <button onclick="addToFavorites('EauDeParfumF2', 'Jimmy-choo', 'https://cdn.notinoimg.com/list_2k//jimmy-choo/3386460119252_01-o__240730.jpg', '36,00€')" id="heart">
                        <svg class="empty" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                            <path fill="none" d="M0 0H24V24H0z"></path>
                            <path d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z"></path>
                        </svg>
                        <svg class="filled" height="32" width="32" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0H24V24H0z" fill="none"></path>
                            <path d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z"></path>
                        </svg>
                    </button>

                    <button class="cart-btn">Ajouter</button>
                </div>

            </div>
            <div class="card">
                <img loading="lazy" alt="Makeup Revolution Cheek Kit Palette visage"
                    src="https://cdn.notinoimg.com/list_2k//makeup-revolution/5057566064958_01-o__190520.jpg"
                    srcset="https://cdn.notinoimg.com/list//makeup-revolution/5057566064958_01-o__190520.jpg 160w, https://cdn.notinoimg.com/list_2k//makeup-revolution/5057566064958_01-o__190520.jpg 320w"
                    style="width: 111px; height: auto;">
                <h2>Makeup Revolution</h2>
                <h3>Cheek Kit</h3>
                <p>Palette visage</p>
                <p style="color: red; font-weight: bold;">5,00€</p>
                <div class="buttons">
                    <!-- From Uiverse.io by LilaRest -->
                    <button onclick="addToFavorites('Maquillage3', 'Makeup Revolution', 'https://cdn.notinoimg.com/list_2k//makeup-revolution/5057566064958_01-o__190520.jpg', '5,00€')" id="heart">
                        <svg class="empty" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                            <path fill="none" d="M0 0H24V24H0z"></path>
                            <path d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z"></path>
                        </svg>
                        <svg class="filled" height="32" width="32" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0H24V24H0z" fill="none"></path>
                            <path d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z"></path>
                        </svg>
                    </button>

                    <button class="cart-btn">Ajouter</button>
                </div>
            </div>
            <div class="card">
                <img loading="lazy"
                    alt="essence The Nude Edition palette de fards à paupières teinte 10 Pretty in Nude 10 g"
                    src="https://cdn.notinoimg.com/list_2k//essence/4059729245854_01-o__200409.jpg"
                    srcset="https://cdn.notinoimg.com/list//essence/4059729245854_01-o__200409.jpg 160w, https://cdn.notinoimg.com/list_2k//essence/4059729245854_01-o__200409.jpg 320w"
                    style="width: 66;height: auto;">
                <h2>essence</h2>
                <h3>The Nude Edition</h3>
                <p>palette de fards à paupières teinte <br> 10 Pretty in Nude 10 g</p>
                <p style="color: red; font-weight: bold;">8,60€</p>
                <div class="buttons">
                    <!-- From Uiverse.io by LilaRest -->
                    <button onclick="addToFavorites('Maquillage1', 'Essence : The Nude Edition', 'https://cdn.notinoimg.com/list_2k//essence/4059729245854_01-o__200409.jpg', '8,60€')" id="heart">
                        <svg class="empty" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                            <path fill="none" d="M0 0H24V24H0z"></path>
                            <path d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z"></path>
                        </svg>
                        <svg class="filled" height="32" width="32" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0H24V24H0z" fill="none"></path>
                            <path d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z"></path>
                        </svg>
                    </button>

                    <button class="cart-btn">Ajouter</button>
                </div>
            </div>
            <div class="cardio">
                <img loading="lazy" alt="MUA Makeup Academy Professional 5 Shade Palette palette de fards à paupières"
                    src="https://cdn.notinoimg.com/list_2k//mua-makeup-academy/5055402980011_01-o__221018.jpg"
                    srcset="https://cdn.notinoimg.com/list//mua-makeup-academy/5055402980011_01-o__221018.jpg 160w, https://cdn.notinoimg.com/list_2k//mua-makeup-academy/5055402980011_01-o__221018.jpg 320w"
                    style="width: 170px; height: auto;">
                <h2>MUA Makeup Academy</h2>
                <h3>Professional 5 Shade Palette</h3>
                <p>palette de fards<br>à paupières</p>
                <p style="color: red;font-weight: bold;">7,00€</p>
                <div class="buttons">
                    <!-- From Uiverse.io by LilaRest -->
                    <button onclick="addToFavorites('Maquillage2', 'MUA Makeup Academy', 'https://cdn.notinoimg.com/list_2k//mua-makeup-academy/5055402980011_01-o__221018.jpg', '7,00€')" id="heart">
                        <svg class="empty" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                            <path fill="none" d="M0 0H24V24H0z"></path>
                            <path d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z"></path>
                        </svg>
                        <svg class="filled" height="32" width="32" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0H24V24H0z" fill="none"></path>
                            <path d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z"></path>
                        </svg>
                    </button>

                    <button class="cart-btn">Ajouter</button>
                </div>
            </div>

            <div class="card">
                <img loading="lazy" alt="Boucheron Quatre Eau de Parfum pour femme"
                    src="https://cdn.notinoimg.com/list_2k//boucheron/3386460066075_02-o__150714.jpg"
                    srcset="https://cdn.notinoimg.com/list//boucheron/3386460066075_02-o__150714.jpg 160w, https://cdn.notinoimg.com/list_2k//boucheron/3386460066075_02-o__150714.jpg 320w"
                    style="width: 60px; height: auto;">
                <h2>Boucheron</h2>
                <h3>Quatre</h3>
                <p>Eau de Parfum <br>pour femme 70 ml</p>
                <p style="color: red;font-weight: bold;">22,00€</p>
                <div class="buttons">
                    <!-- From Uiverse.io by LilaRest -->
                    <button onclick="addToFavorites('EauDeParfumF1', 'Boucheron Quatre', 'https://cdn.notinoimg.com/list_2k//boucheron/3386460066075_02-o__150714.jpg', '22,00€')" id="heart">
                        <svg class="empty" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                            <path fill="none" d="M0 0H24V24H0z"></path>
                            <path d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z"></path>
                        </svg>
                        <svg class="filled" height="32" width="32" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0H24V24H0z" fill="none"></path>
                            <path d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z"></path>
                        </svg>
                    </button>

                    <button class="cart-btn">Ajouter</button>
                </div>
            </div>
            <div class="card">
                <img loading="lazy" alt="Afnan Turathi Homme Blue Eau de Parfum pour homme 90 ml"
                    src="https://cdn.notinoimg.com/list_2k//afnan/6290171070580_01-o__211006.jpg"
                    srcset="https://cdn.notinoimg.com/list//afnan/6290171070580_01-o__211006.jpg 160w, https://cdn.notinoimg.com/list_2k//afnan/6290171070580_01-o__211006.jpg 320w"
                    style="width: 61px; height: auto;">
                <h2>Afnan</h2>
                <h3>Turathi Homme Blue</h3>
                <p>Eau de Parfum pour homme 90 ml</p>
                <p style="color: red; font-weight: bold;">40,00€</p>
                <div class="buttons">
                    <!-- From Uiverse.io by LilaRest -->
                    <button id="heart">
                        <svg class="empty" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                            <path fill="none" d="M0 0H24V24H0z"></path>
                            <path d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z"></path>
                        </svg>
                        <svg class="filled" height="32" width="32" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0H24V24H0z" fill="none"></path>
                            <path d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z"></path>
                        </svg>
                    </button>

                    <button class="cart-btn">Ajouter</button>
                </div>
            </div>
            

        </div>
        <div class="image">
            <img src="/img/fr_be_desk_hp_Ralph-Lauren_w13_25.jpg" alt="">
            <img src="/img/fr_be_desk_hp_Ralph-Lauren_w13_25.jpg" alt="">
            <img src="/img/fr_be_desk_hp_Ralph-Lauren_w13_25.jpg" alt="">
        </div>
        
    </main>

    <style>
        .footer-social a{ 
            text-decoration: none;
        }
    </style>
    <footer>
        <div class="footer-container">
    
            <div class="footer-service">
                <h3>Nos services</h3>
                <br>
                <ul class="liste-services">
                    <li><a href="#">Vente de Parfum</a></li>
                    <li><a href="#">Vente de Produits de beauté</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Restons en contact</h3>
                <br>
                <p>06-22-88-15-55</p>
                <p>HolyShop@contact.fr</p>
                <p>6 rue de l'industrie, Parie VII, 75016</p>
            </div>
            <div class="footer-horaires">
    
                <h3>Les horaires</h3>
                <br>
                <ul class="liste-horaires">
                    <li>&#9989;Lundi: 8h-18h</li>
                    <li>&#9989;Mardi: 8h-18h</li>
                    <li>&#9989;Mercredi: 8h-18h</li>
                    <li>&#9989;Jeudi: 8h-18h</li>
                    <li>&#9989;Vendredi: 8h-18h</li>
                    <li>&#9989;Samedi: 8h-12h</li>
                    <li>&#10060;Dimanche: fermé</li>
                </ul>
    
            </div>
    
    
            <div class="footer-social">
                <h3>Nos réseaux sociaux</h3>
                <br>
                <ul class="liste-social">
     
                    <li><a href="https://www.instagram.com/holy.shop.congo?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: #cb40a2e4;transform: msFilter">
                                <path
                                    d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216 4.61 4.61 0 0 0-2.633-2.633 6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42 4.607 4.607 0 0 0-2.633 2.633 6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419 4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187.043-.962.056-1.267.056-3.71-.002-2.442-.002-2.752-.058-3.709zm-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246zm4.807-8.339a1.077 1.077 0 0 1-1.078-1.078 1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078z">
                                </path>
                                <circle cx="11.994" cy="11.979" r="3.003"></circle>
                            </svg>&nbsp;Instagram</a></li>
                    <li><a href="https://www.tiktok.com/@holy.shop.congo?is_from_webapp=1&sender_device=pc"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: rgb(204, 28, 28);transform: msFilter">
                                <path
                                    d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z">
                                </path>
                            </svg>&nbsp;Tiktok</a></li>
                </ul>
            </div>
    
        </div>
    </footer>
</body>

</html>