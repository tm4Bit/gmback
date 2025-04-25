<x-layout.login>
    <img
        class="brightness-50 absolute inset-0 -z-70 block h-screen w-screen object-cover"
        src="{{ Vite::asset('resources/images/homepage_OC_hero_desk_chevrolet.jpg') }}"
        alt=""
    />
    <div class="absolute inset-0 max-w-2xl mx-auto h-full">
        <div class="mt-[25%] flex flex-col itens-center justify-center md:flex-row md:items-start md:justify-between">
            <div>
                <img class="w-38" src="{{ Vite::asset('resources/images/logo-chevrolet.svg') }}" alt="" />
            </div>
            <form class="space-y-6">
                <h1 class="tracking-[0.5rem] text-white">ACESSO RESTRITO</h1>
                <x-input placeholder="Nome" color="white" />
                <x-password placeholder="Senha" color="white" />
                {!! NoCaptcha::display() !!}
                <x-button class="w-full" info label="Entrar" />
            </form>
        </div>
    </div>
</x-layout.login>
