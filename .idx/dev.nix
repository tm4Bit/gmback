{pkgs}: {
  channel = "stable-24.05";
  packages = [
    pkgs.nodejs_20
    pkgs.php83
    pkgs.php83Packages.composer
  ];
  idx.extensions = [
    "laravel.vscode-laravel"
    "qwtel.sqlite-viewer"
    "bmewburn.vscode-intelephense-client"
    "bradlc.vscode-tailwindcss"
    "stivo.tailwind-fold"
    "heybourn.headwind"
    "shufo.vscode-blade-formatter"
    "onecentlin.laravel-blade"
    "open-southeners.laravel-pint"
    "mvllow.rose-pine"
    "PKief.material-icon-theme"
  ];
  idx.previews = {
    previews = {
      web = {
        command = [
          "composer"
          "run"
          "dev"
        ];
        manager = "web";
      };
    };
  };
}