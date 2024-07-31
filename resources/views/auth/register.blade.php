    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>paysans-solidaires</title>
        @vite('resources/css/app.css')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
    </head>

    <body class="body">


        <h2 class="ttl anton-regular">
            {{ __('Inscription') }}
        </h2>

        <form class="form" method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Firstname -->
            <div class="input-txt form-name">
                <x-input-label class="txt dm-mono-regular firstname" for="firstname" :value="__('Prénom :')" />
                <x-text-input id="firstname" class="input-itm-name input-firstname" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />

                <x-input-label class="txt dm-mono-regular lastname" for="lastname" :value="__('Nom :')" />
                <x-text-input id="lastname" class="input-itm-name input-lastname" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="form-mail">
                <x-input-label class="txt dm-mono-regular" for="email" :value="__('Mail')" />
                <x-text-input id="email" class="input-itm" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="form-password">
                <x-input-label class="txt dm-mono-regular" for="password" :value="__('Mot de passe')" />

                <x-text-input id="password" class="input-itm" type="password" name="password" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="form-confirm-password">
                <x-input-label class="txt dm-mono-regular" for="password_confirmation" :value="__('Confirmation mot de passe')" />

                <x-text-input id="password_confirmation" class="input-itm" type="password" name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="form-read">
                <input class="checkbox" type="checkbox" name="read" value="read">
                <label class="txt dm-mono-regular" for="read">J'ai lu ...</label>
            </div>

            <div class="position form-btn">
                <x-primary-button class="btn anton-regular">
                    {{ __('Valider') }}
                </x-primary-button>

            </div>
        </form>
    </body>