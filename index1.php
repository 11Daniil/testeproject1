<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой кабинет</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <div class="conteiner">
        <div class="left_block">  
            <h1 class="h1">Мой кабинет</h1>
            <div class="menu">
                <div class="menu-name-person">
                    <svg class="svg-1" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="20" cy="20" r="20" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 20.4167C10 26.1696 14.6637 30.8333 20.4167 30.8333C26.1696 30.8333 30.8333 26.1696 30.8333 20.4167C30.8333 14.6637 26.1696 10 20.4167 10C14.6637 10 10 14.6637 10 20.4167ZM12.0833 20.4167C12.0833 15.8143 15.8143 12.0833 20.4167 12.0833C25.019 12.0833 28.75 15.8143 28.75 20.4167C28.75 25.019 25.019 28.75 20.4167 28.75C15.8143 28.75 12.0833 25.019 12.0833 20.4167ZM17.2917 21.4583C17.2917 20.883 16.8253 20.4167 16.25 20.4167C15.6747 20.4167 15.2083 22.883 15.2083 21.4583C15.2083 24.3348 17.5402 26.6667 20.4167 26.6667C23.2932 26.6667 25.625 24.3348 25.625 21.4583C25.625 20.883 25.1586 20.4167 24.5833 20.4167C24.008 20.4167 23.5417 20.883 23.5417 21.4583C23.5417 23.1842 22.1426 24.5833 20.4167 24.5833C18.6908 24.5833 17.2917 23.1842 17.2917 21.4583ZM16.25 18.3333C16.8253 18.3333 17.2917 17.867 17.2917 17.2917C17.2917 17.867 17.758 18.3333 18.3333 18.3333C18.9086 18.3333 19.375 17.867 19.375 17.2917C19.375 16.1411 18.4423 15.2083 17.2917 15.2083C16.1411 15.2083 15.2083 16.1411 15.2083 17.2917C15.2083 17.867 15.6747 18.3333 16.25 18.3333ZM23.5417 17.2917C23.5417 17.867 23.0753 18.3333 22.5 18.3333C21.9247 18.3333 21.4583 17.867 21.4583 17.2917C21.4583 16.1411 22.3911 15.2083 23.5417 15.2083C24.6923 15.2083 25.625 16.1411 25.625 17.2917C25.625 17.867 25.1586 18.3333 24.5833 18.3333C24.008 18.3333 23.5417 17.867 23.5417 17.2917Z" fill="#FC6E1D"/>
                    </svg>
                    <div class="hedader-1">   
                        <div class="person">Михаил Мингалёв</div>
                        <div class="buyer">Покупатель</div>
                    </div>
                </div>
                <ul class="menu-1">     
                    <li class='menu-1-items'>Мой профиль</li>
                    <li class='menu-1-items'>Status Club</li>
                    <li class='menu-1-items'>Заказы</li>
                    <li class='menu-1-items'>Избранные товары </li>
                    <li class='menu-1-items'>Отзывы о товарах</li>
                    <li class='menu-1-items'>Выход</li>
                </ul>
            </div>
        </div>
        <div class="rigth_block">
            <h2>Мой профиль</h2>
            <ul class="menu-2">
                <li class="menu-2-items">Личные данные</li>
                <li class="menu-2-items">Адреса доставки</li>
                <li class="menu-2-items">Пароль</li>
            </ul>
            <form class="formValidate" action="send.php" method="POST" >
                <label class='e-mail' for='e-mail'>
                    <span>E-mail</span>
                    <span> *</span>
                </label>
                <label class="label-src-1">
                    <input class="e-input required form__input mail" id='e-mail' name="mail" type="text"  placeholder="Введите адрес почты" >
                    <svg class='svg-2' width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4157 0.237133C13.745 0.558688 13.7513 1.08629 13.4297 1.41556L5.29169 9.74889C5.12771 9.91681 4.90053 10.0078 4.66597 9.99948C4.43142 9.99116 4.21124 9.88432 4.05956 9.70522L0.530918 5.53855C0.233484 5.18734 0.277081 4.66151 0.628294 4.36407C0.979508 4.06664 1.50534 4.11023 1.80278 4.46145L4.73936 7.929L12.2373 0.251106C12.5589 -0.0781664 13.0865 -0.0844226 13.4157 0.237133Z" fill="#FF7A00"/>
                    </svg>
                </label>
                <div class="number">
                    <label class='number-1'>
                        <label class='number-first' for="number-1">
                            <span>Номер телефона</span>
                            <span> *</span>
                        </label>
                        <label class="src-number">
                            <input id="number-1" class="number-first-input required form__input" name="phon" type="tel"  placeholder="+7(___)___-__-__ ">
                            <svg class='svg-2' width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4157 0.237133C13.745 0.558688 13.7513 1.08629 13.4297 1.41556L5.29169 9.74889C5.12771 9.91681 4.90053 10.0078 4.66597 9.99948C4.43142 9.99116 4.21124 9.88432 4.05956 9.70522L0.530918 5.53855C0.233484 5.18734 0.277081 4.66151 0.628294 4.36407C0.979508 4.06664 1.50534 4.11023 1.80278 4.46145L4.73936 7.929L12.2373 0.251106C12.5589 -0.0781664 13.0865 -0.0844226 13.4157 0.237133Z" fill="#FF7A00"/>
                            </svg>
                        </label>
                    </label>  
                    <label class="number-2">
                        <label class="number-second" for="number-21">
                            <span>Дополнительный номер</span>
                        </label>
                        <input class='number-second-input form__input'  id="number-21" name="number-2" type='tel'>
                    </label> 
                </div>        
                <div class="lastname">
                    <label for="input-lastname" class="lastname-1">
                        <span>Фамилия</span>
                        <span> *</span>
                    </label>
                    <label class='label-src-1'>
                        <input class="lastname-input required form__input" id="input-lastname" name="lastname"  placeholder="Введите фамилию">
                        <svg class='svg-2' width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4157 0.237133C13.745 0.558688 13.7513 1.08629 13.4297 1.41556L5.29169 9.74889C5.12771 9.91681 4.90053 10.0078 4.66597 9.99948C4.43142 9.99116 4.21124 9.88432 4.05956 9.70522L0.530918 5.53855C0.233484 5.18734 0.277081 4.66151 0.628294 4.36407C0.979508 4.06664 1.50534 4.11023 1.80278 4.46145L4.73936 7.929L12.2373 0.251106C12.5589 -0.0781664 13.0865 -0.0844226 13.4157 0.237133Z" fill="#FF7A00"/>
                        </svg>
                    </label>
                </div>
                <div class="name">
                    <label for="input-name" class="name-1">
                        <span>Имя</span>
                        <span> *</span>
                    </label>
                    <label class='label-src-1'>
                        <input class="name-input required form__input" id="input-name" name="name"  placeholder="Введите имя">
                        <svg class='svg-2' width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4157 0.237133C13.745 0.558688 13.7513 1.08629 13.4297 1.41556L5.29169 9.74889C5.12771 9.91681 4.90053 10.0078 4.66597 9.99948C4.43142 9.99116 4.21124 9.88432 4.05956 9.70522L0.530918 5.53855C0.233484 5.18734 0.277081 4.66151 0.628294 4.36407C0.979508 4.06664 1.50534 4.11023 1.80278 4.46145L4.73936 7.929L12.2373 0.251106C12.5589 -0.0781664 13.0865 -0.0844226 13.4157 0.237133Z" fill="#FF7A00"/>
                        </svg>
                    </label>
                </div>
                <div class="patronymic"> 
                    <label for="input-patronymic" class="patronymic-1">
                        <span>Отчество</span>
                    </label>
                    <label class="label-src-1 ">
                        <input class="patronymic-input form__input" id="input-patronymic" name="patronymic" placeholder="Введите отчество">
                        <svg class='svg-2' width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4157 0.237133C13.745 0.558688 13.7513 1.08629 13.4297 1.41556L5.29169 9.74889C5.12771 9.91681 4.90053 10.0078 4.66597 9.99948C4.43142 9.99116 4.21124 9.88432 4.05956 9.70522L0.530918 5.53855C0.233484 5.18734 0.277081 4.66151 0.628294 4.36407C0.979508 4.06664 1.50534 4.11023 1.80278 4.46145L4.73936 7.929L12.2373 0.251106C12.5589 -0.0781664 13.0865 -0.0844226 13.4157 0.237133Z" fill="#FF7A00"/>
                        </svg>
                    </label>    
                </div>
                <div class="date">
                    <span class="data-birth">Дата рождения</span>
                    <div class="date-1">
                        <input type="number" class="date-number" placeholder="День" name="days">
                        <input type="text" class="monht" placeholder="Месяц" name="month">
                        <input type="number" class="year" placeholder="Год" name="year">
                    </div>
                </div> 
                <div class="gender">
                    <span class="gender-1">Пол</span>
                    <div class="gender-button">
                        <input id="cd1" class="male form__input" type="radio" checked name="floor1" > 
                        <label class="floor" for="cd1">Мужской</label>
                        <input id="cd2" class="female form__input" type="radio" name="floor1">
                        <label class="floor" for="cd2">Женский</label>
                    </div>
                </div> 
                <div>
                    <button class="save" name="sohr" type="submit" >Сохранить изменения</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js" type="text/javascript"></script>
    <script src="min.js" ></script>
</html>