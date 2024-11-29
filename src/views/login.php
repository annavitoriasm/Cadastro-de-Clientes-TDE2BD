<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CadCli. | Login</title>
</head>
<body>

    <div id="login" class="fixed flex h-full w-full content-center items-center justify-center bg-[#E7F1F1] bg-opacity-50 p-20 pb-0 pt-0 backdrop-blur-md">
        <div class="flex h-[550px] bg-[#E7F1F1] shadow-xl rounded-xl flex-col justify-center px-6 py-12 lg:px-8">
          <div class="sm:mx-auto sm:w-full sm:max-w-sm mb-0 mt-[-50px]">
            <img class="h-80 w-auto" src="/src/public/img/logoIntroEstatica.png" alt src="Logo da CadCli" />
            <h2 class="mt-[-40px] text-center text-3xl font-bold tracking-tight text-[rgba(10,10,10,0.96)]">Entre na sua conta</h2>
          </div>

          <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="index.php?action=login" method="POST">
              <div>
                <div class="mt-2 flex">
                  <div class="z-10 mr-[-8px] flex items-center justify-center rounded-[6px] border-r-0 bg-white px-3 py-1.5 text-base text-[rgba(10,10,10,0.96)] outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400">
                    <i class="fa-solid fa-user"></i>
                  </div>
                  <input type="email" name="email" id="email" autocomplete="email" required placeholder="Usuário ou email" class="block w-full rounded-md border-l-0 bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 sm:text-sm/6" />
                </div>
              </div>
  
              <div>
                <div class="flex items-center justify-between">
                  <div class="text-sm"></div>
                </div>
                <div class="mt-2 flex">
                  <div class="z-10 mr-[-8px] flex items-center justify-center rounded-[6px] border-r-0 bg-white px-3 py-1.5 text-base text-[rgba(10,10,10,0.96)] outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400">
                    <i class="fa-solid fa-lock"></i>
                  </div>
                  <input type="password" name="password" id="password" autocomplete="current-password" required placeholder="Senha" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 sm:text-sm/6" />
                </div>
              </div>
  
              <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-[rgba(10,10,10,0.96)] px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm transition-colors hover:bg-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Entrar</button>
              </div>
            </form>
  
            <div class="mt-2 flex w-full items-center justify-between gap-16 p-4">
              <div class="flex items-center gap-2">
                <div class="flex h-5 items-center">
                  <input id="helper-checkbox" aria-describedby="helper-checkbox-text" type="checkbox" value="" class="h-4 w-4 rounded border-white bg-white text-black" />
                </div>
                <p class="text-center text-sm/6 text-gray-500">Lembrar-me</p>
              </div>
              <a href="#" class="text-sm/6 font-semibold text-black transition-colors hover:text-indigo-800">Esqueci minha senha</a>
            </div>
          </div>
        </div>
  
  
      </div>
    
</body>
</html>