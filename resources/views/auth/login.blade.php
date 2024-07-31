    <!-- Session Status -->

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
            {{ __('Connexion') }}
        </h2>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form class="form" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-login-mail">
                <x-input-label class="txt dm-mono-regular" for="email" :value="__('Mail :')" />
                <x-text-input id="email" class="input-itm" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="form-login-password">
                <x-input-label class="txt dm-mono-regular" for="password" :value="__('Mot de passe')" />

                <x-text-input id="password" class="input-itm" type="password" name="password" required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="position form-login-btn">

                <x-primary-button class="btn anton-regular">
                    {{ __('Validez') }}
                </x-primary-button>
            </div>
        </form>
    </body>