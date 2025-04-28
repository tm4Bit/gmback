<x-layout.login>
    <img
        class="absolute inset-0 -z-70 block h-screen w-screen object-cover brightness-50"
        src="{{ Vite::asset('resources/images/homepage_OC_hero_desk_chevrolet.jpg') }}"
        alt=""
    />
    <div class="absolute inset-0 mx-auto h-full max-w-[300px] md:max-w-2xl">
        <div class="itens-center mt-[25%] flex flex-col justify-center md:flex-row md:items-start md:justify-between">
            <div class="mb-10 flex justify-center">
                <img class="w-38" src="{{ Vite::asset('resources/images/logo-chevrolet.svg') }}" alt="" />
            </div>
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf
                <h1 class="tracking-[0.5rem] text-white">ACESSO RESTRITO</h1>
                <x-errors />
                <x-input name="name" value="{{ old('name') }}" placeholder="Nome" color="white" />
                <x-password name="password" placeholder="Senha" color="white" />
                {!! NoCaptcha::display() !!}
                <x-button type="submit" class="w-full" info label="Entrar" />
            </form>
        </div>
    </div>
</x-layout.login>
