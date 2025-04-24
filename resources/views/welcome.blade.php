<x-layout.login>
    <img
        class="absolute inset-0 -z-70 block h-screen w-screen object-cover"
        src="{{ Vite::asset('resources/images/homepage_OC_hero_desk_chevrolet.jpg') }}"
        alt=""
    />
    <div class="absolute inset-0">
        <div>
            <img class="w-36" src="{{ Vite::asset('resources/images/logo-chevrolet.svg') }}" alt="" />
        </div>
        <form>
            <x-input placeholder="Nome" />
            <x-password placeholder="Senha" white />
        </form>
    </div>
</x-layout.login>
