    <x-layout title="Registrate">
        <x-forms.card-main text="Registrate para ver fotos y videos de tus amigos">
            <x-forms.form route="{{ route('register') }} " method="POST">
            <x-forms.input name="name" type="text" :value="old('name') ??  old('name')" title="Nombre" placeholder="Tu nombre"/>
            <x-forms.input name="username" type="text" :value="old('username') ??  old('username')" title="Username" placeholder="Tu nombre de usuario"/>
            <x-forms.input name="email" type="email" :value="old('name') ??  old('email')" title="Email" placeholder="Tu correo electronico"/>
            <x-forms.input name="password" type="password" title="Contraseña" placeholder="Tu contraseña"/>
            <x-forms.input name="password" type="password" title="Confirmacion Contraseña" placeholder="Repita su contraseña"/>
            <x-forms.input-button type="submit" value="Crear cuenta"/>
            </x-forms.form>
        </x-forms.card-main>
        <x-card-footer text="¿Tienes una cuenta?" route="{{ route('login') }}" textSecondary="Inicia sesion"/>
    </x-layout>