<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Pokédex</title>
</head>

<body id="pokedex">
    <!-- HEADER -->
    <header class="mb-5">
        <div class="container">
            <!-- BUTTONS HEADER -->
            <div class="text-end">
                <!-- GENERATION -->
                <button>
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22.5 4.64286C22.5 5.82632 21.5406 6.78571 20.3571 6.78571C19.1737 6.78571 18.2143 5.82632 18.2143 4.64286C18.2143 3.45939 19.1737 2.5 20.3571 2.5C21.5406 2.5 22.5 3.45939 22.5 4.64286Z"
                            fill="#17171B" />
                        <path
                            d="M4.64286 8.21429C5.82632 8.21429 6.78571 7.2549 6.78571 6.07143C6.78571 4.88796 5.82632 3.92857 4.64286 3.92857C3.45939 3.92857 2.5 4.88796 2.5 6.07143C2.5 7.2549 3.45939 8.21429 4.64286 8.21429Z"
                            fill="#17171B" />
                        <path
                            d="M11.7857 8.21429C12.9692 8.21429 13.9286 7.2549 13.9286 6.07143C13.9286 4.88796 12.9692 3.92857 11.7857 3.92857C10.6022 3.92857 9.64286 4.88796 9.64286 6.07143C9.64286 7.2549 10.6022 8.21429 11.7857 8.21429Z"
                            fill="#17171B" />
                        <path
                            d="M4.64286 15.3571C5.82632 15.3571 6.78571 14.3978 6.78571 13.2143C6.78571 12.0308 5.82632 11.0714 4.64286 11.0714C3.45939 11.0714 2.5 12.0308 2.5 13.2143C2.5 14.3978 3.45939 15.3571 4.64286 15.3571Z"
                            fill="#17171B" />
                        <path
                            d="M13.9286 13.2143C13.9286 14.3978 12.9692 15.3571 11.7857 15.3571C10.6022 15.3571 9.64286 14.3978 9.64286 13.2143C9.64286 12.0308 10.6022 11.0714 11.7857 11.0714C12.9692 11.0714 13.9286 12.0308 13.9286 13.2143Z"
                            fill="#17171B" />
                        <path
                            d="M18.9286 15.3571C20.112 15.3571 21.0714 14.3978 21.0714 13.2143C21.0714 12.0308 20.112 11.0714 18.9286 11.0714C17.7451 11.0714 16.7857 12.0308 16.7857 13.2143C16.7857 14.3978 17.7451 15.3571 18.9286 15.3571Z"
                            fill="#17171B" />
                        <path
                            d="M6.78571 20.3571C6.78571 21.5406 5.82632 22.5 4.64286 22.5C3.45939 22.5 2.5 21.5406 2.5 20.3571C2.5 19.1737 3.45939 18.2143 4.64286 18.2143C5.82632 18.2143 6.78571 19.1737 6.78571 20.3571Z"
                            fill="#17171B" />
                        <path
                            d="M11.7857 22.5C12.9692 22.5 13.9286 21.5406 13.9286 20.3571C13.9286 19.1737 12.9692 18.2143 11.7857 18.2143C10.6022 18.2143 9.64286 19.1737 9.64286 20.3571C9.64286 21.5406 10.6022 22.5 11.7857 22.5Z"
                            fill="#17171B" />
                        <path
                            d="M21.0714 20.3571C21.0714 21.5406 20.112 22.5 18.9286 22.5C17.7451 22.5 16.7857 21.5406 16.7857 20.3571C16.7857 19.1737 17.7451 18.2143 18.9286 18.2143C20.112 18.2143 21.0714 19.1737 21.0714 20.3571Z"
                            fill="#17171B" />
                    </svg>
                </button>
                <!-- SORT -->
                <button>
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.58881 7.36734L6.31268 7.08168V17.9182L6.58881 17.6326C6.6776 17.5438 6.78299 17.4733 6.89899 17.4253C7.01499 17.3773 7.13932 17.3525 7.26487 17.3525C7.39043 17.3525 7.51476 17.3773 7.63075 17.4253C7.74675 17.4733 7.85215 17.5438 7.94093 17.6326C8.02971 17.7213 8.10014 17.8267 8.14819 17.9427C8.19623 18.0587 8.22096 18.1831 8.22096 18.3086C8.22096 18.4342 8.19623 18.5585 8.14819 18.6745C8.10014 18.7905 8.02971 18.8959 7.94093 18.9847L6.03654 20.8891C5.94598 20.9758 5.8392 21.0437 5.72232 21.089C5.60834 21.1394 5.4851 21.1654 5.36048 21.1654C5.23587 21.1654 5.11263 21.1394 4.99865 21.089C4.88176 21.0437 4.77498 20.9758 4.68442 20.8891L2.78003 18.9847C2.60073 18.8054 2.5 18.5622 2.5 18.3086C2.5 18.055 2.60073 17.8119 2.78003 17.6326C2.95933 17.4533 3.20252 17.3525 3.45609 17.3525C3.70966 17.3525 3.95285 17.4533 4.13215 17.6326L4.40829 17.9182V7.08168L4.13215 7.36734C3.95285 7.54664 3.70966 7.64737 3.45609 7.64737C3.20252 7.64737 2.95933 7.54664 2.78003 7.36734C2.60073 7.18804 2.5 6.94485 2.5 6.69128C2.5 6.43771 2.60073 6.19452 2.78003 6.01522L4.68442 4.11083C4.77498 4.02414 4.88176 3.95619 4.99865 3.91087C5.11263 3.86049 5.23587 3.83447 5.36048 3.83447C5.4851 3.83447 5.60834 3.86049 5.72232 3.91087C5.8392 3.95619 5.94598 4.02414 6.03654 4.11083L7.94093 6.01522C8.02971 6.104 8.10014 6.2094 8.14819 6.3254C8.19623 6.4414 8.22096 6.56573 8.22096 6.69128C8.22096 6.81684 8.19623 6.94116 8.14819 7.05716C8.10014 7.17316 8.02971 7.27856 7.94093 7.36734C7.85215 7.45612 7.74675 7.52655 7.63075 7.57459C7.51476 7.62264 7.39043 7.64737 7.26487 7.64737C7.13932 7.64737 7.01499 7.62264 6.89899 7.57459C6.78299 7.52655 6.6776 7.45612 6.58881 7.36734Z"
                            fill="#17171B" />
                        <path
                            d="M13.0259 17.3086H21.5478C21.8003 17.3086 22.0425 17.4089 22.2211 17.5875C22.3997 17.7661 22.5 18.0083 22.5 18.2608C22.5 18.5133 22.3997 18.7555 22.2211 18.9341C22.0425 19.1127 21.8003 19.213 21.5478 19.213H13.0259C12.7733 19.213 12.5311 19.1127 12.3525 18.9341C12.174 18.7555 12.0737 18.5133 12.0737 18.2608C12.0737 18.0083 12.174 17.7661 12.3525 17.5875C12.5311 17.4089 12.7733 17.3086 13.0259 17.3086Z"
                            fill="#17171B" />
                        <path
                            d="M13.0259 11.3086H19.5479C19.8004 11.3086 20.0426 11.4089 20.2212 11.5875C20.3998 11.7661 20.5001 12.0083 20.5001 12.2608C20.5001 12.5133 20.3998 12.7555 20.2212 12.9341C20.0426 13.1127 19.8004 13.213 19.5479 13.213H13.0259C12.7734 13.213 12.5312 13.1127 12.3526 12.9341C12.1741 12.7555 12.0737 12.5133 12.0737 12.2608C12.0737 12.0083 12.1741 11.7661 12.3526 11.5875C12.5312 11.4089 12.7734 11.3086 13.0259 11.3086Z"
                            fill="#17171B" />
                        <path
                            d="M13.0259 5.30859H17.5479C17.8004 5.30859 18.0426 5.40891 18.2212 5.58748C18.3998 5.76606 18.5001 6.00825 18.5001 6.26079C18.5001 6.51333 18.3998 6.75552 18.2212 6.93409C18.0426 7.11266 17.8004 7.21299 17.5479 7.21299H13.0259C12.7734 7.21299 12.5312 7.11266 12.3526 6.93409C12.1741 6.75552 12.0737 6.51333 12.0737 6.26079C12.0737 6.00825 12.1741 5.76606 12.3526 5.58748C12.5312 5.40891 12.7734 5.30859 13.0259 5.30859Z"
                            fill="#17171B" />
                    </svg>
                </button>
                <!-- FILTER -->
                <button>
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M11.3341 7.4863C10.9262 8.65864 9.81133 9.5 8.5 9.5C7.18867 9.5 6.07385 8.65864 5.6659 7.4863C5.61194 7.49531 5.55652 7.5 5.5 7.5H3.5C2.94772 7.5 2.5 7.05228 2.5 6.5C2.5 5.94772 2.94772 5.5 3.5 5.5H5.5C5.55652 5.5 5.61194 5.50469 5.6659 5.5137C6.07385 4.34136 7.18867 3.5 8.5 3.5C9.81133 3.5 10.9262 4.34136 11.3341 5.5137C11.3881 5.50469 11.4435 5.5 11.5 5.5H21.5C22.0523 5.5 22.5 5.94772 22.5 6.5C22.5 7.05228 22.0523 7.5 21.5 7.5H11.5C11.4435 7.5 11.3881 7.49531 11.3341 7.4863ZM9.5 6.5C9.5 7.05228 9.05228 7.5 8.5 7.5C7.94772 7.5 7.5 7.05228 7.5 6.5C7.5 5.94772 7.94772 5.5 8.5 5.5C9.05228 5.5 9.5 5.94772 9.5 6.5Z"
                            fill="#17171B" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.5 18.5C2.5 17.9477 2.94772 17.5 3.5 17.5H5.5C5.55652 17.5 5.61194 17.5047 5.6659 17.5137C6.07385 16.3414 7.18867 15.5 8.5 15.5C9.81133 15.5 10.9262 16.3414 11.3341 17.5137C11.3881 17.5047 11.4435 17.5 11.5 17.5H21.5C22.0523 17.5 22.5 17.9477 22.5 18.5C22.5 19.0523 22.0523 19.5 21.5 19.5H11.5C11.4435 19.5 11.3881 19.4953 11.3341 19.4863C10.9262 20.6586 9.81133 21.5 8.5 21.5C7.18867 21.5 6.07385 20.6586 5.6659 19.4863C5.61194 19.4953 5.55652 19.5 5.5 19.5H3.5C2.94772 19.5 2.5 19.0523 2.5 18.5ZM9.5 18.5C9.5 19.0523 9.05228 19.5 8.5 19.5C7.94772 19.5 7.5 19.0523 7.5 18.5C7.5 17.9477 7.94772 17.5 8.5 17.5C9.05228 17.5 9.5 17.9477 9.5 18.5Z"
                            fill="#17171B" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M21.5 11.5C22.0523 11.5 22.5 11.9477 22.5 12.5C22.5 13.0523 22.0523 13.5 21.5 13.5H19.5C19.4435 13.5 19.3881 13.4953 19.3341 13.4863C18.9262 14.6586 17.8113 15.5 16.5 15.5C15.1887 15.5 14.0738 14.6586 13.6659 13.4863C13.6119 13.4953 13.5565 13.5 13.5 13.5H3.5C2.94772 13.5 2.5 13.0523 2.5 12.5C2.5 11.9477 2.94772 11.5 3.5 11.5H13.5C13.5565 11.5 13.6119 11.5047 13.6659 11.5137C14.0738 10.3414 15.1887 9.5 16.5 9.5C17.8113 9.5 18.9262 10.3414 19.3341 11.5137C19.3881 11.5047 19.4435 11.5 19.5 11.5H21.5ZM16.5 13.5C17.0523 13.5 17.5 13.0523 17.5 12.5C17.5 11.9477 17.0523 11.5 16.5 11.5C15.9477 11.5 15.5 11.9477 15.5 12.5C15.5 13.0523 15.9477 13.5 16.5 13.5Z"
                            fill="#17171B" />
                    </svg>
                </button>
            </div>
            <!-- FIM BUTTONS HEADER -->
            <!-- TITLES E INPUT -->
            <div class="pt-3">
                <h1 class="font32 bold">Pokédex</h1>
                <p class="font16 regular text-gray">Procure um Pokémon pelo seu nome ou seu número Nacional na Pokédex.
                </p>
                <!-- SEARCH -->
                <div class="search">
                    <input type="text" placeholder="Qual Pokémon você está procurando?">
                    <button>
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.2347 17.0288C13.9122 17.9881 12.2857 18.5538 10.5269 18.5538C6.09374 18.5538 2.5 14.96 2.5 10.5269C2.5 6.09374 6.09374 2.5 10.5269 2.5C14.96 2.5 18.5538 6.09374 18.5538 10.5269C18.5538 12.2854 17.9884 13.9119 17.0291 15.2344C17.1552 15.2971 17.2731 15.381 17.3783 15.4862L22.1083 20.2162C22.6306 20.7385 22.6306 21.5857 22.1083 22.108C21.5857 22.6306 20.7388 22.6306 20.2162 22.108L15.4865 17.3783C15.3814 17.2731 15.2974 17.1549 15.2347 17.0288ZM15.8781 10.5269C15.8781 13.4824 13.4824 15.8781 10.5269 15.8781C7.57134 15.8781 5.17563 13.4824 5.17563 10.5269C5.17563 7.57135 7.57134 5.17563 10.5269 5.17563C13.4824 5.17563 15.8781 7.57135 15.8781 10.5269Z"
                                fill="#17171B" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- FIM TITLES E INPUT -->
        </div>
    </header>
    <!-- FIM HEADER -->

    <!-- POKEMON -->
    <main>
        <div class="container">
            <div class="badges mb-4">
                <!-- NUMBER -->
                <span>#001</span>
                <!-- NAME -->
                <h2>Bulbassaur</h2>
                <!-- BADGES -->
                <div>
                    <img src="assets/badges/grass.png" alt="">
                    <img src="assets/badges/poison.png" alt="">
                </div>
                <!-- IMAGE -->
                <div class="image">
                    <img src="assets/01.png" alt="">
                </div>
            </div>
            <div class="badges">
                <!-- NUMBER -->
                <span>#001</span>
                <!-- NAME -->
                <h2>Bulbassaur</h2>
                <!-- BADGES -->
                <div>
                    <img src="assets/badges/grass.png" alt="">
                    <img src="assets/badges/poison.png" alt="">
                </div>
                <!-- IMAGE -->
                <div class="image">
                    <img src="assets/01.png" alt="">
                </div>
            </div>
        </div>
    </main>
    <!-- FIM POKEMON -->

</body>

</html>