<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- UserName  6706223154_Davi Pramudya Putra -->
        <div class="mt-4">
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- FullName  6706223154_Davi Pramudya Putra -->
        <div>
            <x-input-label for="fullname" :value="__('Fullname')" />
            <x-text-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')" required autofocus />
            <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
        </div>

        <!-- Email Address  6706223154_Davi Pramudya Putra -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password   6706223154_Davi Pramudya Putra -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password  6706223154_Davi Pramudya Putra -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Address   6706223154_Davi Pramudya Putra -->
        <div>
            <x-input-label for="address" :value="__('Alamat')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>
    
        <!-- Birthdate  6706223154_Davi Pramudya Putra  -->
        <div>
            <x-input-label for="birthdate" :value="__('Tanggal Lahir')" />
            <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required autofocus />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>

        <!-- PhoneNumber    6706223154_Davi Pramudya Putra -->
        <div>
            <x-input-label for="phoneNumber" :value="__('Nomor Telepon')" />
            <x-text-input id="phoneNumber" class="block mt-1 w-full" type="text" name="phoneNumber" :value="old('phoneNumber')" required autofocus />
            <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
        </div>

        <!-- Religion    6706223102_Muh. Fadhil Bayhaqi_46-03 -->
        <div>
            <x-input-label for="agama" :value="__('Agama')" />
            <x-text-input id="agama" class="block mt-1 w-full" type="text" name="agama" :value="old('agama')" required autocomplete="agama" />
            <x-input-error :messages="$errors->get('agama')" class="mt-2" />
        </div>

          <!-- Gender -->
        <div>
            <x-input-label :value="__('Jenis Kelamin')" />
            <div class="mt-2">
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio" name="gender" value="1" {{ old('gender') == '1' ? 'checked' : '' }}>
                    <span class="ml-2">Laki-laki</span>
                </label>
                <label class="inline-flex items-center ml-6">
                    <input type="radio" class="form-radio" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }}>
                    <span class="ml-2">Perempuan</span>
                </label>
            </div>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>



        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>