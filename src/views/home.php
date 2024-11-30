<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadCli. | Home</title>
    <link rel="stylesheet" href="../css/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css">
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
                <img id="logoIntro" src="../public/img/logoIntro.gif" alt="">
                <img id="logoIntroEstatica" src="../public/img/logoIntroEstatica.png" alt="Logo da CadCli">
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
                                    class="mr-10 ml-2 py-2 w-[30px] flex justify-center items-center font-medium text-start">
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
                        <?php foreach ($data as $client): ?>
                        <div onclick="opOptions()"
                            class="h-[45px] text-start font-normal cursor-pointer flex justify-left pl-2 items-center hover:bg-[rgba(233,233,233,0.32)] rounded-lg">

                            <div class="mr-10 py-2 max-w-[30px] min-w-[30px] flex justify-center items-center text-start">
                            <?= $client['id'] ?>
                            </div>

                            <div class="mr-3 py-2 max-w-[260px] min-w-[260px] flex items-center font-bold justify-start">
                                <div class="w-full overflow-hidden text-ellipsis whitespace-nowrap">
                                    <?= $client['nome'] ?>
                                </div>
                            </div>

                            <div class="text-start mr-8 py-2 max-w-[100px] min-w-[100px]">
                                <div class="overflow-hidden whitespace-nowrap">
                                    <?= $client['cpf_cnpj'] ?>
                                </div>
                            </div>

                            <div class="text-start mr-8 py-2 max-w-[120px] min-w-[100px]">
                                <div class="overflow-hidden whitespace-nowrap">
                                    <?= $client['contato'] ?>
                                </div>
                            </div>

                            <div class="text-start mr-1 py-2 max-w-[190px] min-w-[190px]">
                                <div class="w-full overflow-hidden text-ellipsis whitespace-nowrap">
                                    <?= $client['email'] ?>
                                </div>
                            </div>


                            <button id="dropdownDelayButton2" data-dropdown-toggle="dropdownDelay2" data-dropdown-delay="500" data-dropdown-trigger="hover" class="w-11 h-11 rounded-full">
                                <i id="open-options" class="fa-solid fa-ellipsis-vertical cursor-pointer pl-5"></i>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownDelay2" class="z-10 hidden absolute bg-white divide-y divide-gray-100 rounded-lg shadow h-min w-min dark:bg-gray-700">
                                <ul class="py-2 pb-0 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton">
                                    <li onclick="opOptions()">
                                        <a href="#" class="flex text-sm ml-[-10px] px-4 py-2 items-center text-center h-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Visualizar</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex text-sm ml-[-10px] px-4 py-2 items-center text-center h-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Editar</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex text-sm ml-[-10px] px-4 py-2 h-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Excluir</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- --- ESTRUTURA CLIENTE - FIM --- -->
                        <?php endforeach; ?>


                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


    <div id="create" class="hidden w-full h-full fixed items-center justify-center content-center p-20 pb-0 pt-0 bg-slate-300 bg-opacity-50 backdrop-blur-md">
        <div id="containerCreate"
            class="w-[900px] h-min shadow-xl flex-col content-center justify-center items-center rounded-lg bg-[rgb(253,253,253)] p-8 pt-12 pb-0">
            <div
                class="flex w-[100%] place-items-center justify-between mt-[-5px] mr-[-20px] mb-10 border-b-[1.5px] pb-5">
                <h3 class="text-2xl font-bold">Cadastrar novo cliente</h3>
                <button onclick="closeC()" id="close-c" class="w-8 h-8 mt-[-5px] rounded-full hover:bg-gray-100 transition-colors">
                <i class="fa-solid fa-x text-[14px] ml-[-2.5px]"></i>
                </button>
            </div>

            <form class="flex-rol justify-center mt-2 p-10 pt-0 pb-6">

                    <div class="flex gap-5 mt-5">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="nome" id="nome"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer"
                                placeholder=" " required />
                            <label
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Nome
                            </label>
                        </div>
                        <div class="relative z-0 w-96 mb-5 group">
                            <label class="sr-only">Tipo de Pessoa</label>
                            <select id="underline_select"
                                class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-800 appearance-none dark:text-black dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-900 peer">
                                <option value="fisica" class="text-gray-900">Pessoa Física</option>
                                <option value="juridica" class="text-gray-900">Pessoa Jurídica</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex gap-5">
                        <div class="relative z-0 w-96 mb-5 group">
                            <input type="number" name="floating_email" id="floating_email"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer"
                                placeholder=" " required />
                            <label
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                CPF/CNPJ</label>
                        </div>
                        <div class="relative z-0 w-80 mb-5 group">
                            <input type="number" name="contato" id="contato"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer"
                                placeholder=" " required />
                            <label
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Contato</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="email" name="email" id="email"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer"
                                placeholder=" " required />
                            <label
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Email</label>
                        </div>
                    </div>
                    <div class="flex gap-5">
                        <div class="relative z-0 w-44 mb-5 group">
                            <input type="number" name="cep" id="cep"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer"
                                placeholder=" " required />
                            <label
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                CEP</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="endereco" id="endereco"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer"
                                placeholder=" " required />
                            <label
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Endereço</label>
                        </div>
                        <div class="relative z-0 w-28 mb-5 group">
                            <input type="number" name="numeroend" id="numeroend"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer"
                                placeholder=" " required />
                            <label
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Número</label>
                        </div>
                    </div>
                    <div class="flex-rol">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="complementoend" id="complementoend"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer"
                                placeholder=" " required />
                            <label
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Complemento</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="observacoes" id="observacoes"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer"
                                placeholder=" " required />
                            <label
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Observações</label>
                        </div>
                    </div>

                    <div class="flex justify-end content-end w-full">
                        <button onclick="closeC()" type="submit"
                            class="rounded-lg px-5 py-2.5 text-center text-sm font-medium text-blackfocus:outline-none sm:w-auto">Cancelar</button>
                        <button type="submit"
                            class="rounded-lg bg-[rgb(17,17,17)] px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none sm:w-auto">Adicionar</button>
                    </div>

                </div>

            </form>
        </div>

    </div>


    <!-- -- Visualizar Cliente -- -->

    <div id="infoCustomer"
    class="hidden w-screen h-screen fixed top-0 left-0 justify-center items-center p-20 pb-0 pt-0 bg-slate-300 bg-opacity-50 backdrop-blur-md">
    <div class="w-[700px] h-[430px] shadow-xl flex-col justify-center items-center rounded-lg bg-[rgb(253,253,253)] p-8 pl-10 pr-10 pt-12">
        <div class="flex w-full place-items-center justify-between mt-[-30px] mr-[-20px] mb-3 border-b-[1.5px] pb-5">
            <div class="flex items-center">
                <div>
                    <div class="flex mt-6">
                        <h3 class="text-2xl font-bold"><?= $client['nome'] ?></h3>
                        <button id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="500" data-dropdown-trigger="hover" class="mt-[-5px] w-11 h-11 rounded-full ml-7 hover:bg-gray-100 transition-colors">
                            <i class="fa-solid fa-pen-to-square text-[22px]"></i>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownDelay" class="z-10 hidden absolute bg-white divide-y divide-gray-100 rounded-lg shadow h-min w-min dark:bg-gray-700">
                            <ul class="py-2 pb-0 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton">
                                <li>
                                    <a href="#" class="flex ml-[-5px] px-4 py-2 items-center text-center h-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Editar</a>
                                </li>
                                <li>
                                    <a href="#" class="flex ml-[-5px] px-4 py-2 h-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Excluir</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex items-center h-full w-min mt-[-5px]">
                        <p class="text-gray-900 font-normal text-sm">ID: </p>
                        <label id="idCustomer" class="text-gray-900 text-sm ml-1 font-normal"><?= $client['id'] ?></label>
                    </div>
                </div>
            </div>

            <button onclick="clOptions()" id="close-c" class="w-8 h-8 mt-[-5px] rounded-full hover:bg-gray-100 transition-colors">
                <i class="fa-solid fa-x text-[14px] ml-[-2.5px]"></i>
            </button>
        </div>

        <div class="flex gap-5">
            <div class="relative z-0 w-96 mb-5 group">
                <label class="text-gray-600 font-normal text-sm">Cpf/Cnpj:</label>
                <div class="mt-1 block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 border-gray-600 appearance-none">
                    <label id="cpfCnpj" class="absolute text-lg mt-8 text-gray-900 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]">
                    <?= $client['cpf_cnpj'] ?>
                    </label>
                </div>
            </div>
            <div class="relative z-0 w-96 mb-5 group">
                <label class="text-gray-600 font-normal text-sm">Contato:</label>
                <div class="mt-1 block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 border-gray-600 appearance-none">
                    <label id="contato" class="absolute text-lg mt-8 text-gray-900 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]">
                    <?= $client['contato'] ?>
                    </label>
                </div>
            </div>
        </div>

        <div class="flex gap-5">
            <div class="relative z-0 w-44 mb-5 group">
                <label class="text-gray-600 font-normal text-sm">Cep:</label>
                <div class="mt-1 block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 border-gray-600 appearance-none">
                    <label id="cep" class="absolute text-lg mt-8 text-gray-900 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]">
                    <?= $client['cep'] ?>
                    </label>
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label class="text-gray-600 font-normal text-sm">Endereço:</label>
                <div class="mt-1 block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 border-gray-600 appearance-none">
                    <label id="endereco" class="absolute text-lg mt-8 text-gray-900 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]">
                    <?= $client['endereco'] ?>
                    </label>
                </div>
            </div>
            <div class="relative z-0 w-28 mb-5 group">
                <label class="text-gray-600 font-normal text-sm">Número:</label>
                <div class="mt-1 block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 border-gray-600 appearance-none">
                    <label id="numeroEnd" class="absolute text-lg mt-8 text-gray-900 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]">
                    <?= $client['numero'] ?>
                    </label>
                </div>
            </div>
        </div>

        <div class="flex-col">
            <div class="relative z-0 w-full mb-5 group">
                <label class="text-gray-600 font-normal text-sm">Complemento:</label>
                <div class="mt-1 block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 border-gray-600 appearance-none">
                    <label id="complementoEnd" class="absolute text-lg mt-8 text-gray-900 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]">
                    <?= $client['complemento'] ?>
                    </label>
                </div>
            </div>
            <div class="relative z-0 w-full group mb-2">
                <label class="text-gray-600 font-normal text-sm">Observações:</label>
                <div class="mt-1 block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 border-gray-600 appearance-none">
                    <label id="observacoes" class="absolute text-lg mt-8 text-gray-900 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]">
                    <?= $client['observacoes'] ?>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
<script src="../script/sidebar.js"></script>
<script src="../script/loading.js"></script>
<script src="../script/logoIntro.js"></script>
<script src="../script/register.js"></script>
<script src="../script/profile.js"></script>
<script src="../script/view.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>

</html>
