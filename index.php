<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadCli. | Home</title>
    <link rel="stylesheet" href="src/css/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body onload="loading()">

    <div id="box-load">
        <div class="loader">.</div>
    </div>

    <div id="content">

        <!-- "---NAVBAR---" -->
        <nav class="navbar close">
            <div class="sidebar">
                <button class="open-nav" id="open-nav">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <div class="user">
                    <i class="fa-solid fa-circle-user"></i>
                    <span class="txt">User</span>
                </div>

                <ul>
                    <li class="active">
                        <a href="index.html">
                            <i class="fa-solid fa-house"></i>
                            <span class="txt">Home</span>
                        </a>
                    </li>

                    <li class="item-menu">
                        <a href="#container-registrerl">
                            <i class="fa-solid fa-user-group"></i>
                            <span class="txt">Clientes</span>
                        </a>
                    </li>


                </ul>
            </div>

            <div class="logout">
                <button id="logout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="txt">Logout</span>
                </button>
            </div>
        </nav>

        <div id="container">
            <div id="container-title">
                <img id="logoIntro" src="src/public/img/logoIntro.gif" alt="">
                <img id="logoIntroEstatica" src="src/public/img/logoIntroEstatica.png">
            </div>

            <div id="container-registrer">
                <div id="costumer-list" class="w-[940px]">
                    <div id="header-registrer">
                        <h2 id="title-list" class="text-3xl font-semibold text-black">
                            Lista de Clientes
                        </h2>
                        <button onclick="openC()" id="open-c"><i class="fa-solid fa-plus p-0"></i></button>
                    </div>

                    <div id="container-table" class="shadow-xl">

                        <div class="w-full flex flex-row justify-start items-start">
                            <div class="text-start font-normal flex justify-center items-center">
                                <div
                                    class="mr-10 py-2 w-[30px] flex justify-center items-center font-medium text-start">
                                    ID
                                </div>
                                <div class="mr-0 py-2 w-[300px] flex items-center font-medium justify-start">
                                    <div class="w-full overflow-hidden text-ellipsis whitespace-nowrap">
                                        Nome
                                    </div>
                                </div>
                                <div class="text-start ml-[-30px] mr-8 py-2 w-[100px]">
                                    <div class="overflow-hidden whitespace-nowrap font-medium">
                                        CPF/CNPJ
                                    </div>
                                </div>
                                <div class="text-start mr-9 py-2 w-[100px]">
                                    <div class="overflow-hidden whitespace-nowrap font-medium">
                                        Contato
                                    </div>
                                </div>
                                <div class="text-start mr-5 py-2 w-[200px]">
                                    <div class="w-full overflow-hidden text-ellipsis whitespace-nowrap font-medium">
                                        Email
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- --- ESTRUTURA CLIENTE - INICIO --- -->
                        <div onclick="openView()"
                            class="h-[45px] text-start font-normal cursor-pointer flex justify-center items-center hover:bg-[rgba(233,233,233,0.32)] rounded-lg">
                            <div class="mr-10 py-2 max-w-[30px] flex justify-center items-center text-start">
                                01
                            </div>

                            <div class="mr-10 py-2 max-w-[300px] flex items-center font-bold justify-start">
                                <img src="src/public/img/userIcon.png" class="w-[35px] mr-3 rounded-full">
                                <div class="w-full overflow-hidden text-ellipsis whitespace-nowrap">
                                    Anna Vitoria da Silva Martins
                                </div>
                            </div>

                            <div class="text-start mr-10 py-2 max-w-[100px]">
                                <div class="overflow-hidden whitespace-nowrap">
                                    333.333.333-33
                                </div>
                            </div>

                            <div class="text-start mr-10 py-2 max-w-[100px]">
                                <div class="overflow-hidden whitespace-nowrap">
                                    (99) 9999-9999
                                </div>
                            </div>

                            <div class="text-start mr-5 py-2 max-w-[200px]">
                                <div class="w-full overflow-hidden text-ellipsis whitespace-nowrap">
                                    annavitoriasm.cxm@gmail.com
                                </div>
                            </div>
                            <div onclick="opOptions(event)">
                                <i id="open-options" class="fa-solid fa-ellipsis-vertical cursor-pointer pl-5"></i>
                            </div>
                            <div id="options" class="right-[140px] absolute hidden">
                                <div class="flex-col ml-6 w-32 bg-white shadow-lg rounded-lg p-2">
                                    <div class="hover:bg-slate-100" onclick="openView()"><i class="fa-solid fa-eye"></i>
                                        Visualizar</div>
                                    <div class="hover:bg-slate-100"><i class="fa-solid fa-pen-to-square"></i> Editar
                                    </div>
                                    <div class="hover:bg-slate-100"><i class="fa-solid fa-trash"></i> Excluir</div>
                                </div>
                            </div>
                        </div>
                        <!-- --- ESTRUTURA CLIENTE - FIM --- -->



                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


    <div id="create" class="hidden w-full h-full fixed justify-center content-center p-20 pb-0 pt-0">
        <div
            class="w-[900px] h-screen shadow-xl flex-col content-center justify-center items-center rounded-lg bg-[rgb(253,253,253)] p-8 pt-12">
            <div
                class="flex w-[100%] place-items-center justify-between mt-[-20px] mr-[-20px] mb-10 border-b-[1.5px] pb-5">
                <h3 class="text-2xl font-bold">Cadastrar novo cliente</h3>
                <button onclick="closeC()" id="close-c" class="p-2 ">
                    <i class="fa-solid fa-x text-[14px]"></i>
                </button>
            </div>

            <div class="flex gap-5 mt-5">
                <!-- <div class="relative z-0 w-26 mb-5 group">
                    <input type="hidden" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        </label>
                </div> -->
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="nome" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Nome</label>
                </div>
                <div class="relative z-0 w-full mb-5 group"> 
                    <label for="underline_select" class="sr-only">Tipo de Pessoa</label>
                    <select id="underline_select" name="pessoa_fisica" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-800 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-900 peer">
                        <option value="cpf" class="text-gray-900">Pessoa Física</option>
                        <option value="cnpj" class="text-gray-900">Pessoa Jurídica</option>
                    </select>
                </div>
            </div>
            <div class="flex gap-5">
                <div class="relative z-0 w-80 mb-5 group">
                    <input type="text" name="cpf_cnpj" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        CPF/CNPJ</label>
                </div>
                <div class="relative z-0 w-80 mb-5 group">
                    <input type="text" name="contato" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Contato</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="email" name="email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Email</label>
                </div>
            </div>
            <div class="flex gap-5">
                <div class="relative z-0 w-44 mb-5 group">
                    <input type="text" name="cep" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        CEP</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="endereco" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Endereço</label>
                </div>
                <div class="relative z-0 w-28 mb-5 group">
                    <input type="text" name="numeroend" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Número</label>
                </div>
            </div>
            <div class="flex-rol">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="complemento" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Complemento</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="observacoes" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Observações</label>
                </div>
            </div>


                </div>

                <div class="flex justify-end content-end w-full">
                    <button onclick="closeC()" type="submit"
                        class="rounded-lg px-5 py-2.5 text-center text-sm font-medium text-blackfocus:outline-none sm:w-auto">Cancelar</button>
                    <button type="submit"
                        class="rounded-lg bg-[rgb(17,17,17)] px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none sm:w-auto">Adicionar</button>
                </div>

            </form>
        </div>


    </div>

</body>
<script src="src/script/sidebar.js"></script>
<script src="src/script/loading.js"></script>
<script src="src/script/logoIntro.js"></script>
<script src="src/script/register.js"></script>
<script src="src/script/profile.js"></script>
<script src="src/script/options.js"></script>
<script src="src/script/view.js"></script>

</html>