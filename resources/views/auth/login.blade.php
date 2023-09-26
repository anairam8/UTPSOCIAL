<x-layout title="Iniciar Sesión">
    <x-forms.card-main text="Ingrese para ver las fotos y videos de tus amigos.">
        <x-forms.form route="{{ route('login') }}" method="POST" status="warning">
            <x-forms.input name="email" title="Email" placeholder="Tu Correo electronico" type="email"/>
            <x-forms.input name="password" title="Contraseña" placeholder="Tu Contraseña" type="password"/>
            <x-forms.input-button type="sumit" value="Iniciar Sesion"/>
        </x-forms.form>
        <hr class="mt-5 mb-5">
        <h2 class="text-center"><a class=" text-blue-600" href="{{ route('register') }}">¿Olvidaste tu contraseña?</a></h2>
    </x-forms.card-main>
<x-card-footer text="¿No tienes una cuenta?" route="{{ route('register') }}" textSecondary="Regístrate"/>
</x-layout>